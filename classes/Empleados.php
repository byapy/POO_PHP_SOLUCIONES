<?php
    class Empleados{
        public $nombre;
        public $puesto;
        public $horasTrabajadas;
        public $pagoHora;
        private $igss;
        private $salario;
        private $sueldoLiquido;


        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function setPuesto($puesto){
            $this->puesto = $puesto;
        }
        public function setHoras($horasTrabajadas){
            $this->horasTrabajadas = $horasTrabajadas;
        }
        public function setPago($pagoHora){
            $this->pagoHora = $pagoHora;
        }
        private function calcularIgsss(){
            $this->salario = $this->pagoHora * $this->horasTrabajadas;
            $this->igss = $this->salario * 4.83 / 100;
            $this->sueldoLiquido = $this->salario - $this->igss;
            
        }
        public function MostrarEmpleado(){
            $this->calcularIgsss();
            echo("Nombre: ". $this->nombre);
            echo("<br> Puesto laboral: ". $this->puesto);
            echo("<br> Salario Mensual: Q". $this->salario);
            echo("<br> Horas Trabajadas: ". $this->horasTrabajadas);
            echo("<br> Pago por hora: ". $this->pagoHora);
            echo("<br> Sueldo Liquido: Q". number_format($this->sueldoLiquido, 2));
            echo("<br> IGSS: Q". $this->igss);
        }
    }
?>