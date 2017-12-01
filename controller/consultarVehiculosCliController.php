<?php

          require_once('../model/consultarVehiculosCliente.php');

          $cupos = new consultarVehiculosCliente();

          $cupos -> consultarVehiculos();


?>
