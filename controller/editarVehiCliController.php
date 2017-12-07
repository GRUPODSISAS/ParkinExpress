<?php

  $placa   = $_POST['placa'];
  $descr   = $_POST['Descripción'];
  $categ  = $_POST['categoria'];



  if(empty($placa) || empty($descr) || empty($categ) || $categ == 0)
  {

    echo 'Fallo_1'; // Un campo esta vacio y es obligatorio

  }else{




        # Incluimos la clase usuario
        require_once('../model/consultarVehiculosCliente.php');

        # Creamos un objeto de la clase usuario
        $usuario = new consultarVehiculosCliente();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario -> editarVehiculosCli($placa, $descr, $categ);

  }




?>
