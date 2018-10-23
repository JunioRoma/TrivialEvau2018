<?php

session_start();

//inicia la sesion del navegador en php o la continua
include ('misFunciones.php');

function limpiaPalabra($palabra) {
    //filtro muy básico para evitar la inyeccion SQL
    $palabra = trim($palabra, "'");
    $palabra = trim($palabra, " ");
    $palabra = trim($palabra, "-");
    $palabra = trim($palabra, "`");
    $palabra = trim($palabra, '"');
    return $palabra;
}

$mysqli = conectaBBDD();

$cajaNombre = limpiaPalabra($_POST['cajaNombre']);

$cajaPassword = limpiaPalabra($_POST['cajaPassword']);



//echo 'Has escrito el usuario: '.$cajaNombre.' y la contraseña: '.$cajaPassword; 

//
$elHash = '$2y$10$upQdsCXEF/NT7FujdzJtK.WHt3RxEh7V5op.AGM.h6/';
//$passEncriptada =  password_hash($cajaPassword, PASSWORD_BCRYPT);
//
//    if (password_verify($cajaPassword, $elHash)) {
//        echo "Contraseña Correcta";
//    } else {
//        echo "Contraseña Incorrecta";
//    }


$resultadoQuery = $mysqli->query("SELECT * FROM usuarios 
                                WHERE nombreUsuario='$cajaNombre' ");

$numUsuarios = $resultadoQuery->num_rows;

if ($numUsuarios > 0) {
    $r = $resultadoQuery->fetch_array();
    //En la variable de sesion "nombreUsuario" guardo el nombre de usuario
    $_SESSION['nombreUsuario'] = $cajaNombre;
    //En la variable de seson idUsuario guardo el id de usuario leido de la bbdd 
    $_SESSION['idUsuario'] = $r['idUsuario'];


    if ($numUsuarios > 0) {
        $_SESSION['nombreUsuario'] = $cajaNombre;
        
        if (password_verify($cajaPassword, $r['userPass'])) {
            require 'app.php';
        }else{
             require 'error.php';
        }
    }

    //muestro la pantalla de la aplicación
} else {
    //muestro una pantalla de error
    require 'error.php';
}
 
 
