<?php
require('funciones.php');
session_start();
if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){
  $usuario_activo=$_SESSION['usuario'];

}
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Inicio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <?php if(!empty($usuario_activo)){ ?>
            
            <li class="active"><a href="ventas.php">Venta</a></li>
        <?php }  ?>
        <li class="active"><a href="detalle.php">Reporte</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php
      $actual = Obtenerscriptactual($_SERVER['REQUEST_URI'],2); //server manda indice con todo el directorio
      if($actual != 'registro.php'){
        if(empty($usuario_activo)){
        echo "<li><button id='miboton'><span class='glyphicon glyphicon-log-in'></span> Iniciar</button></li>";  
        }else{
        echo "<li><p style='color:#ffffff'>Bienvenido ".$usuario_activo."</p></li>";
        echo "<li><button id='cerrar'><a class='glyphicon glyphicon-log-out' href='cerrar.php'> Logout</a></button></li>";
        } 
      }
      ?>
        	
      </ul>
    </div>
  </div>
</nav>