// Registro de usuarios
$('#regisCuenta').click(function(){

  var form = $('#register-form').serialize();   
  //console.log("Formulario = "+ form);
  
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

//editar vehiculo
$(document).on("click",'.editVehiculo',function(){

  var placa = null;

  placa = $(this).attr("value");

 $.ajax({
   type: 'POST',
    url: 'http://localhost/Parking/controller/editarVehiculoController.php',
    data: {'placa': placa},
    dataType:"json"    
  })
  .done(function(res){
     //console.log(res);
    if(res.error == 'Fallo_1'){
          swal('Error', 'Se ha presentado un error a la hora de consultar el vehiculo', 'warning');
        }else{
      //console.log(res);
      editarVehCon(res);
      }
  })
  .fail(function(res){
    //console.log(res);
    console.log('Se ha presentado un error a la hora de consultar el vehiculo');
  });
});


//Funcion que llenara el label o el span con el valor retornado
function editarVehCon(json){

$("[name=placa]").val(json.placa);
$("[name=Descripción]").val(json.descveh);
$("[value=categoria]").val(json.descateg);

};

// Editar informacion de vehiculo
$(document).on("click",'#editInfoVehic',function(){//esta ejecuta la acción? si 

  var form = $('#editarVehiculoCli').serialize();   
  //console.log(form);

  $.ajax({
    method: 'POST',
    url: 'http://localhost/Parking/controller/editarVehiCliController.php',
    data: form,
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      //console.log(res);

      if(res == 'Fallo_1'){
        swal('Error', 'Campos obligatorios, por favor llene todos los campos', 'warning');
      }else if(res == 'Fallo_2'){
        swal('Error', 'El numero de la placa ya se encuentra registrado o se ha presentado un error en la BD', 'error');
      }else if(res == 'correcto_1'){
        swal('Correcto', 'La información del vehiculo se ha actualizado correctamente', 'success');
        setTimeout(function(){
        location.reload();  
      },4000);
        
      }
    }
  });
});


// Crear vehiculo
$('#crearVehiculo').click(function(){

  var form = $('#crearVehiculoCli').serialize();   
  //console.log(form);

  $.ajax({
    method: 'POST',
    url: 'http://localhost/Parking/controller/crearVehiCliController.php',
    data: form,
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      //console.log(res);

      if(res == 'Fallo_1'){
        swal('Error', 'Campos obligatorios, por favor llene todos los campos', 'warning');
      }else if(res == 'Fallo_2'){
        swal('Error', 'El numero de la placa ya se encuentra registrado o se ha presentado un error en la BD', 'error');
      }else if(res == 'correcto_1'){
        swal('Correcto', 'El vehiculo se ha registrado correctamente', 'success');
        setTimeout(function(){
        location.reload();  
      },4000);
      }
    }
  });
});


// editar usuario 
$('#editarUsu').click(function(){

  var form = $('#editarUsuario').serialize();  
  
  //console.log(form);


  $.ajax({
    method: 'POST',
    url: 'http://localhost/Parking/controller/editarUsuController.php',
    data: form,
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      //console.log(res);

      if(res == 'Fallo_1'){
        swal('Error', 'Campos obligatorios, por favor llene todos los campos', 'warning');
      }else if(res == 'Fallo_2'){
        swal('Error', 'Por favor diligencie las contraseñas y estas deben ser iguales', 'error');
      }else if(res == 'Fallo_3'){
        swal('Error', 'Las contraseñas deben ser iguales', 'error');
      }else if(res == 'Fallo_4'){
        swal('Error', 'Por favor ingrese un correo valido', 'error');
      }else if(res == 'Fallo_5'){
        swal('Error', 'No se ha podido realizar la instalacion por un error en BD.', 'error');
      }else if(res == 'correcto_1'){
        swal('Correcto', 'La información del usuario ha sido actualizada correctamente', 'success');
        setTimeout(function(){
        location.reload();  
      },4000);
      }
    }
  });
});


//editar vehiculo
$(document).on("click",'.eliminarVehiculo',function(){

  var placa = null;
  placa = $(this).attr("value");

  //console.log("placa a eliminar  "+ placa);

  $.ajax({
    method: 'POST',
    url: 'http://localhost/Parking/controller/eliminarVehiculoController.php',
    data: {'placa': placa},
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      //console.log(res);

      if(res == 'Fallo_2'){
        swal('Error', 'No se ha podido eliminar el vehiculo de la base de datos', 'warning');
      }else if(res == 'correcto_1'){
        swal('Correcto', 'El vehiculo ha sido eliminado correctamente de la base de datos', 'success');
        setTimeout(function(){
        location.reload();  
      },4000);
      }
    }
  });
});