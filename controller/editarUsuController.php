<?php

$usu_id = $_POST['id'];
$nombres = $_POST['Nombres'];
$apellidos = $_POST['Apellidos'];
$correo = $_POST['Correo'];
$check = $_POST['check'];


    if (empty($usu_id) || empty($nombres) || empty($apellidos) || empty($correo)) {

        echo 'Fallo_1';

    } else if ($check == 0 ) {

        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {

            require_once('../model/registroUsuario.php');

            $usuario = new registroUsuario();

            $usuario->editarUsuario($usu_id, $nombres, $apellidos, $correo );
        } else {
            echo 'Fallo_4';
        }
    } else if ($check == 1) {

        $pass1 = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        
        if ( empty($pass1) || empty($pass2)){    
        
        echo 'Fallo_2';
        
        } else if ( $pass1 == $pass2) {

        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {

            require_once('../model/registroUsuario.php');

            $usuario = new registroUsuario();

            $usuario->editarUsuarioPass($usu_id, $nombres, $apellidos, $correo, $pass1);
        } else {

            echo 'Fallo_4';
        
        }
    } else {

        echo 'Fallo_3';

    }
        
    }  
    
?>