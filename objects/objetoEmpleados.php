<?php
    require_once("../classes/Empleados.php");
    $objetoEmpleados = new Empleados();
    $objetoEmpleados->setNombre($_POST["txt_Nombre"]);
    $objetoEmpleados->setPuesto($_POST["txt_Puesto"]);
    $objetoEmpleados->setHoras($_POST["num_HorasTrabajadas"]);
    $objetoEmpleados->setPago($_POST["num_PagoPorHora"]);
    $objetoEmpleados->MostrarEmpleado();
?>