	
<div class="modal fade" id="estacionamiento" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-hourglass'>
			</i> Control de Estacionamiento</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="control" name="control">
			  
			  <div class="form-group">
				<label for="Numero de cupo" class="col-sm-3 control-label">Numero de cupo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="cupo" name="cupo" readonly="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="Vehiculo" class="col-sm-3 control-label">Vehiculo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="Vehiculo" name="Vehiculo" readonly="">
				</div>
			  </div>
			   <div class="form-group">
				<label for="Descripción" class="col-sm-3 control-label">Descripción</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="Descripción" name="Descripción" readonly="">
				</div>
			  </div>
			  		  
			  <div class="form-group">
				<label for="categoria" class="col-sm-3 control-label">Categoria</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="categoria" name="categoria" readonly="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="Fecha de Ingreso" class="col-sm-3 control-label">Fecha de Ingreso</label>
				<div class="col-sm-8">
				 <input type="date" class="form-control" id="fecha_ingreso" value="" readonly="">
				</div>
			  </div>

			  <div class="form-group">
				<label for="hora_ingreso" class="col-sm-3 control-label">Hora de Ingreso</label>
				<div class="col-sm-8">
				  <input type="time" class="form-control" id="hora_ingreso" value="" step="1" readonly="">
				</div>
			  </div>

                       <div class="alert alert-info">
                       	  <center>
                          <h4><i class='glyphicon glyphicon-time'></i>
                          Tiempo Total de Estacionamiento:<strong>60 minutos</strong>
                          </h4>	
                          </center>
                       </div>
	
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="Agregar_vehiculo	">Agregar</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	
	
	