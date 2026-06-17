<?php
    require_once("../classes/Automovil.php");
    $objetoAutomovil = new Automovil();
    $objetoAutomovil->setPlaca($_POST["txt_Placa"]);
    $objetoAutomovil->setMarca($_POST["txt_Marca"]);
    $objetoAutomovil->setModelo($_POST["num_Modelo"]);
    $objetoAutomovil->setPrecio($_POST["num_Precio"]);

    $objetoAutomovil->setTipoVehiculo($_POST["sel_TipoVehiculo"]);
    $objetoAutomovil->setNumPuertas($_POST["num_NumeroPuertas"]);
    $objetoAutomovil->setCombustible($_POST["sel_TipoCombustible"]);
    $objetoAutomovil->mostrarDatos();
?>  