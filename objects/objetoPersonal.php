<?php
    require_once("../classes/Personal.php");
    $objetoPersonal = new Personal();
    $objetoPersonal->setNombre($_POST["txt_Nombre"]);
    $objetoPersonal->setCodigo($_POST["txt_CodigoEmpleado"]);
    $objetoPersonal->setPuesto($_POST["txt_Puesto"]);
    $objetoPersonal->setSueldo($_POST["num_SueldoBase"]);
    $objetoPersonal->mostrarDatos();
?>