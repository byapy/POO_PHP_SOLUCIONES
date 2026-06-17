<?php
    require_once __DIR__."/Personal.php";
    class PersonalHoras extends Personal{
        public $horasTrabajadas;
        public $pagoHora;
        public $totalGanado;
        public $igss;
        public $sueldoLiquido;

        public function setHoras($horasTrabajadas){
            $this->horasTrabajadas = $horasTrabajadas;
        }
        public function setPagoHora($pagoHora){
            $this->pagoHora = $pagoHora;
        }

        public function CalcularSueldoLiquido(){
            $this->totalGanado = $this->sueldo + $this->horasTrabajadas * $this->pagoHora;
            $this->igss = $this->totalGanado * 4.83 /100;
            $this->sueldoLiquido = $this->totalGanado - $this->igss;
        }
        public function mostrarDatos(){
            parent::mostrarDatos();
            echo("<br> Horas trabajadas: ". $this->horasTrabajadas);
            echo("<br> Pago por hora: ". $this->pagoHora);
            echo("<br> IGSS: ". $this->igss);
            echo("<br> Sueldo Liquido: ". $this->sueldoLiquido);
        }
    }
?>  