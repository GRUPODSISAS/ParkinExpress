<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');

class registroUsuario {
    function registrarUsuario($usu_id, $nombres, $apellidos, $correo, $pass1)
    {
      $mysqli = getConnexion();
      $usu_id = $mysqli->real_escape_string($usu_id);
      $nombres = $mysqli->real_escape_string($nombres);
      $apellidos = $mysqli->real_escape_string($apellidos);
      $correo = $mysqli->real_escape_string($correo);
      $pass1 = $mysqli->real_escape_string($pass1);
      

      $verificaCliente = ('select idCliente from cliente where idCliente = "'.$usu_id.'"');

      $res = $mysqli->query($verificaCliente);

      if ($res->num_rows > 0){
        echo 'Fallo_3';
      }else{

      $insert = ('insert into cliente(idCliente, Nombres, Apellidos, Correo_Electronico, Password, idEstado_Cliente) 
                  values("'.$usu_id.'", "'.$nombres.'", "'.$apellidos.'", "'.$correo.'", md5("'.$pass1.'"), 1 )');

      //md5("'.$clave.'")
        $mysqli->query($insert);

        echo 'correcto_1';
      }



    }



}
?>
