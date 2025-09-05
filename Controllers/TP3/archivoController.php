<?php
$mensaje = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];
    $tamano = $archivo['size'];
    $tmp = $archivo['tmp_name'];

    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    $permitidos = ['doc', 'pdf'];

    if (!in_array(strtolower($ext), $permitidos)) {
        $mensaje = "Error: solo se permiten archivos .doc o .pdf";
    } elseif ($tamano > 2 * 1024 * 1024) { // 2 MB
        $mensaje = "Error: el archivo supera el tamaño máximo de 2MB";
    } else {
        $destino = __DIR__ . '/../../uploads/' . $nombre;

        if (!is_dir(__DIR__ . '/../../uploads')) {
            mkdir(__DIR__ . '/../../uploads', 0777, true);
        }

        if (move_uploaded_file($tmp, $destino)) {
            $mensaje = "Archivo subido correctamente: <a href='../../uploads/$nombre' target='_blank'>$nombre</a>";
        } else {
            $mensaje = "Error al mover el archivo.";
        }
    }
}


include_once __DIR__ . '/../../Views/TP3/subirArchivoView.php';
exit;