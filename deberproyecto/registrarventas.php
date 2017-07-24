<?php
include('funciones.php');
include('coneccion.php');
/*$registrar = $_GET['registrar'];
$valorregistro = (string)$registrar;
if($valorregistro == 'ventas'){
	Mostraralerta('el usuario no a registrado venta');

}
if($valorregistro == 'productos'){
	Mostraralerta('el usuario no a registrado producto');
}*/


$cliente = $_POST['cliente'];
$fecha_venta= $_POST['fecha_venta']; //debe ser igual al de registro (post)
$cantidad = $_POST['cantidad'];
$costo = $_POST['costo'];
$usuario = $_POST['usuario'];
$detalle_venta = $_POST['detalle_de_venta'];
$tipopago = $_POST['tipo_pago'];
Mostraralerta($tipopago);
$tipo = '';
if($tipopago == 'efectivo'){
	$tipo = 1;
}
if($tipopago == 'credito'){
	$tipo = 2;

}
$consulta = "SELECT * from usuarios where usuario='".$usuario."' LIMIT 1 "; //retorna primer valor ps 1
$getinfo = $con->query($consulta);
$info = $getinfo->fetch(PDO::FETCH_ASSOC);

$insertaventa = "INSERT INTO ventas(cliente, fecha, cantidad, costo, usuario, det_venta, tipo_pago)
	VALUES('".$cliente."','".$fecha_venta."','".$cantidad."','".$costo."',".$info['id'].",'".$detalle_venta."',".$tipo.")"; echo $insertaventa;
$con->query($insertaventa);


/*$mensaje='la informacion: '.$usuario.'clave es: '.$passw.'';
if (enviarcorreo($correo,'informacion cuenta',$mensaje)){
	Mostraralerta('se envio');

}else{
	Mostraralerta('no envio');
}
*/
?>

