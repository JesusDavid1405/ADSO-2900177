<?php

include('libreria/operaciones.php');
include('libreria/control.php');

$numeroUno= new operaciones();
$numeroUno->setNumeroUno(9);

$numeroDos= new operaciones();
$numeroDos->setNumeroDos(9);

$sumar= new control();
$sumar->suma(
    
)

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
    echo $sumar->suma();
        
    ?>
</body>
</html>