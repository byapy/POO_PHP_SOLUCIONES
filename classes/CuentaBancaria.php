<?php
    class CuentaBancaria{
        private $numeroCuenta;
        private $titular;
        private $saldo;

        public function setNumero($numeroCuenta){
            $this->numeroCuenta = $numeroCuenta;
        }
        public function setTitular($titular){
            $this->titular = $titular;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function mostrarDatos(){
            echo("--Banco Mundial--");
            echo("<br> Numero de Cuenta: ". $this->numeroCuenta);
            echo("<br> Nombre del Titular: ". $this->titular);
            echo("<br> Saldo Disponible: " .$this->saldo);
        }
    }
?> 