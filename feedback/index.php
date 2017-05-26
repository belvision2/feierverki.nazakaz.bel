<?php

$act = isset($_REQUEST['act']) ? $_REQUEST['act'] : die('error');
$params = isset($_REQUEST['json']) ? json_decode($_REQUEST['json'], true) : array();
$jsonBox = array();
$error = array();
$info = array();
$exemple = array();
$form = array();
$host = $_SERVER['HTTP_HOST'];
$ref = $_SERVER['HTTP_REFERER'];
$ips = ($_SERVER['REMOTE_ADDR']);
$ipl = "http://ipgeobase.ru/?address=";
$where = htmlspecialchars($_GET['where']);
$where = substr($where, 0, 100);



$form['callform'] = array(
	'fields' => array(
		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'Заполните правильно поле Имя',
				'maxlength' => 'Заполните правильно поле Имя',
			)
		),
		
		
		
		'phone' => array(
			'title' => 'Телефон',
      	'validate' => array(
				'preg' => "/^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/",
				'minlength' => '9',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'не все указаны цифры',
			)
	
		),
	
	
	
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'обратный звонок',
		'title' => 'ФЕЙЕРВЕРКИ',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'e-mail',
		'from_name' => 'name',
		'to_email' => '375291340005@sms.velcom.by,375291340005@sms.velcom.by,vitaminiby@ya.ru,Salut_show@mail.ru',
		'to_name' => 'Сергей Гаев',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['hdform'] = array(
	'fields' => array(
		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'Заполните правильно поле Имя',
				'maxlength' => 'Заполните правильно поле Имя',
			)
		),
		
		
		
		'phone' => array(
			'title' => 'Телефон',
      	'validate' => array(
				'preg' => "/^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/",
				'minlength' => '9',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'ошибка в телефоне',
			)
	
		),
	
	
	
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'Бесплатный расчет программы фейерверков верх',
		'title' => 'ФЕЙЕРВЕРКИ',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'e-mail',
		'from_name' => 'name',
		'to_email' => '375291340005@sms.velcom.by,vitaminiby@ya.ru,Salut_show@mail.ru',
		'to_name' => 'Сергей Гаев',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['progf'] = array(
	'fields' => array(
		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'Заполните правильно поле Имя',
				'maxlength' => 'Заполните правильно поле Имя',
			)
		),
		
		
		
		'phone' => array(
			'title' => 'Телефон',
      	'validate' => array(
				'preg' => "/^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/",
				'minlength' => '9',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'не все указаны цифры',
			)
	
		),
	
	
	
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'заказать расчет',
		'title' => 'ФЕЙЕРВЕРКИ',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'e-mail',
		'from_name' => 'name',
		'to_email' => '375291340005@sms.velcom.by,vitaminiby@ya.ru,Salut_show@mail.ru',
		'to_name' => 'Сергей Гаев',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['iventform'] = array(
	'fields' => array(
		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'Заполните правильно поле Имя',
				'maxlength' => 'Заполните правильно поле Имя',
			)
		),
		
		
		
		'phone' => array(
			'title' => 'Телефон',
      	'validate' => array(
				'preg' => "/^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/",
				'minlength' => '9',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'не все указаны цифры',
			)
	
		),
	
	
	
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'разработка комплексного проекта',
		'title' => 'ФЕЙЕРВЕРКИ',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'e-mail',
		'from_name' => 'name',
		'to_email' => '375291340005@sms.velcom.by,vitaminiby@ya.ru,Salut_show@mail.ru',
		'to_name' => 'Сергей Гаев',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['merf'] = array(
	'fields' => array(
		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'Заполните правильно поле Имя',
				'maxlength' => 'Заполните правильно поле Имя',
			)
		),
		
		
		
		'phone' => array(
			'title' => 'Телефон',
      	'validate' => array(
				'preg' => "/^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/",
				'minlength' => '9',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'не все указаны цифры',
			)
	
		),
	
	
	
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'индивидуальный расчет стоимости',
		'title' => 'ФЕЙЕРВЕРКИ',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'e-mail',
		'from_name' => 'name',
		'to_email' => '375291340005@sms.velcom.by,vitaminiby@ya.ru,Salut_show@mail.ru',
		'to_name' => 'Сергей Гаев',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['hform'] = array(
	'fields' => array(
		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'Заполните правильно поле Имя',
				'maxlength' => 'Заполните правильно поле Имя',
			)
		),
		
		
		
		'phone' => array(
			'title' => 'Телефон',
      	'validate' => array(
				'preg' => "/^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/",
				'minlength' => '9',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'не все указаны цифры',
			)
	
		),
	
	
	
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'не нашли нужного мероприятия',
		'title' => 'ФЕЙЕРВЕРКИ',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'e-mail',
		'from_name' => 'name',
		'to_email' => '375291340005@sms.velcom.by,vitaminiby@ya.ru,Salut_show@mail.ru',
		'to_name' => 'Сергей Гаев',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['hd1form'] = array(
	'fields' => array(
		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'Заполните правильно поле Имя',
				'maxlength' => 'Заполните правильно поле Имя',
			)
		),
		
		
		
		'phone' => array(
			'title' => 'Телефон',
      	'validate' => array(
				'preg' => "/^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/",
				'minlength' => '9',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'не все указаны цифры',
			)
	
		),
	
	
	
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'бесплатный расчет стоимости низ',
		'title' => 'ФЕЙЕРВЕРКИ',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'e-mail',
		'from_name' => 'name',
		'to_email' => '375291340005@sms.velcom.by,vitaminiby@ya.ru,Salut_show@mail.ru',
		'to_name' => 'Сергей Гаев',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

