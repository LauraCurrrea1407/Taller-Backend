<?php

    $host = 'localhost';
    $usuario = 'root';
    $contraseña = 'root';
    $basedatos = 'mi_proyecto';

    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);

    if ($conexion->connect_errno) {
        echo "Error al conectarse.";
        exit();
    } 

?>