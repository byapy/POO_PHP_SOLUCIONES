<?php
    require_once("CuentaBancaria.php");
    class CuentaAhorro extends CuentaBancaria{

        private $tasaInteres;

        public function setInteres($tasaInteres){
            $this->tasaInteres = $tasaInteres;
        }

        public function mostrarDatos(){
            parent::mostrarDatos();
            echo("<br> Tipo de Cuenta: Ahorro");
            echo("<br> Tasa de Interes: ". $this->tasaInteres);
        }

    }
?>