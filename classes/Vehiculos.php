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

    }
?>