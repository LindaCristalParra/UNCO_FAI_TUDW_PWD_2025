<?php
class Operacion {
    private $num1;
    private $num2;
    private $operador;

    public function __construct($num1, $num2, $operador) {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operador = $operador;
    }

    public function calcular(): string {
        switch ($this->operador) {
            case 'suma':
                $resultado = $this->num1 + $this->num2;
                $simbolo = '+';
                break;
            case 'resta':
                $resultado = $this->num1 - $this->num2;
                $simbolo = '-';
                break;
            case 'multiplicacion':
                $resultado = $this->num1 * $this->num2;
                $simbolo = '×';
                break;
            case 'division':
                if ($this->num2 == 0) {
                    return "Error: división por cero.";
                }
                $resultado = $this->num1 / $this->num2;
                $simbolo = '÷';
                break;
            default:
                return "Operación no válida.";
        }

        $mensaje = "La operación seleccionada: {$this->operador}<br>
                {$this->num1} {$simbolo} {$this->num2} = {$resultado}";
    
        return $mensaje;
    }
}