<?php
include_once '../libs/datos.php';
$datos = new Datos();
$respuesta = $datos->guardarDatos($_POST);
echo $respuesta;
