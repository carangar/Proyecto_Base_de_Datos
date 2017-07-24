<?php
require('coneccion.php');
require('funciones.php');
$usuario = $_POST['usuario'];
$passw = $_POST['passw']; //debe ser igual al de registro (post)
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$insertar = "INSERT INTO usuarios(usuario, passw, correo, telefono) VALUES ('".$usuario."','".$passw."','".$correo."','".$telefono."')";
Mostraralerta($insertar);
$con->query($insertar);
$mensaje='El empleado registrado es: '.$usuario.' y su clave es: '.$passw.'';
if (enviarcorreo($correo,'Informacion de registro a la empresa El telero.',$mensaje)){
	Mostraralerta('Correo enviado');
}else{
	Mostraralerta('No enviado.');
}
$consulta = "SELECT * from usuarios where usuario='".$usuario."' LIMIT 1 "; //retorna primer valor ps 1
$getinfo = $con->query($consulta);
$info = $getinfo->fetch(PDO::FETCH_ASSOC);
$id_usuario = $info['id'];
$headers = "from:";
$subject = "datos";
$mensaje="sus datos: ".$usuario."y su clave es: ".$passw;
#enviarcorreo($to,$subject,$mensaje);
?>