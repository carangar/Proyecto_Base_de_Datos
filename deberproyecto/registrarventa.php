<?php
require('coneccion.php');
$cliente = $_POST['cliente'];
$fecha_venta = $_POST['fecha_venta']; //debe ser igual al de registro (post)
$cantidad = $_POST['cantidad'];
$costo = $_POST['costo'];

$insertar = "INSERT INTO usuarios(usuario,password) VALUES ('".$usuario."','".$passw."')";
$con->query($insertar);

?>