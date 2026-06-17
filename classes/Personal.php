<?php
    class Personal{
        private $codigo;
        private $nombre;
        private $puesto;
        public $sueldo;

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setPuesto($puesto){
            $this->puesto = $puesto;
        }
        public function setSueldo($sueldo){
            $this->sueldo = $sueldo;
        }
        public function mostrarDatos(){
            echo("--DATOS DEL EMPLEADO--");
            echo("<br> Nombre: ". $this->nombre);
            echo("<br> Codigo: ". $this->codigo);
            echo("<br> Puesto: ". $this->puesto);
            echo("<br> Sueldo: ". $this->sueldo);
        }
    }

?>  