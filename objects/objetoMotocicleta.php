<?php
    require_once("../classes/Motocicleta.php");
    $objetoMotocicleta = new Motocicleta();
    $objetoMotocicleta->setPlaca($_POST["txt_Placa"]);
    $objetoMotocicleta->setMarca($_POST["txt_Marca"]);
    $objetoMotocicleta->setModelo($_POST["num_Modelo"]);
    $objetoMotocicleta->setPrecio($_POST["num_Precio"]);
    $objetoMotocicleta->setCilindraje($_POST["num_Cilindrada"]);
    $objetoMotocicleta->setMoto($_POST["sel_TipoMoto"]);
    $objetoMotocicleta->mostrarDatos();
?>