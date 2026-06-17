<?php
    require_once("Vehiculos.php");
    class Motocicleta extends Vehiculos{
        private $cilindraje;
        private $tipoMoto;

        public function setCilindraje($cilindraje){
            $this->cilindraje = $cilindraje;
        }
        public function setMoto($tipoMoto){
            $this->tipoMoto = $tipoMoto;
        }

        public function mostrarDatos(){
            parent::mostrarDatos();
            echo("<br>Datos de la Motocicleta: ");
            echo("<br> Cilindraje: ". $this->cilindraje);
            echo("<br> Tipo de moto: ". $this->tipoMoto);
        }
    }
?>