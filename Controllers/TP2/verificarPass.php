<?php
require_once __DIR__ . '/../../Models/TP2/usuario.php';

$usuarioIngresado = $_POST['usuario'] ?? '';
$claveIngresada = $_POST['clave'] ?? '';

$encontrado = false;

foreach ($usuarios as $user) {
    if ($user['usuario'] === $usuarioIngresado && $user['clave'] === $claveIngresada) {
        $encontrado = true;
    }
}

// Paso el resultado a la vista
$mensaje = $encontrado ? "¡Bienvenido, $usuarioIngresado!" : "Usuario o contraseña incorrectos";
$tipo = $encontrado ? "success" : "danger";

include_once("../../Views/TP2/loginResultadoView.php");

