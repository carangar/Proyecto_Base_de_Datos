<!DOCTYPE html>
<html lang="en">
<?php include('na.php');?>
<body>
<?php include('nav.php');?>

<div class="container text-center">

  <h3><center><strong>Registro de venta</strong></center></h3><br>
  <div class="row">
  <form action="registrarventas.php" method="post">
  <label>Cliente</label><input required type="text" name="cliente"><br>
  <label>Fecha de venta</label><input required type="date" name="fecha_venta" id="fecha_venta" onclick="popUpCalendar(this,form.fecha de venta, 'yyyy/mm/dd');"/><br>
  <label>Cantidad</label><input required type="text" name="cantidad"><br>
  <label>Costo</label><input required type="text" name="costo"><br>
  <label>Empleado</label><input required type="text" name="usuario"><br>
  <label>Detalle de venta</label><input required type="text" name="detalle_de_venta"><br>
  <label>Tipo de pago</label>
  <select name="tipo_pago" required>
    <option name="efectivo">Efectivo</option>
    <option name="credito">Credito</option>
    
    </select><br><br>
    <!--contenedor de elementos-->
   

    <input type="submit" value="send venta">
    </form>
    </div>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>
</body>
<script type= "text/javascript" src="./js/registro.js"></script>
</html>
