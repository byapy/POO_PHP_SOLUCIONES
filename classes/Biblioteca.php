<?php
    class Biblioteca{
        private $isbn;
        private $titulo;
        private $autor;
        private $anoPublicacion;

        public function setIsbn($isbn){
            $this->isbn = $isbn;
        }
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        public function setAutor($autor){
            $this->autor = $autor;
        }
        public function setAnoPublicacion($anoPublicacion){
            $this->anoPublicacion = $anoPublicacion;
        }
        public function mostrarDatos(){
            echo("DATOS DEL LIBRO");
            echo("<br>ISBN: ". $this->isbn);
            echo("<br>Titulo: ". $this->titulo);
            echo("<br>Autor: ". $this->autor);
            echo("<br>Año de Publicación: ". $this->anoPublicacion);
        }



    }
?>