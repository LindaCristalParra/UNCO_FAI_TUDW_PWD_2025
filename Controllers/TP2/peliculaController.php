<?php
require_once __DIR__ . '/../../Models/TP2/pelicula.php';

$peliculaIngresada = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    $pelicula = new Pelicula($_POST);

    // Manejo de imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $uploadsDir = __DIR__ . '/../../uploads/';
        if (!is_dir($uploadsDir)) {
            mkdir($uploadsDir, 0777, true);
        }

        $nombreArchivo = basename($_FILES['imagen']['name']);
        $rutaDestino = $uploadsDir . $nombreArchivo;

        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
            $pelicula->setImagen('uploads/' . $nombreArchivo);
        }
    }

    $peliculaIngresada = $pelicula->getDatos();
}

include __DIR__ . '/../../Views/TP2/peliculaView.php';

