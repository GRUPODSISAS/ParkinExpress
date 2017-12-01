
	
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>

  </head>
  <body>
	<?php
	include("navbar_etapas.php");
	?>  
    <div class="container">
		<div class="panel panel-info">
		<div class="panel-heading">
		    
			<h4><i class='glyphicon glyphicon-cog'></i> Etapa de Producción</h4>
		</div>
			<div class="panel-body">
				
				<form class="" role="form">
					
				    <div class="row content">
				    	
				    	<div class="col-sm-8" style="">
				    		<center><h4>Orden de Producción</h4></center>

				    		   <div class="input-group"> 
                                  <input id="buscar" type="text" class="form-control input-lg" name="buscar" placeholder="Digite o escanee la orden de Produccion">
                                  <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                               </div>
				    		
                           <div class="row">
							   <div class="col-sm-6">
							      <label for="op">Orden de Producción</label>
							      <input type="text" class="form-control input-lg " id="op" placeholder="Numero de Orden de Produccion" tabindex="1" readonly="">
                               </div>

                              	 <div class="col-sm-6">
							       <label for="Referencia">Referencia de Fabrica</label>
							       <input type="text" class="form-control input-lg" id="Referencia" placeholder="Referencia de Fabrica" tabindex="2" readonly="">
                                 </div>
                            </div>                        
                             <div class="row">
							   <div class="col-sm-12">
							      <label for="Descripción">Descripción Referencia</label>
							      <input type="text" class="form-control input-lg" id="Descripción" placeholder="Descripcion Referencia" tabindex="3" readonly="">
                               </div>
                            </div>
                             <div class="row">
							   <div class="col-sm-6">
							      <label for="Cantidad">Cantidad Programada</label>
							      <input type="text" class="form-control input-lg" id="Cantidad" placeholder="Cantidad Programada" tabindex="4" readonly="">
                               </div>
                               <div class="col-sm-6">
							      <label for="Cantidad">Estado de la Orden</label>
							      <input type="text" class="form-control input-lg" id="Estado_Orden" placeholder="Estado de La Orden" tabindex="5" readonly="">
                               </div>
                            </div>
                             <div class="row">
							   <div class="col-sm-6">
							      <label for="Cantidad">Fecha de Inicio</label>
							      <input type="datetime-local" class="form-control input-lg" id="Inicio" placeholder="Fecha de Inicio" tabindex="6" readonly="">
                               </div>
                               <div class="col-sm-6">
							      <label for="Cantidad">Fecha Cierre Programada</label>
							      <input type="datetime-local" class="form-control input-lg" id="Cierre" placeholder="Fecha de Cierre Programada" tabindex="7" readonly="">
                               </div>
                            </div><br>
                            <div class="row">
							   <div class="col-sm-12">
							   	<center><h4>Registro de Actividades</h4></center>
							      <div class="input-group"> 
                                    <input id="Documento" type="text" class="form-control input-lg" name="Documento" placeholder="Digite o escanee su Documento"  tabindex="8">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                  </div>
                               </div>
                            </div>
                            <div class="row">
							   <div class="col-sm-12">
							      <label for="Operario">Nombre del Operario</label>
							      <input type="text" class="form-control input-lg" id="Operario" placeholder="Nombre del Operario" tabindex="9" readonly="">
                               </div>
                            </div>
                            <div class="row">
							   <div class="col-sm-12">
							      <label for="Actividad">Actividad Desarrollada</label>
							      <input type="text" class="form-control input-lg" id="Actividad" placeholder="Actividad Desarrollada" tabindex="9" readonly="">
                               </div>
                            </div>
                            
                        </div>

					    <div class="col-sm-4" align="center">
								<img class="img-responsive" src="img/produccion.png">
                            <br>
                            <div class="row" align="center">
							   <div class="col-sm-12">
							   	  <h4>Control de tiempos</h4>
							   	  <br>
							      <label for="Inicio_actividad">Inicio de Actividad</label>
							      <input type="datetime-local" class="form-control input-lg" id="Inicio_actividad" placeholder="Inicio de Actividad" tabindex="9">
                                  <label for="Cierre_Actividad">Cierre de Actividad</label>
							      <input type="datetime-local" class="form-control input-lg" id="Cierre_actividad" placeholder="Cierre de Actividad" tabindex="9">
                               </div>
                            </div><br>

                            <div class="row" align="center">
							   <div class="col-sm-6">
							   	  <input type="button" class="btn btn-primary btn-lg btn-block" value="INICIAR" style="">
                               </div>
                               <div class="col-sm-6">
							   	  <input type="button" class="btn btn-primary btn-lg btn-block" value="TERMINAR" >
                               </div>
                            </div>
                            <br><br><br>


						</div>
 
                   </div>
			   </form>
		    </div>	
		
	     </div>
	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/facturas.js"></script>
  </body>
</html>