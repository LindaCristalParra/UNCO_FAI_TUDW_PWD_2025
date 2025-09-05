<?php
require_once __DIR__ . '/../../Models/TP1/persona.php';

$mensaje = null;

if (!empty($_GET)) {
    $nombre = $_GET['nombre'] ?? '';
    $apellido = $_GET['apellido'] ?? '';
    $edad = $_GET['edad'] ?? 0;
    $direccion = $_GET['direccion'] ?? '';
    $sexo = $_GET['sexo'] ?? '';
    $nivelEstudio = $_GET['nivelEstudio'] ?? 0;
    $deportes = $_GET['deportes'] ?? []; // Array de deportes

    $persona = new Persona($nombre, $apellido, $edad, $direccion, $sexo, $nivelEstudio, $deportes);
    $mensaje = $persona->getMensaje();
    //return $mensaje;

}

include __DIR__ . '/../../Views/TP2/personaView.php';