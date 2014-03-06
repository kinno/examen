<?php
include_once '../libs/datos.php';
$datos = new Datos();
$respuesta = $datos->recuperaDatos();

foreach ($respuesta as $key => $value) {
    echo $value['nombre']."<br>";
}


