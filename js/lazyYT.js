;
(function($) {
    'use strict';

    function setUp($el, settings) {
        var width = $el.data('width'),
            height = $el.data('height'),
            ratio = ($el.data('ratio')) ? $el.data('ratio') : settings.default_ratio,
            id = $el.data('youtube-id'),
            padding_bottom, innerHtml = [],
            $thumb, thumb_img, loading_text = $el.text() ? $el.text() : settings.loading_text,
            youtube_parameters = $el.data('parameters') || '';
        ratio = ratio.split(":");
        if (typeof width === 'number' && typeof height === 'number') {
            $el.width(width);
            padding_bottom = height + 'px';
        } else if (typeof width === 'number') {
            $el.width(width);
            padding_bottom = (width * ratio[1] / ratio[0]) + 'px';
        } else {
            width = $el.width();
            if (width == 0) {
                width = $el.parent().width();
            }
            padding_bottom = (ratio[1] / ratio[0] * 100) + '%';
        }
        innerHtml.push('<div class="ytp-thumbnail">');
        innerHtml.push('<div class="ytp-large-play-button"');
        if (width <= 640) innerHtml.push(' style="transform: scale(1); position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; margin: auto; width: 137px; height: 137px;"');
        innerHtml.push('>');
        innerHtml.push('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="137" height="137" viewBox="0 0 137 137">');
        innerHtml.push('<image xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIkAAACJCAMAAAAv+uv7AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABklBMVEX///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////+w8FnEAAAAhXRSTlMABiI9VWuAkqKwu8PJzCVLb7IaSHWgyh5ShrcLRX61X5y+noV6ZVpQSS1ur8CRTzAQLHK2xZVgKwIhajwFV5ZMCjqJwRYTZr1kDTeMuV6uxwdzmCAuirpKP61WKlmNTsZAYwSqdhVTAZ1nMst7RI8XwlihbDYPk8RdpShxCYQSlx1hqD4U8GRW1AAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAWqSURBVHjazZz3XyI7EMAjIiASBUQUsGLHrtiwgF1UFM+uZ7l7vfde7rU//JFJaNKyu1k/M7/sgpnxy26SmUwKITqlzlJvbbDZHY3OJhd1NTkbHXZbg7XeUqfXoC5pbnHbPbS8eOzuluYXofC2+tr8tLr423ytXnMx2jsCQSonwUBHu1kYoc6ubkkMLt1dnSETOCw9vSX/qi/cP+AeHBoeGR4adA/0h/tKSvT2WBRzjEbGiv7D+ERkcmq6pNj01GRkYryo5FhkVCHHzOxcge3o/MLiUpXSS4sL89GC8nOzM4o4lmMFLTYaWFmV0FldCRTAeGLLCjhCa45861yPJ6QVE/H1fGt3rBmuuxubOWtbsW2NytuxrZz25oYhjp3dXAXZ20/qMJDc38tVl90d/SAHh1kzR6mEThuJ1FHWyOGBXpC1Y2HiJJbW/3NIOnYi7Byv6TLgPc3+lldnBjiYnL3KmjrV4Y7OL4Ty5ZVBDiZXl8LaxblW1euwUA3oqailkgwIe+FrbYrxG1FDbpVwMLkVteUmrkXLKny/504ZCCF3oqsOWuV1Xguneq/mzWQleS9c+GtpEOFNI0o5mESEJ5dEsYonklIOQkhKPBWpFxTndcT/YAIIIQ/cKwYlqu01bzWPT6aAEPL0yFtQzcZ8zvsRv1kgGRT+VMI1ujiv6FnNeTVcHkRvW73jPzWvsuZFVNvTamXWzGq+xSIacxXPfMDDgHuTQQjhXdxxxXhlhwdGHrU9azlJ8o7/sFIUt8udnkpfU0nuuDvcLf/XDR6zqvO+1eSWx7Zlw+wQj+IDLwJCCI9XNssNPni7uTS/knBJXlZqP8t8gKUiVJSTKz4kKx0dxnjw/GIghPAwO/b86xloVycSUfyhqgTNGbQfz/Ph+2x5wDIy/vjmrRoU/hpmi78chRZ8lJYhofQ9zUOFspKG0eFccX4lIu/4WGjpf19J2ipV6uUskDHaS8iSZH7JkwKSBAzfxwoTYD1gfV9KPZu8uvjAOMo+WOrJfxGCZN6WXKeWS6ONf/iRUZIk5Fd686+6U7rhFJJQ+rHhxCJvPp25z10QukpmjApTiyefGEzTb0NQ25X92A4J33VJ5eIk582nxlDWmZHubGfZATZlB87FJPSzzw35zDgY6RCfwEFHE/pIMv3hFwZIEtGCUMQb1BSXlJBQ+uVX+lHgMQT5iKMVrK0YIKFff7Mkq/5cVsBAK9z74OXIZJ4rklD6rd7ZpVV4PT64b2O389Kq5Umo67u0PpR5pt3G7pqhSS8YJcn4j+91kSxAZ8YeaQuYWTROQqntBx0ki6Dakrlzgw+Rr3FVSKhzRDvJEhh0Z+7s7GZCXrMaCaU/ak/9TjA9e2beFwJYDWPy6iT0p5+1NmiI0jx1xAL6k8pIKP3lV20kk6BlIfVwnVJIQv2//a6FZAqU6okVrtMqSTLPWsu00jSoWEkDu/RpUJQhofSPP+UtQta1gdjYJaychPbJp+ogyWjjjbhfPQml7/6StNjPStsJDMwHzCChj3/LDRYHWGEHaWQXtykklP4jNWcNvXwjcbLLoEkk1O9L1LY4yEo6SRO7DJlFkhks/lvT4hAr10Rc7DJsHkkmg/VfDYvDrJSLQGEtLlQzCfXUCBZGoBSiZ4KnnuBpO3j6Ezx9LB6/g8cX44lP8MRseOJYPLE9nvEOnjEgonExnlwBnvwJnpwSojwbntwjnnwsnhw1orw9nrkMPPM7iOa88MwD4pkbRTRfjGcOHdG6AjxrLRCtP8GzJgfROiU8a7cQrWfDs8YP0bpHRGtB8ayPRbRmGNE6akRry/Gst0e0BwHRvgxEe1UQ7d9BtKcJ0T4vRHvfEO0HRLRHEtG+UYJnLy1BtL8Y0Z5rgmcfOkG0N5/gOa+ACZYzHJhgOdeCCZazPphgOf8EBMmZMFyQnJMjBMfZQVlRfp7S/9TskWFc/puuAAAAAElFTkSuQmCC" width="137" height="137"/></svg>');
        innerHtml.push('</svg>');
        innerHtml.push('</div>');
        innerHtml.push('</div>');
        innerHtml.push('<div class="html5-info-bar">');
        innerHtml.push('<div class="html5-title">');
        innerHtml.push('<div class="html5-title-text-wrapper">');
        innerHtml.push('<a id="lazyYT-title-', id, '" class="html5-title-text" target="_blank" tabindex="3100" href="//www.youtube.com/watch?v=', id, '">');
        innerHtml.push(loading_text);
        innerHtml.push('</a>');
        innerHtml.push('</div>');
        innerHtml.push('</div>');
        innerHtml.push('</div>');
        $el.css({
            'padding-bottom': padding_bottom
        }).html(innerHtml.join(''));
        if (width > 640) {
            thumb_img = 'maxresdefault.html';
        } else if (width > 480) {
            thumb_img = 'sddefault.html';
        } else if (width > 320) {
            thumb_img = 'hqdefault.html';
        } else if (width > 120) {
            thumb_img = 'mqdefault.html';
        } else if (width == 0) {
            thumb_img = 'hqdefault.html';
        } else {
            thumb_img = 'default.html';
        }
        $thumb = $el.find('.ytp-thumbnail').css({
            'background-image': ['url(http://img.youtube.com/vi/', id, 'index.html', thumb_img, ')'].join('')
        }).addClass('lazyYT-image-loaded').on('click', function(e) {
            e.preventDefault();
            if (!$el.hasClass('lazyYT-video-loaded') && $thumb.hasClass('lazyYT-image-loaded')) {
                $el.html('<iframe src="http://www.youtube.com/embed/' + id + '?autoplay=0&' + youtube_parameters + '" frameborder="0" allowfullscreen></iframe>').addClass('lazyYT-video-loaded');
            }
        });
        $.getJSON('http://gdata.youtube.com/feeds/api/videos/' + id + '?v=2&alt=json', function(data) {
            $el.find('#lazyYT-title-' + id).text(data.entry.title.$t);
        });
    }
    $.fn.lazyYT = function(newSettings) {
        var defaultSettings = {
            loading_text: 'Loading...',
            default_ratio: '16:9',
            callback: null,
            container_class: 'lazyYT-container'
        };
        var settings = $.extend(defaultSettings, newSettings);
        return this.each(function() {
            var $el = $(this).addClass(settings.container_class);
            setUp($el, settings);
        });
    };
}(jQuery));