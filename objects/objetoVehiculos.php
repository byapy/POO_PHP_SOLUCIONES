<?php
    require_once("../classes/vehiculos.php");
    $objetoVehiculos = new Vehiculos();
    $objetoVehiculos->setPlaca($_POST["txt_Placa"]);
    $objetoVehiculos->setMarca($_POST["txt_Marca"]);
    $objetoVehiculos->setModelo($_POST["num_Modelo"]);
    $objetoVehiculos->setPrecio($_POST["num_Precio"]);
    $objetoVehiculos->MostrarDatos();
?>