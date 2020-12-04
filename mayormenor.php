<?php

require_once 'Numero.php'; 

class mayormenor extends Numero{

    

    public function calcularComparacion(){

        $valor1 = $this->getValor1(); 
        $valor2 = $this->getValor2(); 
        $valor3 = $this->getValor3(); 
        

        if($valor1 > $valor2 and $valor1 > $valor3){

            echo "El mayor es: " . $valor1; 
        }else if ($valor2 > $valor1 and $valor2 > $valor3){

            echo "El mayor es: " . $valor2; 
        }else if ($valor3 > $valor1 and $valor3 > $valor2){

            echo "El mayor es: " . $valor3; 
        }else{

            echo "Los números son iguales. "; 
        }

        $promedio=($valor1 + $valor2 + $valor3) / 3;
            
            echo "<br>El promedio de los tres números es: " . $promedio;
        

        
    }
}

?>