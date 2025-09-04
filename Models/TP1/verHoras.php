<?php

class VerHoras {
    private $horas;

    public function __construct($horas) {
        // Array asociativo
        $this->horas = $horas;
    }

    public function getTotalHoras() {
        $total = 0;
        foreach ($this->horas as $h) {
            if (is_numeric($h)) {
                $total += $h;
            }
        }
        return $total;
    }
}
?>