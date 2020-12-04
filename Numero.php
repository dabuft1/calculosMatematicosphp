<?php
class Numero{
    private $valor;
    private $valor1;
    private $valor2; 
    private $valor3;
    
        public function __construct(){
        $this->valor = 0;
        }

        public function setValor($value){
            $this->valor = $value;
        }

        public function getValor(){
            return $this->valor;
        }

        public function setValor1($value){

            $this->valor1 = $value; 
        }
    
        public function getValor1(){
    
            return $this->valor1; 
        }
    
        public function setValor2($value2){
    
            $this->valor2 = $value2; 
        }
    
        public function getValor2(){
    
            return $this->valor2; 
        }
    
        public function setValor3($value3){
    
            $this->valor3 = $value3; 
        }
    
        public function getValor3(){
    
            return $this->valor3; 
        }
        
}

?>