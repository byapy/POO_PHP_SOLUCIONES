<?php
    require_once("../classes/PersonalHoras.php");
    $objetoPersonalHoras = new PersonalHoras();

    $objetoPersonalHoras->setNombre($_POST["txt_Nombre"]);
    $objetoPersonalHoras->setCodigo($_POST["txt_CodigoEmpleado"]);
    $objetoPersonalHoras->setPuesto($_POST["txt_Puesto"]);
    $objetoPersonalHoras->setSueldo($_POST["num_SueldoBase"]);

    $objetoPersonalHoras->setHoras($_POST["num_HorasTrabajadas"]);
    $objetoPersonalHoras->setPagoHora($_POST["num_PagoPorHora"]);
    $objetoPersonalHoras->CalcularSueldoLiquido();
    $objetoPersonalHoras->mostrarDatos();
?>