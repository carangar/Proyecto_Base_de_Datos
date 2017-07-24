<?php
#clase empresa con ruc usuarios nombre telefono, funciones ver nombre obtener lista usuarios.
/*class empresa{
	public $listausuario = array();
	public $ruc;
	public $nombre;
	public $telefono;
	function __construct($ruc,$nombre,$telefono){
		$this->ruc = $ruc;
		$this->nombre= $nombre;
		$this->telefono = $telefono;
	}
	public function obtenerinformacion(){
		$info=array(
			"ruc"=>$this->ruc;
			"nombre"=>this->nombre;
			"telefono"=>this->telefono;
		);
		return $info;

	}
	public function 

} */
class usuario{
	public $id;
	public $nombre;
	public $tipo;
	public $correo;



	function __construct($nombre,$correo,$id){
		$this->nombre = $nombre;
		$this->correo = $correo;
		$this->id = $id;
	}

	/*
	public function setnombre($nombre){
		$this->nombre=$nombre;
	}
	
	}
	public function setcorreo($mail){
		$this->correo=$mail;
	}
	public function setid($id){
		$this->id=$id;
	}
	public function enviarinformacion($informacion){
		$this->nombre=$nombre;
	}*/
	public function enviarinformacion($informacion){
		require_once ('phpmailer/PHPMailerAutoload.php');
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
	}
	}
?>