<?php
    require_once("Vehiculos.php");
    class Automovil extends Vehiculos{
        private $tipoVehiculo;
        private $numeroPuertas;
        private $tipoCombustible;

        public function setTipoVehiculo($tipoVehiculo){
            $this->tipoVehiculo = $tipoVehiculo;
        }
        public function setNumPuertas($numeroPuertas){
            $this->numeroPuertas = $numeroPuertas;
        }
        public function setCombustible($tipoCombustible){
            $this->tipoCombustible = $tipoCombustible;
        }
        public function mostrarDatos(){
            parent::mostrarDatos();
            echo("<br> Datos del Carro: ");
            echo("<br> Tipo del vehiculo: ". $this->tipoVehiculo);
            echo("<br> Numero de Puertas: ". $this->numeroPuertas);
            echo("<br> Tipo de combustible: ". $this->tipoCombustible);
        }
    }
?>