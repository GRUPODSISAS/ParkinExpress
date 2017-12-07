
<!DOCTYPE html>
<html lang="en">

    <?php include("head.php"); ?>
    <body>
        <?php include("navbar.php"); ?>
        <?php
        include("../model/consultar_cupos.php");
        $cupos = new consultarcupo();
        ?>
        <div class="container">
            <div class="panel panel-info">
                <div class="panel-heading">

                    <h4><i class='glyphicon glyphicon-user'></i>  Panel de Actividades Cliente </h4>

                </div>

                <div class="panel-body">

                    <?php include("modal/configuracion_cliente.php"); ?>
                    <?php include("modal/Agregar_vehiculos.php"); ?>
                    <?php include("modal/Reservas_cliente.php"); ?>
                    <?php include("modal/editar_vehiculo.php"); ?>
                    <?php include("modal/Mi_estacionamiento.php"); ?>

                    <form class="" role="form">

                        <div class="row content">

                            <div class="col-sm-8" style="">


                                <center><h4>Relación de datos del Cliente</h4></center>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="tipo_vehiculo">Nombres:</label>
                                            <input type="text" class="form-control" name="Nombres" disabled>  
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Apellidos">Apellidos:</label>
                                            <input type="text" class="form-control" name="Apellidos" disabled>
                                        </div>
                                    </div>
                                </div>            
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="id">Identificación:</label>
                                            <input type="text" class="form-control" name="id"  disabled>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Descripción">Correo Electronico: </label>
                                            <input type="text" class="form-control" name="Correo" disabled>
                                        </div>
                                    </div>
                                </div>                        
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="Cantidad">Estado de Usuario: </label>
                                        <input type="text" class="form-control" name="Estado" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                                <br>
                                <center><h4>Relación de Vehiculos por Cliente</h4></center>
                                <div class="row" align="center">
                                    <div class="col-sm-12">
                                        <div class="table-responsive" id="result" align="center"></div>
                                    </div>
                                </div>                        

                            </div>


                            <div class="col-sm-4" align="center">

                                <iframe src="http://www.zeitverschiebung.net/clock-widget-iframe?language=es&timezone=America%2FBogota" width="100%" height="120" frameborder="0" seamless></iframe> 

                                <img class="responsive" src="imagenes/logo_cliente.png"> 

                                <div class="row" align="center">
                                    <div class="col-sm-12">
                                        <h3>Cupos Disponibles</h3>
                                        <br>
                                        <div class="col-sm-6"> 
                                            <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                    <div align="center">
                                                      <!--<input type="text" name="CuposAutos" readonly="readonly">-->
                                                        <span><h4><label name="cuposAutos"></label>
                                                            </h4></span>
                                                        <img class="responsive" src="imagenes/auto.png">
                                                    </div>
                                                    <div class="">
                                                        <h4>Vehiculos</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6"> 
                                            <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                    <div align="center">
                                                        <span><h4><label name="cuposMotos"></label>
                                                            </h4></span>
                                                        <img class="responsive" src="imagenes/moto.png">
                                                    </div>
                                                    <div class="">
                                                        <h4>Motos</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row" align="center">
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                                <br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <?php
    include("footer.php");
    ?>
    <script type="text/javascript" src="js/productos.js"></script>
    <script src="http://localhost/Parking/view/js/sweetalert.min.js"></script>
    <script src="http://localhost/parking/view/js/Ajax.js"></script>
</body>
</html>



