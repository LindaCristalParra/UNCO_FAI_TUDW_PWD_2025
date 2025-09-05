<?php
require_once __DIR__ . '/../../Models/TP2/pelicula.php';

$peliculaIngresada = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    $pelicula = new Pelicula($_POST);
    $peliculaIngresada = $pelicula->getDatos();
}

include __DIR__ . '/../../Views/TP2/peliculaView.php';
