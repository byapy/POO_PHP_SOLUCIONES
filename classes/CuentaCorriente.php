<?php
    require_once("CuentaBancaria.php");
    class CuentaCorriente extends CuentaBancaria{

        private $limiteDebitoMensual;
        private $limiteDebitoDiario;

        public function setLimiteMensual($limiteDebitoMensual){
            $this->limiteDebitoMensual = $limiteDebitoMensual;
        }
        public function setLimiteDiario($limiteDebitoDiario){
            $this->limiteDebitoDiario = $limiteDebitoDiario;
        }
        public function mostrarDatos(){
            parent::mostrarDatos();
            echo("<br>Tipo de Cuenta: Corriente");
            echo("<br>Limite Mensual: " . $this->limiteDebitoMensual);
            echo("<br> Limite Diario: ". $this->limiteDebitoDiario);
        }
    }
?>