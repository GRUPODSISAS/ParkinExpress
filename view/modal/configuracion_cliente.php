	
	<script> 
function funcion(){ 
    if(document.editarUsuario.box.checked == true){ 
        document.editarUsuario.user_password_new.disabled = false; 
        document.editarUsuario.user_password_repeat.disabled = false; 
        document.getElementById('passcheck2').value = '1';

    } 
    else{ 
    	document.getElementById('passcheck2').value = '0';
    	document.editarUsuario.user_password_new.disabled = true; 
        document.editarUsuario.user_password_repeat.disabled = true; 
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
			<form class="form-horizontal" method="POST" id="editarUsuario"  name="editarUsuario">
			<div id="resultados_ajax"></div>
			<div class="form-group">
				<label for="Documento" class="col-sm-3 control-label">Identificacion</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control"  name="id" placeholder="Numero de Documento" readonly="readonly">
				</div>
			  </div>
			  <div class="form-group">
				<label for="firstname" class="col-sm-3 control-label">Nombres</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control"  name="Nombres" placeholder="Nombres">
				</div>
			  </div>
			  <div class="form-group">
				<label for="lastname" class="col-sm-3 control-label">Apellidos</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control"  name="Apellidos" placeholder="Apellidos">
				</div>
			  </div>
			 
			  <div class="form-group">
				<label for="user_email" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-8">
				  <input type="email" class="form-control"  name="Correo" placeholder="Correo electrónico">
				</div>
			  </div>

              <div class="form-group">
				
				<label for="" class="col-sm-3 control-label"></label>
				<label for="checkbox" class="col-sm-8">Cambiar Contraseña de Usuario? 
				<input type="checkbox" value="0" name="box" id="passcheck" onclick="funcion()"></label>
				<input type="hidden" value="0" name="check" id="passcheck2" />
				  
				
			  </div>
           
			  <div class="form-group">
				<label for="user_password_new" class="col-sm-3 control-label">Contraseña</label>
				<div class="col-sm-8">
				  <input type="password" class="form-control" id="user_password_new" name="pass" placeholder="Contraseña" pattern=".{6,}" title="Contraseña ( min . 6 caracteres)" required disabled="">
				</div>
			  </div>
			  <div class="form-group">
				<label for="user_password_repeat" class="col-sm-3 control-label">Repite contraseña</label>
				<div class="col-sm-8">
				  <input type="password" class="form-control" id="user_password_repeat" name="pass2" placeholder="Repite contraseña" pattern=".{6,}" required disabled="">
				</div>
			  </div>
			 

		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
			<button type="button" class="btn btn-primary" name="button" id="editarUsu">Guardar Datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
