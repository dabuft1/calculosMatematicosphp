<?php 

require_once 'Numero.php';

class Factorial extends Numero{

    public function calcularFac(){

        $factorial = 1;

        for($i = 1; $i <= $this->getValor(); $i++){
            $factorial = $factorial * $i;
        }

        return $factorial;

    }


}

?>