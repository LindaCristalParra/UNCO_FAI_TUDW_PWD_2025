<?php
require_once __DIR__ . '/../../Models/TP1/entradaCine.php';

$mensaje = null;

if (!empty($_GET)) {
    $edad = intval($_GET['edad'] ?? 0);
    $esEstudiante = isset($_GET['esEstudiante']) && $_GET['esEstudiante'] === 'on';

    $entrada = new EntradaCine($edad, $esEstudiante);
    $mensaje = $entrada->calcularPrecio();
}

include __DIR__ . '/../../Views/TP1/entradaCineView.php';