<?php

require_once("conexion.php");
session_start();

class consultarVehiculosCliente {

    function consultarVehiculos() {
        
        $tabla = "";
        $val_retorno = null;
        $mysqli = getConnexion();
        $iden = $_SESSION['idCliente'];


        $query = 'select v.Placa_Vehiculo placa, v.Descripcion_Vehiculo descveh, cv.Descripcion_Categoria descateg
            from vehiculo v, categoria_vehiculo cv
            where v.idCategoria_vehiculo = cv.idCategoria_vehiculo
            and v.idCliente = "' . $iden . '"';

        $res = $mysqli->query($query);

        if ($res->num_rows > 0) {
            $tabla.=
                    ' <table class="table table-bordered table-striped">
       <thead style="background-color: #2980b9; color: white;">
        <tr>
        <th>Placa</th>
        <th>Descripción</th>
        <th>Categoria</th>
        <th>Opciones</th>
        </tr>
        </thead>';

            while ($resCol = $res->fetch_array(MYSQLI_ASSOC)) {
                $tabla.=
                        '<tbody>
      <tr>
      <td>' . $resCol['placa'] . '</td>
      <td>' . $resCol['descveh'] . '</td>
      <td>' . $resCol['descateg'] . '</td>
      <td><span class="pull-right">
         <button type="button" name="button" id="editVehiculo" value="' . $resCol['placa'] . '" class="btn btn-default editVehiculo" title="Editar Vehiculo" data-toggle="modal" data-target="#edit_vehiculo""><i class="glyphicon glyphicon-pencil"></i></button>
         <button type="button" name="button" id="eliminarVehiculo" value="' . $resCol['placa'] . '" class="btn btn-default eliminarVehiculo" title="Borrar Vehiculo"><i class="glyphicon glyphicon-trash"></i></button>
          </span>
      </td>
      </tr>
     </tbody>
    ';
            }

            $tabla.='</table>';
        } else {
            $tabla = "No se encontraron coincidencias con sus criterios de búsqueda.";
        }

        echo $tabla;
    }


    function editarVehiConsCli($placa){
      $datos=null;
      $mysqli = getConnexion();
      $iden = $_SESSION['idCliente'];
      $placa = $mysqli->real_escape_string($placa);
      

      $reqId = 'select v.Placa_Vehiculo placa, v.Descripcion_Vehiculo descveh, cv.Descripcion_Categoria descateg
            from vehiculo v, categoria_vehiculo cv
            where v.idCategoria_vehiculo = cv.idCategoria_vehiculo
            and v.Placa_Vehiculo = "' . $placa . '"
            and v.idCliente = "' . $iden . '"';

      

      $res = $mysqli->query($reqId);

      if ($res->num_rows > 0){

        $resCol2= $res->fetch_array(MYSQLI_ASSOC); 

        $datos = array(
        'placa' => $resCol2['placa'],
        'descveh' => $resCol2['descveh'],
        'descateg' => $resCol2['descateg']
        );

        echo json_encode($datos, JSON_FORCE_OBJECT);
      
      }else {
        $datos = array('error' => 'Fallo_1'); 
        echo json_encode($datos, JSON_FORCE_OBJECT);
      }


    }// fin funcion editarVehiConsCli

    function editarVehiculosCli($placa, $descr, $categ){
      $mysqli = getConnexion();
      $iden = $_SESSION['idCliente'];
      $placa = $mysqli->real_escape_string($placa);
      $descr = $mysqli->real_escape_string($descr);
      $categ = $mysqli->real_escape_string($categ);
      

      $query ="update vehiculo 
              set Placa_Vehiculo = upper('".$placa."'), Descripcion_Vehiculo = '".$descr."', 
              idCategoria_vehiculo = ".$categ."
              where Placa_Vehiculo = '" .$placa."'
              and idCliente = ".$iden."";
     
      if ($mysqli->query($query) === TRUE){
            echo 'correcto_1';
          }else {
           echo 'Fallo_2';
          }

    }// fin funcion editarVehiculosCli


    function regisVehiculo($placa, $descr, $categ){
      
      $mysqli = getConnexion();
      $iden = $_SESSION['idCliente'];
      $placa = $mysqli->real_escape_string($placa);
      $descr = $mysqli->real_escape_string($descr);
      $categ = $mysqli->real_escape_string($categ);
      

      $insert = ('insert into vehiculo(placa_vehiculo, descripcion_vehiculo, idcliente, idcategoria_vehiculo) values ( upper("'.$placa.'"),"'.$descr.'", "'.$iden.'", "'.$categ.'")');

       if ($mysqli->query($insert) === TRUE){
        
         echo 'correcto_1';
                
      }else {
         echo 'Fallo_2';
      }
    }// fin funcion regisVehiculo

    function eliminarVehiculo($placa){
      
      $mysqli = getConnexion();
      $iden = $_SESSION['idCliente'];
      $placa = $mysqli->real_escape_string($placa);
      
      $insert = "delete from vehiculo  where Placa_Vehiculo = '" .$placa."'
              and idCliente = ".$iden."";

       if ($mysqli->query($insert) === TRUE){
        
         echo 'correcto_1';
                
      }else {
         echo 'Fallo_2';
      }
    }// fin funcion regisVehiculo

}
?>