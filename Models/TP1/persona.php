<?php
class Persona
{
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $sexo;
    private $nivelEstudio;
    private $deportes; //array

    public function __construct($nombre, $apellido, $edad, $direccion, $sexo, $nivelEstudio, $deportes = [])
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
        $this->sexo = $sexo;
        $this->nivelEstudio = $nivelEstudio;
        $this->deportes = $deportes;
    }

    public function getMensaje(): string
    {
        $mayor = $this->edad >= 18 ? "mayor de edad" : "menor de edad";

        $niveles = [
            1 => "no tiene estudios",
            2 => "estudios primarios",
            3 => "estudios secundarios"
        ];

        $nivelTexto = $niveles[$this->nivelEstudio] ?? "nivel desconocido";

        $cantidadDeportes = count($this->deportes);
        $listaDeportes = $cantidadDeportes > 0 ? implode(", ", $this->deportes) : "ninguno";

        $mensaje = "Hola {$this->nombre} {$this->apellido}, sos {$mayor}, tenés {$this->edad} años, vivís en {$this->direccion}, tu sexo es {$this->sexo}, tu nivel de estudios es {$nivelTexto} y practicas {$cantidadDeportes} deporte(s): {$listaDeportes}.";
        return $mensaje;
    }
}
