<?php
    class Vehiculos{
        private $numeroPlaca;
        private $marca;
        private $modelo;
        private $precio;

        public function setPlaca($numeroPlaca){
            $this->numeroPlaca = $numeroPlaca;
        }
        public function setMarca($marca){
            $this->marca = $marca;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        public function setPrecio($precio){
            $this->precio = $precio;
        }

        public function MostrarDatos(){
            echo("INFORMACION DEL VEHICULO");
            echo("<br>Placa: ". $this->numeroPlaca);
            echo("<br>Marca: ". $this->marca);
            echo("<br>Modelo: ". $this->modelo);
            echo("<br>Precio: Q". number_format($this->precio, 2));

        }

    }
?>