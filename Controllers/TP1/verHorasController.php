<?php
require_once __DIR__ . '/../../Models/TP1/verHoras.php';

// Recibir los datos enviados por GET
$lunes = $_GET['lunes'] ?? 0;
$martes = $_GET['martes'] ?? 0;
$miercoles = $_GET['miercoles'] ?? 0;
$jueves = $_GET['jueves'] ?? 0;
$viernes = $_GET['viernes'] ?? 0;

// Guardamos en un array
$horas = [$lunes, $martes, $miercoles, $jueves, $viernes];

// Calcular total de horas
$totalHoras = array_sum($horas);

// Incluir la vista
include_once __DIR__ . '/../../Views/TP1/verHorasView.php';