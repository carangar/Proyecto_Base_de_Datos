
<?php
include('coneccion.php');

$accion = $_GET['eliminar'];
$id = $_GET['id'];
$eliminar = (string)$accion;
if($eliminar == 'True'){
	$delete = "DELETE from ventas where idventas=".$id." ";
	$con->query($delete);
}
header("Location: detalle.php");

?>