<?php
    class operaciones{
        
        private $numeroUno;
        private $numeroDos;

        public function setNumeroUno($numeroUno){
            $this->numeroUno=$numeroUno;
        }
        public function getNumeroUno(){
            $this->numeroUno;
            return $this->numeroUno;
        }
        public function setNumeroDos($numeroDos){
            $this->numeroDos=$numeroDos;
        }
        public function getNumeroDos(){
            $this->numeroDos;
            return $this->numeroDos;
        }

    }

    class control{
        private $numeroUno;
        private $numeroDos;
        private $suma;
        private $resta;
        private $multiplicacion;
        private $division;

        public function suma($numeroUno,$numeroDos){
            $this->numeroUno=$numeroUno;
            $this->numeroDos=$numeroDos;
            $suma=$this->numeroUno + $this->numeroDos;
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
?>