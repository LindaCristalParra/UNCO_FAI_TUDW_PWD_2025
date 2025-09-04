<?php
class EntradaCine {
    private $edad;
    private $esEstudiante;

    public function __construct($edad, $esEstudiante) {
        $this->edad = $edad;
        $this->esEstudiante = $esEstudiante;
    }

    public function calcularPrecio(): string {
        if($this->edad < 12){
            $precio = 160;
        }elseif ($this->esEstudiante && $this->edad < 12) {
            $precio = 160;
        } elseif ($this->esEstudiante && $this->edad >= 12) {
            $precio = 180;
        } else {
            $precio = 300;
        }

        $mensaje = "El precio de la entrada es: \${$precio}.";
        return $mensaje;
    }
}