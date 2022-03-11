<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';

    if(!defined(ABSPATH)){
        $pagePath = explode('/wp-content/', dirname(__FILE__));
        include_once(str_replace('wp-content/' , '', $pagePath[0] . '/wp-load.php'));
    }

    $admin_email = get_option('admin_email');

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);
 
	//От кого письмо  
	$mail->setFrom('admin@salmin177.ru', 'БИОХИМ');
	//Кому отправить
	$mail->addAddress($admin_email);
	//Тема письма
	$mail->Subject = 'Письмо с сайта "БИОХИМ"';

	//Тело письма
	$body = '<h1>Новое письмо!</h1>';
	
    if(trim(!empty($_POST['name']))){
		$body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>';
	}
	if(trim(!empty($_POST['email']))){
		$body.='<p><strong>Почта:</strong> '.$_POST['email'].'</p>';
	}
    if(trim(!empty($_POST['phone']))){
		$body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>';
	}
    if(trim(!empty($_POST['message']))){
		$body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>';
	}
    if(trim(!empty($_POST['popup_name']))){
		$body.='<p><strong>Имя:</strong> '.$_POST['popup_name'].'</p>';
	}
    if(trim(!empty($_POST['popup_phone']))){
		$body.='<p><strong>Телефон:</strong> '.$_POST['popup_phone'].'</p>';
	}
     
   

	$mail->Body = $body;

	if (!$mail->send()) {
		$message = 'Ошибка';
	} 
    else {
		$message = 'Данные отправлены!';
	}

	$response = ['message' => $message];

	header('Content-type: application/json');
	echo json_encode($response);
?>

 