<?php

class Control extends operaciones{
    private float $numeroUno;
    private $numeroDos;
    private $suma;
    private $resta;
    private $multiplicacion;
    private $division;

    public function suma($numeroUno,$numeroDos)
    {
        $this->numeroUno=$numeroUno;
        $this->numeroDos=$numeroDos;

        $suma=$this->numeroUno +  $this->numeroDos;
        
        return $suma;
    }

    public function resta($numeroUno,$numeroDos){
        $this->numeroUno=$numeroUno;
        $this->numeroDos=$numeroDos;
    }

    public function multiplicacion($numeroUno,$numeroDos){
        $this->numeroUno=$numeroUno;
        $this->numeroDos=$numeroDos;
    }

    public function division($numeroUno,$numeroDos){
        $this->numeroUno=$numeroUno;
        $this->numeroDos=$numeroDos;
    }
}