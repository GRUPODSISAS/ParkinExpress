<?php

   require_once('conexion.php');


class login {
    public function ingresar($user, $pass)
    {
      
      $mysqli = getConnexion();
      $user  = $mysqli->real_escape_string($user);
      $pass = $mysqli->real_escape_string($pass);
      
      $pass = md5($pass);

      $consulta = 'select  idCliente, Nombres, Apellidos, Correo_Electronico, Password , idEstado_Cliente
                    from cliente 
                    where  Correo_Electronico = "'.$user.'" and Password = "'.$pass.'"';
                    
      $res = $mysqli->query($consulta);

      if ($res->num_rows > 0){

        $resCol= $res->fetch_array(MYSQLI_ASSOC); 
        session_start();

        $_SESSION['idCliente'] = $resCol['idCliente'];
        $_SESSION['Nombres']   = $resCol['Nombres'];
        $_SESSION['Apellidos'] = $resCol['Apellidos'];
        $_SESSION['Correo_Electronico']   = $resCol['Correo_Electronico'];
        $_SESSION['Password']   = $resCol['Password'];
        $_SESSION['idEstado_Cliente']   = $resCol['idEstado_Cliente'];
        
        
       echo 'view/inicio_clientes.php';
      }else{

        echo 'Fallo_3';
      
      }

       

    }
}



?>
