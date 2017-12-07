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



    }// fin registrar usuario


    function editarUsuario($usu_id, $nombres, $apellidos, $correo)
    {
      $mysqli = getConnexion();
      $usu_id = $mysqli->real_escape_string($usu_id);
      $nombres = $mysqli->real_escape_string($nombres);
      $apellidos = $mysqli->real_escape_string($apellidos);
      $correo = $mysqli->real_escape_string($correo);
      
      $query = "update cliente 
                SET Nombres= '".$nombres."', Apellidos= '".$apellidos."', Correo_Electronico= '".$correo."'
                WHERE idCliente ='".$usu_id."'";

      if ($mysqli->query($query) === TRUE){
            session_start();
            $_SESSION['Nombres']   = $nombres;
            $_SESSION['Apellidos'] = $apellidos;
            $_SESSION['Correo_Electronico']   = $correo;
            echo 'correcto_1';
          }else {
           echo 'Fallo_5';
          }
    }//fin funcion editarUsuario

    function editarUsuarioPass($usu_id, $nombres, $apellidos, $correo, $pass1){
      $mysqli = getConnexion();
      $usu_id = $mysqli->real_escape_string($usu_id);
      $nombres = $mysqli->real_escape_string($nombres);
      $apellidos = $mysqli->real_escape_string($apellidos);
      $correo = $mysqli->real_escape_string($correo);
      $pass = $mysqli->real_escape_string($pass1);
      
       $query = "update cliente 
                SET Nombres= '".$nombres."', Apellidos= '".$apellidos."', Correo_Electronico= '".$correo."', Password= md5('".$pass."')
                WHERE idCliente ='".$usu_id."'";

      if ($mysqli->query($query) === TRUE){
            session_start();
            $_SESSION['Nombres']   = $nombres;
            $_SESSION['Apellidos'] = $apellidos;
            $_SESSION['Correo_Electronico']   = $correo;
            echo 'correcto_1';
          }else {
           echo 'Fallo_5';
          }

    }//fin funcion editarUsuario password


}
?>
