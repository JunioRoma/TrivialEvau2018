<?php

session_start();

//inicia la sesion del navegador en php o la continua
include ('misFunciones.php');

function limpiaPalabra($palabra){
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
 
 $resultadoQuery = $mysqli -> query("SELECT * FROM usuarios 
                                WHERE nombreUsuario='$cajaNombre' AND userPass='$cajaPassword' ");
 
 $numUsuarios = $resultadoQuery -> num_rows;
 
if ( $numUsuarios > 0){
    $r = $resultadoQuery -> fetch_array();
    //En la variable de sesion "nombreUsuario" guardo el nombre de usuario
    $_SESSION['nombreUsuario'] = $cajaNombre;
    //En la variable de seson idUsuario guardo el id de usuario leido de la bbdd 
    $_SESSION['idUsuario'] = $r['idUsuario'];
    
}

 if ($numUsuarios > 0){
     $_SESSION['nombreUsuario'] = $cajaNombre;
     
     //muestro la pantalla de la aplicación
     require 'app.php';
 }
 else {
     //muestro una pantalla de error
     require 'error.php';
 }
 
 
