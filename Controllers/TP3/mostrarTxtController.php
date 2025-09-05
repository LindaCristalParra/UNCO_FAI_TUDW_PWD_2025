<?php
$mensaje = null;
$contenido = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tmp = $archivo['tmp_name'];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);

    if (strtolower($ext) !== 'txt') {
        $mensaje = "Error: solo se permiten archivos .txt";
    } else {
        // Leer contenido del archivo
        $contenido = file_get_contents($tmp);
        $mensaje = "Archivo cargado correctamente: $nombre";
    }
}

// Incluir la vista
include_once __DIR__ . '/../../Views/TP3/mostrarTxtView.php';
exit;