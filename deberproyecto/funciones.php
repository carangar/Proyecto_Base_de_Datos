<?php
require ('phpmailer/PHPMailerAutoload.php');
function Obtenerscriptactual($directorio,$indice){
	$archivo = explode("/",$directorio); //dividir el url por el simbolo
	return $archivo[$indice];	
}
function Mostraralerta($valor){
	echo "<script type='text/javascript'>alert('".$valor."')</script>";
}
function cerrarsesion(){
	session_destroy();
	unset($SESSION);
	header('Location: index.php');
	exit();
}
function enviarcorreo($to,$subject,$mensaje){
	
$mail=new PHPMailer;
$mail->isSMTP();
$mail->Host= 'smtp.gmail.com'; //asociar

$mail->SMTPDebug = 2;
$mail->Debugoutput='html';

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
	return True;
}else{
	return False;
}
		
}

?>