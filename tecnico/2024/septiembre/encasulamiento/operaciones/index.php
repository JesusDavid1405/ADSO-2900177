<?php
class operaciones{
    private $numeroUno;
    private $numeroDos;

    public setNumeroUno($numeroUno);
    public getNumeroUno();
    public setNumeroDos($numeroDos);
    public getNumeroDos();

}
class controlOperaciones extends operaciones{
    private $numeroUno;
    private $numeroDos;
    private $suma;
    private $resta;
    private $multiplicacion;
    private $division;

    public suma($numeroUno,$numeroDos){
        $this->suma=$numeroUno+$numeroDos;
        return $this->suma;
    }
}
echo controlOperaciones.suma()