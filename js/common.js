new WOW().init();
$(document).ready(function() {
    $(".menu-collapsed").click(function() {
        $(this).toggleClass("menu-expanded");
    }
    );
    $(".menu-collapsed a").click(function() {
        $(".menu-collapsed").removeClass("menu-expanded");
    }
    );
    video=document.getElementById("videoPlayer");
    video.playbackRate=0.7;
    $('.js-lazyYT').lazyYT();
    $("a.scrollto").click(function() {
        var elementClick=$(this).attr("href"); var destination=$(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate( {
            scrollTop: destination
        }
        , 1000);
        return false;
    }
    );
    $(document).on('click', '.merbtn', function() {
        document.getElementById('mer').innerHTML=$(this).next().val();
        var temp=$(this).parent().find('.typemer');
        document.getElementById('mertp').value=temp.val();
        $('.corpmod').arcticmodal();
    }
    );
    $(document).on('click', '.progpop', function() {
        document.getElementById('prtype').value=$(this).next().val();
        $('.progmodal').arcticmodal();
    }
    );
    $(document).on('click', '.ctybtn', function() {
        $('.cityes').arcticmodal();
    }
    );
    $(document).on('click', '.progbtn', function() {
        $('.allprog').arcticmodal();
    }
    );
    $(document).on('click', '.callbtn', function() {
        $('.callmodal').arcticmodal();
    }
    );
    
    $(document).on('click', '.grambtn', function() {
        if($('.grammodal').hasClass("opened")){
$('.grammodal').arcticmodal();
        }else{
        $('.2003').append('<img src="img/grams/2003.jpg" data-full="img/grams/2003.jpg" alt="">');
        $('.2004').append('<img src="img/grams/2004.jpg" data-full="img/grams/2004.jpg" alt=""><img src="img/grams/2004_1.jpg" data-full="img/grams/2004_1.jpg" alt=""><img src="img/grams/2004_2.jpg" data-full="img/grams/2004_2.jpg" alt="">');
        $('.2006').append('<img src="img/grams/2006.jpg" data-full="img/grams/2006.jpg" alt=""><img src="img/grams/2006_1.jpg" data-full="img/grams/2006_1.jpg" alt="">');
        $('.2007').append('<img src="img/grams/2007.jpg" data-full="img/grams/2007.jpg" alt=""><img src="img/grams/2007_1.jpg" data-full="img/grams/2007_1.jpg" alt=""><img src="img/grams/2007_2.jpg" data-full="img/grams/2007_2.jpg" alt=""><img src="img/grams/2007_3.jpg" data-full="img/grams/2007_3.jpg" alt=""><img src="img/grams/2007_4.jpg" data-full="img/grams/2007_4.jpg" alt="">');
        $('.2008').append('<img src="img/grams/2008.jpg" data-full="img/grams/2008.jpg" alt=""><img src="img/grams/2008_1.jpg" data-full="img/grams/2008_1.jpg" alt=""><img src="img/grams/2008_2.jpg" data-full="img/grams/2008_2.jpg" alt=""><img src="img/grams/2008_3.jpg" data-full="img/grams/2008_3.jpg" alt=""><img src="img/grams/2008_4.jpg" data-full="img/grams/2008_4.jpg" alt=""><img src="img/grams/2008_5.jpg" data-full="img/grams/2008_5.jpg" alt="">');
        $('.2009').append('<img src="img/grams/2009.jpg" data-full="img/grams/2009.jpg" alt=""><img src="img/grams/2009_1.jpg" data-full="img/grams/2009_1.jpg" alt=""><img src="img/grams/2009_2.jpg" data-full="img/grams/2009_2.jpg" alt="">');
        $('.2010').append('<img src="img/grams/2010.jpg" data-full="img/grams/2010.jpg" alt=""><img src="img/grams/2010_1.jpg" data-full="img/grams/2010_1.jpg" alt=""><img src="img/grams/2010_2.jpg" data-full="img/grams/2010_2.jpg" alt=""><img src="img/grams/2010_3.jpg" data-full="img/grams/2010_3.jpg" alt="">');
        $('.2011').append('<img src="img/grams/2011.jpg" data-full="img/grams/2011.jpg" alt=""><img src="img/grams/2011_1.jpg" data-full="img/grams/2011_1.jpg" alt=""><img src="img/grams/2011_2.jpg" data-full="img/grams/2011_2.jpg" alt=""><img src="img/grams/2011_3.jpg" data-full="img/grams/2011_3.jpg" alt=""><img src="img/grams/2011_4.jpg" data-full="img/grams/2011_4.jpg" alt="">');
        $('.2013').append('<img src="img/grams/2013.jpg" data-full="img/grams/2013.jpg" alt=""><img src="img/grams/2013_1.jpg" data-full="img/grams/2013_1.jpg" alt=""><img src="img/grams/2013_2.jpg" data-full="img/grams/2013_2.jpg" alt=""><img src="img/grams/2013_3.jpg" data-full="img/grams/2013_3.jpg" alt="">');
        $('.2014').append('<img src="img/grams/2014.jpg" data-full="img/grams/2014.jpg" alt=""><img src="img/grams/2014_1.jpg" data-full="img/grams/2014_1.jpg" alt=""><img src="img/grams/2014_2.jpg" data-full="img/grams/2014_2.jpg" alt=""><img src="img/grams/2014_3.jpg" data-full="img/grams/2014_3.jpg" alt=""><img src="img/grams/2014_4.jpg" data-full="img/grams/2014_4.jpg" alt=""><img src="img/grams/2014_5.jpg" data-full="img/grams/2014_5.jpg" alt="">');
        $('.2015').append('<img src="img/grams/2015.jpg" data-full="img/grams/2015.jpg" alt=""><img src="img/grams/2015_1.jpg" data-full="img/grams/2015_1.jpg" alt=""><img src="img/grams/2015_2.jpg" data-full="img/grams/2015_2.jpg" alt=""><img src="img/grams/2015_3.jpg" data-full="img/grams/2015_3.jpg" alt=""><img src="img/grams/2015_4.jpg" data-full="img/grams/2015_4.jpg" alt="">');
        $('.grammodal').arcticmodal();
        $('.grammodal').addClass("opened");
    }
    });
    $(document).on('click', '.docbtn', function() {
                if($('.docmodal').hasClass("opened")){
$('.docmodal').arcticmodal();
        }else{
        $('.license').append('<img src="img/docs/licens1_sm.jpg" data-full="img/docs/licens1.jpg" alt=""><img src="img/docs/licens2_sm.jpg" data-full="img/docs/licens2.jpg" alt=""><img src="img/docs/licens3_sm.jpg" data-full="img/docs/licens3.jpg" alt="">');
        $('.sertif').append('<img src="img/docs/sertif1_sm.jpg" data-full="img/docs/sertif1.jpg" alt=""><img src="img/docs/sertif2_sm.jpg" data-full="img/docs/sertif2.jpg" alt=""><img src="img/docs/sertif3_sm.jpg" data-full="img/docs/sertif3.jpg" alt="">');
        $('.strah').append('<img src="img/docs/strah1_sm.jpg" data-full="img/docs/strah1.jpg" alt=""><img src="img/docs/strah2_sm.jpg" data-full="img/docs/strah2.jpg" alt=""><img src="img/docs/strah3_sm.jpg" data-full="img/docs/strah3.jpg" alt="">');
        $('.udost').append('<img src="img/docs/udostov1_sm.jpg" data-full="img/docs/udostov1.jpg" alt=""><img src="img/docs/udostov2_sm.jpg" data-full="img/docs/udostov2.jpg" alt="">');
        $('.docmodal').arcticmodal();
        $('.docmodal').addClass("opened");
    }
    });
    $(document).on('click', 'img[data-full]', function() {
        $('.docimg>img').attr("src", $(this).attr('data-full'));
        $('.docimg').arcticmodal();
    }
    );
    $(function() {
        if($('.menuline').length>0) {
            $('.menuline').css('z-index', 300);
            var menu=$('.menuline').offset().top;
            $(window).scroll(function() {
                if($(this).scrollTop()>menu) {
                    if($('.menuline').css('position')!='fixed') {
                        $('.menuline').css( {
                            'position': 'fixed', 'top': '0px', 'width': '100%', 'background-color': 'rgba(0,11,30,.9)', 'padding': '20px 0'
                        }
                        );
                    }
                }
                else {
                    if($('.menuline').css('position')!='static') {
                        $('.menuline').css( {
                            'position': 'absolute', 'width': 'inherit', 'background-color': 'transparent', 'padding': '0', 'top': '150px'
                        }
                        );
                    }
                }
            }
            );
        }
    }
    );
}

);


function heightDetect() {
    $('header').css('height', $(window).height());
    $('#section9').css('height', $(window).height());
    $('#section8').css('height', $(window).height());
    $('#section7').css('height', $(window).height());
    $('#section6').css('height', $(window).height());
    $('#section5').css('height', $(window).height());
    $('#section4').css('height', $(window).height());
    $('#section3').css('height', $(window).height());
    $('#section2').css('height', $(window).height());
}

;
heightDetect();
$(window).resize(function() {
    heightDetect();
}

);
$(function() {
    $('.posbl').hovercap( {
        toggleElement: '.posfade', toggleAnimation: 'fade'
    }
    );
    $('.inwbl').hovercap( {
        toggleElement: '.inwfade', toggleAnimation: 'fade'
    }
    );
}

);
$('.inwslide').slick( {
    infinite:true, slidesToShow:3, slidesToScroll:1, prevArrow:'.inwprev', nextArrow:'.inwnext', responsive:[ {
        breakpoint:801, settings: {
            slidesToShow: 2
        }
    }
    , {
        breakpoint:541, settings: {
            slidesToShow: 1
        }
    }
    ]
}

);
$('.invvidsect').slick( {
    infinite:true, slidesToShow:2, slidesToScroll:1, prevArrow:'.invprev', nextArrow:'.invnext', responsive:[ {
        breakpoint:769, settings: {
            slidesToShow: 1
        }
    }
    ]
}

);
$('.otzslidewr').slick( {
    infinite: true, slidesToShow: 3, slidesToScroll: 1, prevArrow: '.otzprew', nextArrow: '.otznext'
}

);
$('.workwithimg').slick( {
    infinite:true, slidesToShow:8, slidesToScroll:1, arrows:false, autoplay:true, autoplaySpeed:2000, responsive:[ {
        breakpoint:803, settings: {
            slidesToShow: 7
        }
    }
    , {
        breakpoint:706, settings: {
            slidesToShow: 6
        }
    }
    , {
        breakpoint:604, settings: {
            slidesToShow: 5
        }
    }
    , {
        breakpoint:503, settings: {
            slidesToShow: 4
        }
    }
    , {
        breakpoint:402, settings: {
            slidesToShow: 3
        }
    }
    ]
}

);
$('.iv1big').slick( {
    lazyLoad: 'ondemand', slidesToShow: 1, slidesToScroll: 1, arrows: false, fade: true, asNavFor: '.ivslide1'
}

);
$('.ivslide1').slick( {
    slidesToShow:5, slidesToScroll:1, asNavFor:'.iv1big', arrows:false, dots:false, focusOnSelect:true, responsive:[ {
        breakpoint:750, settings: {
            slidesToShow: 4, arrows: false, focusOnSelect: false
        }
    }
    , {
        breakpoint:650, settings: {
            slidesToShow: 3
        }
    }
    , {
        breakpoint:361, settings: {
            slidesToShow: 2
        }
    }
    ]
}

);


$('.iventlogos').slick( {
    infinite:true, slidesToShow:4, slidesToScroll:1, autoplay:true, arrows:false, adaptiveHeight:false, responsive:[ {
        breakpoint:993, settings: {
            slidesToShow: 3
        }
    }
    , {
        breakpoint:541, settings: {
            slidesToShow: 2
        }
    }
    ]
}

);




function actionBtn(param){
    var tmp_date = {};
    tmp_date.param = param;
    $.ajax({
        type: "POST",
        url: "test.php",
        data: tmp_date,
        success: function(html){
            var parse = JSON.parse(html);
            a = parse;
            document.getElementById("modalhead").innerHTML=parse[0].head;
            document.getElementById("modaldescr").innerHTML=parse[0].descr;
            document.getElementById("modalheadsecond").innerHTML=parse[0].head_sec;
            
            $('.bigimg').each(function(i,elem){
                 i++;
                $(elem).attr("src", "img/"+param+"/big_"+i+".jpg");
                $(elem).attr("data-full", "img/"+param+"/real_"+i+".jpg");
               
            });
             $('.smimg').each(function(i,elem){
                 i++;
                $(elem).attr("src", "img/"+param+"/small_"+i+".jpg");
               
            });
             $("#modalform").attr("name", param);
        $('.ivent1').arcticmodal();
        }
    }); 
}

ymaps.ready(init);
function init(){
    var myMap=new ymaps.Map("map",{center:[53.93907156452855,27.467800383488257],zoom:16,controls:[]}),
    myGeoObject=new ymaps.GeoObject();myMap.geoObjects.add(myGeoObject).add(new ymaps.Placemark([53.93955265895085,27.459140499999997],{balloonContent:'Ржавецкая, д. 3'},{preset:'islands#dotIcon',iconColor:'#31bea8'}));}
