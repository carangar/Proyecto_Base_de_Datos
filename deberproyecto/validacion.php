<?php
require('coneccion.php');
require('funciones.php');
$usuariologin = $_POST['usuario'];
$passwlogin = $_POST['passw'];
if(empty($usuariologin) || empty($passwlogin)){header("Location: index.php"); exit();
}
$sql = "SELECT * FROM usuarios WHERE usuario = '".$usuariologin."' LIMIT 1 ";
$get_info = $con->query($sql);
$user = $get_info->fetch(PDO::FETCH_ASSOC);
$result = $user['usuario'];
if( $user['usuario']==$usuariologin && $user['password']==$passlogin ){
	session_start();
	$_SESSION['usuario']=$usuariologin;
	header("Location: informacion.php");
}else{
	Mostraralerta("Error: mal ingresado");
	exit();
}

?>