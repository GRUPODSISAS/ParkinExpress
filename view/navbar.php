<?php
session_start();

if(!isset($_SESSION['idCliente']) || empty($_SESSION['idEstado_Cliente'])){

header('location: ../index.php');
}

?>

<?php require_once("../model/login.php"); ?>

<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
      <a class="navbar-brand" href="#">PARKING EXPRESS <span class="  glyphicon glyphicon-flag"></span></a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</li> 
        <li class=""><a href="" data-toggle="modal" data-target="#estacionamiento"><i class='glyphicon glyphicon-time'></i> Mi Estacionamiento</a></li>
        <li class=""><a href="" data-toggle="modal" data-target="#vehiculos"><i class="fa fa-car" style="font-size:16px" ></i> Mis Vehiculos</a></li>
        <li class=""><a href="" data-toggle="modal" data-target="#reservas"><i class='glyphicon glyphicon-phone' >
        </i> Reservas</a></li>
        <li class=""><a href="" data-toggle="modal" data-target="#config"><i  class='glyphicon glyphicon-cog'></i> Configuracion</a></li>
       </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['Nombres']." ".$_SESSION['Apellidos'];?></a></li>
        <li><a href="../controller/logoutController.php"><span class="glyphicon glyphicon-log-in"></span> Salir</a></li>
      </ul>
    </div><!-- /.navbar-collapse --
  </div><!-- /.container-fluid -->
</nav>
