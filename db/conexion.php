<?php

    $host = 'localhost';
    $usuario = 'root';
    $contraseña = ''; #Se elimina contraseña
    $basededatos = 'mi_proyecto';

    $conexion = new mysqli($host,$usuario,$contraseña,$basededatos);

    if ($conexion->connect_errno) {
        echo "fallos en conexión";
        exit();
    }

?>