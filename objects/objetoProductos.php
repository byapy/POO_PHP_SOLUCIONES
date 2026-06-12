<?php
    require_once("../classes/Productos.php");
    $objetoProductos = new Productos();
    $objetoProductos->InsertarCodigo($_POST["txt_Codigo"]);
    $objetoProductos->InsertarNombre($_POST["txt_Nombre"]);
    $objetoProductos->InsertarPrecio($_POST["num_Precio"]);
    $objetoProductos->InsertarExistencias($_POST["num_Existencias"]);
    if(isset($_POST["btn_Registrar"])){
        $objetoProductos->MostrarProductoIngresado();
    }
    if(isset($_POST["btn_Revisar"])){
        $objetoProductos->CalcularPrecio();
    }
?>