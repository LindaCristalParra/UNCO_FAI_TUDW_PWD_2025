<?php

require_once 'numero.php';


function tipoNumero($num): string {
    
    $resultado = "";

    if ($num > 0) {
        $resultado = "El número es positivo.";
    } elseif ($num < 0) {
        $resultado = "El número es negativo.";
    } else {
        $resultado = "El número es cero.";
    }
    return $resultado;
}