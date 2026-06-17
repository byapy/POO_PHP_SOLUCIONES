<?php
    require_once("../classes/PersonalTiempoCompleto.php");
    $objetoPersonalCompleto = new PersonalTiempoCompleto();

    $objetoPersonalCompleto->setBono($_POST["num_Bono"]);
    $objetoPersonalCompleto->setNombre($_POST["txt_Nombre"]);
    $objetoPersonalCompleto->setCodigo($_POST["txt_CodigoEmpleado"]);
    $objetoPersonalCompleto->setPuesto($_POST["txt_Puesto"]);
    $objetoPersonalCompleto->setSueldo($_POST["num_SueldoBase"]);
    $objetoPersonalCompleto->CalcularSueldoLiquido();
    $objetoPersonalCompleto->mostrarDatos();
?>