<?php
class Pelicula
{
    private $titulo;
    private $actores;
    private $director;
    private $guion;
    private $produccion;
    private $año;
    private $nacionalidad;
    private $genero;
    private $duracion;
    private $restriccionEdad;
    private $sinopsis;
    private $imagen;

    public function __construct($datos)
    {
        $this->titulo = $datos['titulo'] ?? '';
        $this->actores = $datos['actores'] ?? '';
        $this->director = $datos['director'] ?? '';
        $this->guion = $datos['guion'] ?? '';
        $this->produccion = $datos['produccion'] ?? '';
        $this->año = $datos['año'] ?? '';
        $this->nacionalidad = $datos['nacionalidad'] ?? '';
        $this->genero = $datos['genero'] ?? '';
        $this->duracion = $datos['duracion'] ?? '';
        $this->restriccionEdad = $datos['restriccionEdad'] ?? '';
        $this->sinopsis = $datos['sinopsis'] ?? '';
        $this->imagen = $datos['imagen'] ?? null;
    }

    public function setImagen($ruta)
    {
        $this->imagen = $ruta;
    }

    public function getDatos()
    {
        return [
            'titulo' => $this->titulo,
            'actores' => $this->actores,
            'director' => $this->director,
            'guion' => $this->guion,
            'produccion' => $this->produccion,
            'año' => $this->año,
            'nacionalidad' => $this->nacionalidad,
            'genero' => $this->genero,
            'duracion' => $this->duracion,
            'restriccionEdad' => $this->restriccionEdad,
            'sinopsis' => $this->sinopsis,
            'imagen' => $this->imagen
        ];
    }
}
