<?php
function conexion(){
    $servidor="localhost";
    $usuario="root";
    $clave="";

    $baseDatos="proyectos";

    //conectar con el servidor

    $conectar= mysqli_connect ($servidor, $usuario, $clave);

    //seleccionar la Base de Datos

    mysqli_select_db($conectar, $baseDatos);

    // echo "<pre>";
    // print_r($conectar);
    // echo "</pre>";

    return $conectar;

}