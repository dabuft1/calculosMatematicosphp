<?php 

if(isset($_POST["btncalcular"])){

    
    require_once 'Factorial.php';

   
    $factorial = new Factorial();

    $valor = $_POST["txtvalor"];

  
    $factorial->setValor($valor);

   
    echo "La factorial de " . $valor . " es " . $factorial->calcularFac();
    echo "<br><input type='button' value='Regresar' onClick='history.go(-1);'>";

}else{
    echo "Acceso no autorizado.";
}

?>