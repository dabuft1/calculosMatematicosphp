<?php
require_once "Numero.php";

class Fibonacci extends Numero{

    public function calcularFibonacci(){
        $a = 0;
        $b = 1;

        for($i=1; $i <= $this->getValor(); $i++){
            echo $a . " ";
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    }

}
?>