<?php
require_once __DIR__ . '/../../Models/TP1/operacion.php';

$mensaje = null;

if (!empty($_GET)) {
    $num1 = floatval($_GET['num1'] ?? 0);
    $num2 = floatval($_GET['num2'] ?? 0);
    $operador = $_GET['operador'] ?? '';

    $operacion = new Operacion($num1, $num2, $operador);
    $mensaje = $operacion->calcular();
}

include __DIR__ . '/../../Views/TP1/operacionView.php';