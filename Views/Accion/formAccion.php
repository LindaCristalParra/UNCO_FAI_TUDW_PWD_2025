<?php

// Detectamos si viene por POST o GET
$accion = $_POST['accion'] ?? $_GET['accion'] ?? null;

switch ($accion) {
   
    case 'verNumero':
        include_once '../../Controllers/TP1/verNumeroController.php';
        break;

    case 'calcularHoras':
        include_once '../../Controllers/TP1/verHorasController.php';
        break;

    case 'mostrarPersona':
        include_once '../../Controllers/TP1/personaController.php';
        break;

    case 'operacionMatematica':
        include_once '../../Controllers/TP1/operacionController.php';
        break;

    case 'entradaCine':
        include_once '../../Controllers/TP1/entradaCineController.php';
        break;

    default:
        echo "<p>Acción no reconocida o no especificada.</p>";
        break;
}