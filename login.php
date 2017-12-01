<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parking Express</title>


  <link rel="icon" type="image/png" href="/imagenes/Parking.png" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="view/css/sweetalert.css">
  <link rel="stylesheet" href="view/css/login.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="view/js/login.js"></script>
  <script type="text/javascript" src="view/js/sweetalert.min.js"></script>
   
  


</head>
<body>
  <div class="container">
    <div class="card card-container">
      <div class="row">
        <div class="login-form">
          <center><h2 style="color:#092834">Parking Express</h2>
		        <h4 style="color:#1A3E4C">inicio de sesión</h4>
		        <img class="responsive" src="view/imagenes/logo.png">
		      </center> 

          <!--Comienza el login -->
          <form id="login-form" style="display: block;" >
            <fieldset>
            <div class="form-group">
              <input type="text" class="form-control input-lg" name="usuario" placeholder="Usuario" required>   
              <input type="password" class="form-control input-lg" name="password" placeholder="Password" required>
            </div>
			        
            <center>
              <button class="btn btn-lg btn-primary btn-block" type="button" name="button" id="loginUsu" >Ingresar</button></center>
            </center>
            </fieldset>
          </form>
          <!--Termina el login -->

          
          <!--Comienza formulario de registro -->
          <form id="register-form" style="display: none;">
                <center><h4 style="color: #1A3E4C">Registrar Nueva Cuenta</h4></center>
                              
              <div class="form-group">
                <input type="text" class="form-control" name="Id" placeholder="Documento de Identificación" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="Nombres" placeholder="Nombres" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="Apellidos" placeholder="Apellidos" required>
              </div>
              <div class="form-group">
                <input type="Email" class="form-control" name="Email" placeholder="Correo Electronico" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password1" placeholder="contraseña" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password2" placeholder="Confirmar contraseña" required>
              </div>

               <div class="alert alert-danger alert-dismissable fade in" id="alert" style="display:none;">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Error!</strong> Las Contraseñas no coinciden, por favor verifique.
               </div>

              <div class="form-group">
                <p>Recibir informacion acerca de productos para su Vehiculo:</p>
                <center>
                <label class="checkbox-inline">
                   <input type="checkbox" value="">Lavado
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" value="">Repuestos
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" value="">Accesorios
                </label>
              </center>
              </div>
                 <br>
              <center>
                <button class="btn btn-lg btn-primary btn-block" type="button" name="button" id="regisCuenta" >Guardar</button></center>
          
          </form>

          <!--Termina formulario de registro -->

           <form id="recupera-form" action="#" method="post" role="form" style="display: none;">
                <div class="clearfix">
                  <center><h4 style="color:#1A3E4C"><span class="glyphicon glyphicon-envelope"></span> Recuperar Cuenta</h4></center>
                </div>
                <fieldset>
              <div class="clearfix">
               <br>
                <div class="alert alert-info">
                  <strong>Informacíon!</strong> Ingrese el correo Electronico Registrado Para recuperar su Cuenta.
                </div>
              </div>
              <div class="clearfix">
                <input type="Email" class="form-control " id="Email_recuperacion" placeholder="Correo Electronico" required>
              </div>
                 <br>
              <center><button class="btn btn-lg btn-primary btn-block" style"color:#092834" type="submit">Enviar</button></center>
            </fieldset>
          </form>
        </div>
      </div>
      <br>
     <div class="row">
          <div class="col-sm-4" style="text-align: center"> <a href="#" class="link2" id="login-form-link"><span class="glyphicon glyphicon-home"></span> Login</div>
          <div class="col-sm-4" style="text-align: center"> <a href="#" class="link" id="register-form-link"><span class="glyphicon glyphicon-pencil"></span> Registrese</div>
          <div class="col-sm-4" style="text-align: center;"> <a href="#" class="link" id="recupera-form-link"><span class="glyphicon glyphicon-envelope"></span> Olvidaste tu contraseña?</div>

      </div>
    </div> 
    

  </div><!-- /container -->

  <script src="http://localhost/parking/view/js/sweetalert.min.js"></script>
  <script src="http://localhost/parking/view/js/Ajax.js"></script>
</body>
</html>