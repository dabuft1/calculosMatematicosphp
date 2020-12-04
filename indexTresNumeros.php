<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular mayor, menor y promedio de 3 números</h1>
   
    <form name="form1" method="POST" action="comparar.php">
                <p>Ingresa el primer número </p>
                <p><input type="text" id="txtvalor1" name="txtvalor1"></p>
                <p>Ingresa el segundo número </p>
                <p><input type="text" id="txtvalor2" name="txtvalor2"></p>
                <p>Ingresa el tercer número </p>
                <p><input type="text" id="txtvalor3" name="txtvalor3"></p>
                <p><input type="submit" name="btnComparar1" value="Comparar"></p>
                <button type="button" onclick="location.href='indexCalculos.php'">VOLVER</button>
</body>
</html>