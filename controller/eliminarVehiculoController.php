<?php

          $placa = $_POST['placa'];


          require_once('../model/consultarVehiculosCliente.php');

          $vehiculos = new consultarVehiculosCliente();

          $vehiculos -> eliminarVehiculo($placa);

?>
