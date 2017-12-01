// Registro de usuarios
$('#regisCuenta').click(function(){

  var form = $('#register-form').serialize();   
  console.log("Formulario = "+ form);
  
  $.ajax({
    method: 'POST',
    url: 'http://localhost/parking/controller/registroUsuController.php',
    data: form,
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      console.log(res);

      if(res == 'Fallo_1'){
        swal('Error', 'Campos obligatorios, por favor llene todos los campos', 'warning');
      }else if(res == 'Fallo_2'){
        swal('Error', 'Las contraseñas deben ser iguales, por favor intentelo de nuevo', 'error');
      }else if(res == 'Fallo_3'){
        swal('Error', 'El numero de cedula ya se encuentra registrado', 'error');
      }else if(res == 'Fallo_4'){
        swal('Error', 'Por favor ingresa un correo valido', 'warning');
      }else if(res == 'correcto_1'){
        $("input").val("");
        swal('Correcto', 'El usuario ha sido creado correctamente', 'success');
      }
    }
  });
});


//Login
$('#loginUsu').click(function(){

  var form = $('#login-form').serialize();  
  //console.log("form login = "+ form);

 $.ajax({
    method: 'POST',
    url: 'http://localhost/parking/controller/loginController.php',
    data: form,
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      if(res == 'Fallo_1'){
        swal('Faltan campos por diligenciar', 'Todos los campos son obligatorios', 'error');
      }else if(res == 'Fallo_2'){
        swal('Campo Correo electronico', 'Por favor ingrese un correo valido', 'warning');
      }else if(res == 'Fallo_3'){
        swal('Error', 'El usuario y/o contraseña ingresados son incorrectos', 'error');
      }else {
         window.location.href= res
      }

    }
  });

});


//carga el numero relacionado a los cupos disponibles 
$(document).ready(function(){
//console.log("Pruebas num servicio");
  $.ajax({
    type: 'GET',
    url: 'http://localhost/Parking/controller/consultarCuposController.php',
    dataType:"json"    
  })
  .done(function(res){
     //console.log(res);
    if(res.error == 'Fallo_1'){
          swal('Error', 'Se ha presentado un error a la hora de consultar el numero del servio para el area asociada', 'warning');
        }else{
      //console.log(res);
      llenaCupos(res);
      }
  })
  .fail(function(res){
    console.log(res);
    console.log('Hubo un errror al intentar cargar el numero dde cupos disponibles');
  })

});


//Funcion que llenara el label o el span con el valor retornado
function llenaCupos(json){
  
$("label[name='cuposAutos']").text(json.cuposAutos);
$("label[name='cuposMotos']").text(json.cuposMotos);
$("[name=Nombres]").val(json.nombre);
$("[name=id]").val(json.iden);
$("[name=Apellidos]").val(json.apellidos);
$("[name=Correo]").val(json.correo);
$("[name=Estado]").val(json.estado);



};



// Realiza la busqueda de los vehiculos relacionados a un cliente
$(document).ready(function(){
 
    $.ajax({
      type: 'POST',
      url: 'http://localhost/Parking/controller/consultarVehiculosCliController.php',
      beforeSend: function(){
        $('#load').show()
      }
    })
    .done(function(resultado){
      $('#result').html(resultado)
    })
    .fail(function(){
      alert('Hubo un error :(')
    })

});