$form['qform'] = array(
	'fields' => array(
		'name' => array(
			'title' => 'Имя',
			'validate' => array(
				'preg' => '%[A-Z-a-zА-Яа-я\s]%',
				'minlength' => '3',
				'maxlength' => '35',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'Заполните правильно поле Имя',
				'maxlength' => 'Заполните правильно поле Имя',
			)
		),
		
		
		
		'phone' => array(
			'title' => 'Телефон',
      	'validate' => array(
				'preg' => "/^(\+?\d+)?\s*(\(\d+\))?[\s-]*([\d-]*)$/",
				'minlength' => '9',
			),
			'messages' => array(
				'preg' => '',
				'minlength' => 'не все указаны цифры',
			)
	
		),
	
	
	
	),
	'cfg' => array(
		'charset' => 'utf-8',
		'subject' => 'остались вопросы низ',
		'title' => 'ФЕЙЕРВЕРКИ',
		'ajax' => true,
		'validate' => true,
		'from_email' => 'e-mail',
		'from_name' => 'name',
		'to_email' => '375291340005@sms.velcom.by,vitaminiby@ya.ru,Salut_show@mail.ru',
		'to_name' => 'Сергей Гаев',
		'geoip' => true,
		'referer' => true,
		'type' => 'html',
		'tpl' => true,
		'antispam' => 'email77',
		'antispamjs' => 'address77',
		'okay' => 'Сообщение отправлено - OK',
		'fuck' => 'Сообщение отправлено - ERROR',
		'spam' => 'Cпам робот',
		'notify' => 'color-modal-textbox',
		'usepresuf' => false
	)
);

if($act == 'cfg') {
   $jsonBox['configs'] = ExportConfigs($form);
    die(json_encode($jsonBox));
}

function ExportConfigs($form) {
    $need = array('antispam','antispamjs','notify');
    $conf = array();
     foreach($form as $name => $data) {
         foreach($data['cfg'] as $k => $cfg) {
           if(in_array($k, $need)) {
               $conf[$name]['cfg'][$k] = $cfg;
           }
         }
     }

    return $conf;
}


