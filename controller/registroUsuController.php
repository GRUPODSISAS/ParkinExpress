<?php

  $usu_id    = $_POST['Id'];
  $nombres   = $_POST['Nombres'];
  $apellidos = $_POST['Apellidos'];
  $correo    = $_POST['Email'];
  $pass1     = $_POST['password1'];
  $pass2     = $_POST['password2'];


  if(empty($usu_id) || empty($nombres) || empty($apellidos) || empty($correo) || empty($pass1) || empty($pass2) ) {

      echo 'Fallo_1';

  }else{

     if($pass1 == $pass2){

        if(filter_var($correo, FILTER_VALIDATE_EMAIL)) {

          require_once('../model/registroUsuario.php');

          $usuario = new registroUsuario();

          $usuario -> registrarUsuario($usu_id, $nombres, $apellidos, $correo, $pass1);
          

        }else{
          echo 'Fallo_4';
        }


      }else{
        echo 'Fallo_2';
      }

  }


?>
