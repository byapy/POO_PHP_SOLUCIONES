<?php
    require_once __DIR__."/Personal.php";
    class PersonalTiempoCompleto extends Personal{
        private $bono;
        private $totalGanado;
        private $igss;
        private $sueldoLiquido;

        public function setBono($bono){
            $this->bono = $bono;
        }
        public function CalcularSueldoLiquido(){
            $this->totalGanado = $this->sueldo + $this->bono;
            $this->igss = $this->totalGanado * 4.83 /100;
            $this->sueldoLiquido = $this->totalGanado - $this->igss;

        }
        public function mostrarDatos(){
            parent::mostrarDatos();
            echo("<br>Bono adicional: " .$this->bono);
            echo("<br>Total Ganado: " . $this->totalGanado);
            echo("<br>IGSS:". $this->igss);
            echo("<br>Sueldo Liquido: ". $this->sueldoLiquido);

        }
    }
?>