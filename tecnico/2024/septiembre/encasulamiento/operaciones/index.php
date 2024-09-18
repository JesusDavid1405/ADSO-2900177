<?php

include('libreria/operaciones.php');

$numeroUno= new operaciones();
$numeroUno->setNumeroUno(7);

$numeroDos= new operaciones();
$numeroDos->setNumeroDos(7);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operaciones</title>
</head>
<body>
    <?php
    
        $sumar= new control();
        $sumar->suma($numeroUno->getNumeroUno(), $numeroDos->getNumeroDos());
        
        echo "<h2>". $sumar ."</h2>";
    ?>
</body>
</html>