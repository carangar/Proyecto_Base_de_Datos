<!DOCTYPE html>
<html lang="en">
<head>
<?php
include('na.php');
include('coneccion.php');
$sql="SELECT * 
FROM ventas v, tipopago tp, infousuario n
WHERE v.tipo_pago = tp.id AND n.id = v.usuario
";
$resultado = $con->query($sql);
$ventas = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>
</head>
<body>

<?php include('nav.php');?>

<div class="container text-center">
	<?php include('login.php'); ?>
	<h3><center><strong>Detalle venta</center></strong></h3><br>
	<table align="center" border="1" width="800px">
		<thead>
			<tr>
				
				<th><center>Cliente</center></th>
				<th><center>Fecha</center></th>
				<th><center>Cantidad</center></th>
				<th><center>costo</center></th>
				<th><center>Empleado</center></th>
				<th><center>Detalle</center></th>
				<th><center>Tipo pago</center></th>
				<th><center>Generar</center></th>
				<th><center>Eliminar</center></th>

			</th>
		</thead>
		<tbody>
			<?php foreach($ventas as $venta => $detalle) { ?>
			<tr>
				
				<td><center><?php echo $detalle['cliente']; ?></center></td>
				<td><center><?php echo $detalle['fecha']; ?></center></td>
				<td><center><?php echo $detalle['cantidad']; ?></center></td>
				<td><center><?php echo $detalle['costo']; ?></center></td>
				<td><center><?php echo $detalle['nombres']; ?></center></td>
				<td><center><?php echo $detalle['det_venta']; ?></center></td>
				<td><center><?php echo $detalle['tipopago']; ?></center></td>
				<td><a href="generareporte.php?id=<?php echo $detalle['idventas']; ?>">Generar reporte</a></td>
				<td><a href="accionventa.php?id=<?php echo $detalle['idventas']; ?>">Eliminar reporte</a></td>

				
				</tr>
				<?php }?>
			</tbody>
		</table>
	</div><br>

