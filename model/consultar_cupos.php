<?php require_once("conexion.php"); 

class consultarcupo {
function consultarcupos()
{ 
  session_start();
  $val_retorno = null;
  $mysqli = getConnexion();
  $iden   = $_SESSION['idCliente']; 
  $nombre = $_SESSION['Nombres'];  
  $apelli = $_SESSION['Apellidos'];
  $correo = $_SESSION['Correo_Electronico'];
  $estado = $_SESSION['idEstado_Cliente'];
	

$sql ='select COUNT(*) cuposAutos FROM cupo_estacionamiento Where idtipo_Estacionamiento = 1 and idEstado_cupo= 2';

$sql2 ='select COUNT(*) cuposMotos FROM cupo_estacionamiento Where idtipo_Estacionamiento = 2 and idEstado_cupo= 2';

$sql3 = 'select Descripcion_Estado_Cliente descripcion FROM estado_cliente where idEstado_Cliente = "'.$estado.'"';

$row = $mysqli->query($sql);
$row2 = $mysqli->query($sql2);
$row3 = $mysqli->query($sql3);

 if ($row->num_rows > 0)
     {

 	 $cupo_auto= $row->fetch_array(MYSQLI_ASSOC); 
   
   if ($row2->num_rows > 0)
     {
       $cupo_moto= $row2->fetch_array(MYSQLI_ASSOC); 
     }

   if ($row3->num_rows > 0)
     {
       $estado_des= $row3->fetch_array(MYSQLI_ASSOC); 
     }


	/*$val_retorno = $cupo_auto['cupos'];

	echo $val_retorno;*/

	 $val_retorno = array(
          'cuposAutos' =>  $cupo_auto['cuposAutos'],
          'cuposMotos' =>  $cupo_moto['cuposMotos'],
          'iden'       =>  $iden,
          'nombre'     =>  $nombre,
          'apellidos'  =>  $apelli,
          'correo'     =>  $correo,
          'estado' =>  $estado_des['descripcion']      

          );

          echo json_encode($val_retorno, JSON_FORCE_OBJECT);    

        }else {
        	$val_retorno = array('error' => 'Fallo_1'); 
        echo json_encode($val_retorno, JSON_FORCE_OBJECT);
        }

    }

   } 
?>