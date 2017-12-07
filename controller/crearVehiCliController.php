<?php

  $placa   = $_POST['addPlaca'];
  $descr   = $_POST['addDescripción'];
  $categ  = $_POST['addCateg'];



  if(empty($placa) || empty($descr) || empty($categ) || $categ == 0)
  {

    echo 'Fallo_1'; // Un campo esta vacio y es obligatorio

  }else{

        # Incluimos la clase de vehiculos
        require_once('../model/consultarVehiculosCliente.php');

        # Creamos un objeto de la clase de vehiculos
        $usuario = new consultarVehiculosCliente();


        $usuario -> regisVehiculo($placa, $descr, $categ);

  }




?>