if(isset($form[$act])) {

   $form = $form[$act];
   $getdata = array();
   $sb = array(); // subject и body


      foreach($form['fields'] as $name => $field) {

            $title = (isset($field['title'])) ? $field['title'] : $name;
            $getdata[$name]['title'] = $title;
            $rawdata = isset($_POST[$name]) ? trim($_POST[$name]) : '';

              if(isset($field['validate'])) {              

                  $def = 'Поле с именем [ '.$name.' ] содержит ошибку.';
                  // -0-
                  if(isset($field['validate']['required']) &&
                      empty($rawdata)) {
                      $error[$name] = isset($field['messages']['required']) ? sprintf($field['messages']['required'], $title) :
                                     (isset($messages['validator']['required']) ? sprintf($messages['validator']['required'], $title) : $def);
                  }
                  // -1-
                  if(isset($field['validate']['minlength']) &&
                      mb_strlen($rawdata) < $field['validate']['minlength']) {
                      $error[$name] = isset($field['messages']['minlength']) ? sprintf($field['messages']['minlength'], $title, $field['validate']['minlength']) : $def;
                  }
                  // -2-
                  if(isset($field['validate']['maxlength']) &&
                    mb_strlen($rawdata) > $field['validate']['maxlength']) {
                        $error[$name] = isset($field['messages']['maxlength']) ? sprintf($field['messages']['maxlength'], $title, $field['validate']['maxlength']) : $def;
                  }
                  // -3-
                  if(isset($field['validate']['preg']) && mb_strlen($rawdata) > 0 &&
                      !preg_match($field['validate']['preg'], $rawdata)) {
                      $error[$name] = isset($field['messages']['preg']) ? sprintf($field['messages']['preg'], $title, $field['validate']['preg']) : $def;
                  }
                  // -4-
                  if(isset($field['validate']['substr']) &&
                      mb_strlen($rawdata) > $field['validate']['substr']) {
                      $rawdata = mb_substr($rawdata, 0, $field['validate']['substr']);
                  }

               $outdata = htmlspecialchars($rawdata);

               $getdata[$name]['value'] = $outdata;

              }
               else {
                 $getdata[$name]['value'] = htmlspecialchars($rawdata);
              }

               if(empty($getdata[$name]['value'])) {
                     unset($getdata[$name]);
                  }


      } //foreach end


    if(isset($form['cfg']['antispam']) && isset($_POST[$form['cfg']['antispam']])) {
        if(!empty($_POST[$form['cfg']['antispam']])) {
         $error[] = $form['cfg']['spam'];
        }
    }
     if(isset($form['cfg']['antispamjs']) && isset($_POST[$form['cfg']['antispamjs']])) {
         if(!empty($_POST[$form['cfg']['antispamjs']])) {
             $error[] = $form['cfg']['spam'];
         }
     }


    if(count($error) == 0) {

      if(function_exists("mb_internal_encoding")) mb_internal_encoding($form['cfg']['charset']);
      $get_fromName = (isset($form['fields'][$form['cfg']['from_name']]) && isset($getdata[$form['cfg']['from_name']]['value']) && mb_strlen($getdata[$form['cfg']['from_name']]['value']) > 2) ? $getdata[$form['cfg']['from_name']]['value'] : ((mb_strlen($form['cfg']['from_name']) > 2 && !isset($_POST[$form['cfg']['from_name']])) ? $form['cfg']['from_name'] : 'Anonymous');
      $get_fromEmail = (isset($form['fields'][$form['cfg']['from_email']]) && isset($getdata[$form['cfg']['from_email']]['value']) && mb_strpos('@', $getdata[$form['cfg']['from_email']]['value']) === false) ? $getdata[$form['cfg']['from_email']]['value'] : ((mb_strpos('@', $form['cfg']['from_email']) !== false) ? $form['cfg']['from_email'] : 'no-reply@'.$host);

      $fromName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($get_fromName, $form['cfg']['charset'], "Q") : $get_fromName;
      $sb['subject'] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($form['cfg']['subject'], $form['cfg']['charset'], "Q") : $form['cfg']['subject'];
      
      $toName = trim($form['cfg']['to_name'], " ,");
      $toEmail = trim($form['cfg']['to_email'], " ,");
 
      if(strpos($toName, ",") !== false) { 
         $exp_toName = explode(",", $toName);   
         $c = count($exp_toName);
          for($i=0; $i<$c; $i++) {
           $exp_toName[$i] = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader(trim($exp_toName[$i]), $form['cfg']['charset'], "Q") : trim($exp_toName[$i]);
          } 
       } 
        else {
          $toName = (function_exists("mb_encode_mimeheader")) ? mb_encode_mimeheader($toName, $form['cfg']['charset'], "Q") : $toName;
       }
       
      if(strpos($toEmail, ",") !== false) { 
         $exp_toEmail = explode(",", $toEmail);
      }         
      
      $To = '';
      
       if(isset($exp_toEmail)) {
        $c = count($exp_toEmail);
          for($i=0; $i < $c; $i++) { 
               $To .= ((isset($exp_toName) && isset($exp_toName[$i])) ? $exp_toName[$i] : $toName) . " <".trim($exp_toEmail[$i]).">";
               if($i < ($c-1)) $To .= ", ";
           }
       } 
        else {
           $To = ((isset($exp_toName) && isset($exp_toName[0])) ? $exp_toName[0] : $toName)." <".$toEmail.">";
       }


      $headers = "Return-Path: <".$get_fromEmail.">\r\n";
      $headers .= "From: ".$fromName." <".$get_fromEmail.">\r\n";
      $headers .= "X-Mailer: Feedback, v0.3 (http://vitamini.by)\r\n";
      $headers .= "X-Priority: 3\r\n";
      $headers .= "Reply-To: ".$fromName." <".$get_fromEmail.">\r\n";
      //$headers .= "To: ".$To."\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/" . $form['cfg']['type'] . "; charset=\"" . $form['cfg']['charset'] . "\"\r\n";
      $headers .= "Content-Transfer-Encoding: 8bit\r\n";



      $sb['body'] = "";
      // парсим шаблон
      if($form['cfg']['tpl']) {
       $out = tpl(array('name' => $act, 'getdata' => $getdata, 'cfg' => $form['cfg']));
       if(is_string($out)) {
          $sb['body'] = $out;

    $sb['body'] .= "\r\n\r\n\r\n\r\n <br /><b>IP Отправителя</b> ".$ipl.$ips;

       }
     }
      // или отдаем голый текст
        if(mb_strlen(trim($sb['body'])) < 10) {
          if(isset($form['cfg']['title']))
              $sb['body'] .= $form['cfg']['title']."\r\n\r\n";
          foreach($getdata as $name => $data) {
              $sb['body'] .= $data['title'].": ".$data['value']."\r\n";
          }
          if($form['cfg']['referer'])

    $sb['body'] .= "\r\n\r\n\r\n\r\n <br /><b>IP Отправителя</b> ".$ipl.$ips;

      }
      // если есть что добавить
       if(isset($form['cfg']['adds']) &&
          is_array($form['cfg']['adds'])) {
          $sb = adds($sb);
       }

      //отправка письма
      $mail = mail($To, $sb['subject'], $sb['body'], $headers);

      if($mail) {
          $jsonBox['ok'] = 1;
          $info[] = $form['cfg']['okay'];

         //setcookie("limit", "1", time() + $form['cfg']['limit']);

      }
       else {
           $info[] = $form['cfg']['fuck'];
       }

    }

 } else {
    $error[] = 'Нет настроек формы с именем #'.$act;
 }
    
    if(count($error) > 0) {
        $jsonBox['errors'] = $error;
    }
    if(count($info) > 0) {
        $jsonBox['infos'] = $info;
    }

    die(json_encode($jsonBox)); //мертвые с косами

/* добавляет любые доп данные из вне в нужное место
 * (например в заголовок письма необходимо дабавить Ник юзера или Номер заказа )
 *
 *  */

function adds($vars) {
    global $form;
    $adds = $form['cfg']['adds'];
    foreach($adds as $key => $opts) {
        if(is_string($key)) {
            $one = array();
            $two = array();
            foreach($opts as $i => $val) {
                if(isset($_POST[$val])) {
                  $one[] = '%%'.$val.'%%';
                  $two[] = $_POST[$val];
                }
            }
           $vars[$key] = str_replace($one, $two, $vars[$key]);
        }
    }
       return $vars;
}
/*
 * парсер шаблона
 */
 function tpl($vars) {
    $tpl = 'tpl/'.$vars['name'].'.tpl';
    if(file_exists($tpl)) {
     $template = file_get_contents($tpl);
        foreach($vars['getdata'] as $name => $data) {
            $template = str_replace(array("%%".$name.".title%%", "%%".$name.".value%%"), array($data['title'], $data['value']), $template);
        }
        return $template;
    }
     else {
      return false;
    }
 }

