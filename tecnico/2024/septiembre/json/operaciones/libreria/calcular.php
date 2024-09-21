<?php

    include('numero.php');
    include('operaciones.php');

    $numUno= new Numero(6);

    $numDos= new Numero(7);

    $operar= new Operaciones(
        $numUno,
        $numDos
        
    );

    $response=[];

    $response['suma']=$operar->suma();
    $response['resta']=$operar->resta();
    $response['multiplicacion']=$operar->multiplicacion();
    //$response['division']=$operar->division();

    header('content-Type: application/json');
    echo json_encode($response)


?>