<?php

if (isset($_POST["btnComparar1"])){

    require_once 'mayormenor.php'; 

    $mayormenor = new Mayormenor(); 

    $valor1 = $_POST["txtvalor1"];
    $valor2 = $_POST["txtvalor2"];
    $valor3 = $_POST["txtvalor3"];
   

    $mayormenor->setValor1($valor1); 
    $mayormenor->setValor2($valor2);
    $mayormenor->setValor3($valor3);
    

    $mayormenor->calcularComparacion(); 
    
    echo "<br><input type='button' value='Regresar' onClick='history.go(-1);'>";


}else {

    echo "Acceso no permitido";
}

?>