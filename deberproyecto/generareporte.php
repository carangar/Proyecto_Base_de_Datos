<?php ob_start();
$id = $_GET['id'];
include ('coneccion.php');


$sql="SELECT * 
FROM ventas v, tipopago tp, infousuario n
WHERE v.tipo_pago = tp.id AND n.id = v.usuario
";
$resultado = $con->query($sql);
$ventas = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<html>
<body>
	<table align="center" border="1" width="800px">
		<thead>
			<tr>
				<th>Id</th>
				<th><center>Cliente</center></th>
				<th><center>Fecha</center></th>
				<th><center>Cantidad</center></th>
				<th><center>costo</center></th>
				<th><center>Empleado</center></th>
				<th><center>Detalle</center></th>
				<th><center>Tipo pago</center></th>
	

			</th>
		</thead>
		<tbody>
			<?php foreach($ventas as $venta => $detalle) { ?>
			<tr>
				<td><center><?php echo $detalle['idventas']; ?></center></td>
				<td><center><?php echo $detalle['cliente']; ?></center></td>
				<td><center><?php echo $detalle['fecha']; ?></center></td>
				<td><center><?php echo $detalle['cantidad']; ?></center></td>
				<td><center><?php echo $detalle['costo']; ?></center></td>
				<td><center><?php echo $detalle['nombres']; ?></center></td>
				<td><center><?php echo $detalle['det_venta']; ?></center></td>
				<td><center><?php echo $detalle['tipopago']; ?></center></td>
				

				</tr>
				<?php }?>
			</tbody>
		</table>
</body>
</html>
<?php
require_once('dompdf/dompdf_config.inc.php');
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->set_paper('a4','landscape');
$dompdf->render();
$pdf = $dompdf->output();
$filename="Reporte.pdf";
$dompdf->stream($filename,array("Attachment"=>0));
?>
