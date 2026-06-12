<?php
    require_once("../classes/Biblioteca.php");
    $objetoBiblioteca = new Biblioteca();
    $objetoBiblioteca->setIsbn($_POST["txt_Isbn"]);
    $objetoBiblioteca->setTitulo($_POST["txt_Titulo"]);
    $objetoBiblioteca->setAutor($_POST["txt_Autor"]);
    $objetoBiblioteca->setAnoPublicacion($_POST["num_AnoPublicacion"]);
    $objetoBiblioteca->mostrarDatos();
?>


