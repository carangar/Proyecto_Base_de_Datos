<?php
require ('phpmailer/PHPMailerAutoload.php');
$mail=new PHPMailer;
$mail->isSMTP();
$mail->Host= 'smtp.gmail.com'; //asociar

$mail->SMTPDebug = 2;
$mail->Debugoutput='html';
$mail->CharSet='UTF-8';
$mail->Port=587;
$mail->SMTPSecure='tls';
$mail->SMTPAuth=true;
$mail->Username="adanavarrete15@gmail.com";
$mail->Password="computadora15";
$mail->setFrom('adanavarrete15@gmail.com','Adan Navarrete');
$mail->addAddress($to);
$mail->Subject=$subject;
$mail->Body= $mensaje;
//$mail->addAttachment('');
//$mail->msgHTML(file_get_contents('archivo.html'),dirname(__FILE__)); 

if($mail->send())
{
	echo 'envio bien';
}else{
	echo 'no envio';
}

?>