<!DOCTYPE html>
<html lang="en">
<head>
<?php include('na.php');?>
<?php include('coneccion.php');
$sql = "SELECT * from tipoproveedor";
$resultado = $con->query($sql);
$proveedores = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>
</head>
<body>
<?php include('nav.php');?>

<div class="container text-center">

  <h3><center><strong>Registro de empleado</strong></center></h3><br>
  <div class="row">
  <form action="registrausuario.php" method="post">
  <label>Usuario</label><input type="text" name="usuario"><br>
  <label>Contraseña</label><input type="password" name="passw"><br>
  <label>Correo</label><input type="text" id="correo" name="correo"><br>
  <label>Telefono</label><input type="text" id="telefono" name="telefono"><br> 

</div>
   
   
    <!--contenedor de elementos-->

    <div id="campos_usuario">
      <h4><center><strong>Informacion de Empleado</strong></center></h4>
      <label>Nombres</label><input type="text" id="nombres" name="nombres"><br>
      <label>Apellidos</label><input type="text" id="apellidos" name="apellidos"><br>   
      <label>cedula</label><input type="text" id="cedula" name="cedula"><br>
    </div>

  


    <input type="submit" value="Enviar registro">
    </form>
    </div>
<footer class="container-fluid text-center">
  <p>El telero</p>
</footer>
</body>
<script type= "text/javascript" src="./js/registro.js"></script>
</html>
