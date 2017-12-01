	
<div class="modal fade" id="reservas" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-calendar'>
			</i> Reservar cupo de Estacionamiento</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="add_vehiculo" name="add_vehiculo">
			  
			  <div class="form-group">
				<label for="Numero de cupo" class="col-sm-3 control-label">Numero de cupo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="cupo" name="cupo" readonly="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="categoria" class="col-sm-3 control-label">Vehiculo a Parquear</label>
				<div class="col-sm-8">
				 <select class="form-control" id="categoria" name="categoria" required>
					<option value="">-- Seleccione su vehiculo --</option>
				</select>
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
				<label for="Numero de cupo" class="col-sm-3 control-label">Fecha de Ingreso</label>
				<div class="col-sm-8">
				 <input type="date" class="form-control" id="fecha_ingreso" value="<?php echo date("Y-m-d");?>">
				</div>
			  </div>

			  <div class="form-group">
				<label for="hora_ingreso" class="col-sm-3 control-label">Hora de Ingreso</label>
				<div class="col-sm-8">
				  <input type="time" class="form-control" id="hora_ingreso" value="" step="1">
				</div>
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
	
	
	