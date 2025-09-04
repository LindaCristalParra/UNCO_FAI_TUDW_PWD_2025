<?php
require_once __DIR__ . '/../../Models/TP1/verNumero.php';
require_once __DIR__ . '/../../Models/TP1/Numero.php';

$resultado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
    $numero = new Numero($_POST['numero']);
    $resultado = tipoNumero($numero->getValue());
}

// Mostrar siempre la vista
include __DIR__ . '/../../Views/TP1/verNumeroVista.php';

