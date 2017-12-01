	
	<script> 
function funcion(){ 
    if(document.config_usuario.box.checked == true){ 
        document.config_usuario.user_password_new.disabled = false; 
        document.config_usuario.user_password_repeat.disabled = false; 
    } 
    else{ 
        document.config_usuario.user_password_new.disabled = true; 
        document.config_usuario.user_password_repeat.disabled = true; 
    } 
} 
</script> 



	<div class="modal fade" id="config" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-user' ></i> Editar Datos de Usuario</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="config_usuario" name="config_usuario">
			<div id="resultados_ajax"></div>
			<div class="form-group">
				<label for="Documento" class="col-sm-3 control-label">Identificacion</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="id" name="id" placeholder="Numero de Documento" >
				</div>
			  </div>
			  <div class="form-group">
				<label for="firstname" class="col-sm-3 control-label">Nombres</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="Nombres" name="Nombres" placeholder="Nombres">
				</div>
			  </div>
			  <div class="form-group">
				<label for="lastname" class="col-sm-3 control-label">Apellidos</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="Apellidos" name="Apellidos" placeholder="Apellidos">
				</div>
			  </div>
			 
			  <div class="form-group">
				<label for="user_email" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
				  <input type="email" class="form-control" id="Correo" name="Correo" placeholder="Correo electrónico">
				</div>
			  </div>

              <div class="form-group">
				
				<label for="" class="col-sm-3 control-label"></label>
				<label for="checkbox" class="col-sm-8">Cambiar Contraseña de Usuario? 
				<input type="checkbox" value="" name="box" onclick="funcion()"></label>
				  
				
			  </div>
           
			  <div class="form-group">
				<label for="user_password_new" class="col-sm-3 control-label">Contraseña</label>
				<div class="col-sm-8">
				  <input type="password" class="form-control" id="user_password_new" name="user_password_new" placeholder="Contraseña" pattern=".{6,}" title="Contraseña ( min . 6 caracteres)" required disabled="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="user_password_repeat" class="col-sm-3 control-label">Repite contraseña</label>
				<div class="col-sm-8">
				  <input type="password" class="form-control" id="user_password_repeat" name="user_password_repeat" placeholder="Repite contraseña" pattern=".{6,}" required disabled="">
				</div>
			  </div>
			 

		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
