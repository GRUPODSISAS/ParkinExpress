<?php

  $user = $_POST['usuario'];
  $pass = $_POST['password'];

  if(empty($user) || empty($pass)){

    echo 'Fallo_1';

  }else{


    if(filter_var($user, FILTER_VALIDATE_EMAIL)){

    require_once('../model/login.php');

    $usuario = new login();

    $usuario -> ingresar($user, $pass);

    }else{
      echo 'Fallo_2';
    }

  }


?>
