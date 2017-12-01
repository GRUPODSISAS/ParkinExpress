<?php require_once("conexion.php"); 
     

class consultarVehiculosCliente{
function consultarVehiculos()
{ 
  session_start();
  $tabla="";
  $val_retorno = null;
  $mysqli = getConnexion();
  $iden   = $_SESSION['idCliente']; 
 
	
  $query = 'select v.Placa_Vehiculo placa, v.Descripcion_Vehiculo descveh, cv.Descripcion_Categoria descateg
            from vehiculo v, categoria_vehiculo cv
            where v.idCategoria_vehiculo = cv.idCategoria_vehiculo
            and v.idCliente = "'.$iden.'"';
  
  $res = $mysqli->query($query);

  if ($res->num_rows > 0){
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

  while($resCol= $res->fetch_array(MYSQLI_ASSOC))
  {
    $tabla.=
    '<tbody>
     <tr>
      <td>'.$resCol['placa'].'</td>
      <td>'.$resCol['descveh'].'</td>
      <td>'.$resCol['descateg'].'</td>
      <td><span class="pull-right">
          <a href="#" class="btn btn-default" title="Editar Vehiculo" onclick="" data-toggle="modal" data-target="#edit_vehiculo""><i class="glyphicon glyphicon-pencil"></i></a> 
          <a href="#" class="btn btn-default" title="Borrar uVehiculo" onclick="" ><i class="glyphicon glyphicon-trash"></i> </a></span></td>
      </tr>
     </tbody>
    ';
  }

  $tabla.='</table>';
} else
  {
    $tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
  }

echo $tabla;



    }

   } 
?>