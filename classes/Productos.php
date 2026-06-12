<?php
    class Productos{
        public $codigo;
        public $nombre;
        public $precio;
        public $existencias;

        public function InsertarCodigo($codigo){
            $this->codigo = $codigo;
        }
        public function InsertarNombre($nombre){
            $this->nombre = $nombre;
        }
        public function InsertarPrecio($precio){
            $this->precio = $precio;
        }
        public function InsertarExistencias($existencias){
            $this->existencias = $existencias;
        }

        public function MostrarProductoIngresado(){
            echo("PRODUCTOS");
            echo("<br>Codigo de Producto: ". $this->codigo);
            echo("<br>Nombre: ". $this->nombre);
            echo("<br>Precio: ". $this->precio);
            echo("<br>Existencias: ". $this->existencias);
        }
        public function CalcularPrecio(){
            echo("<br>Nombre: ". $this->nombre);
            echo("<br>Precio: ". $this->precio);
            echo("<br>Numero de Existencias: ". $this->existencias );
            echo("<br>Valor de Existencias: ". $this->precio * $this->existencias);
        }


    }
?>