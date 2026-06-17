<?php
    require_once("../classes/CuentaAhorro.php");
    $objetoCuentaAhorro = new CuentaAhorro();
    $objetoCuentaAhorro->setNumero($_POST["txt_NumeroCuenta"]);
    $objetoCuentaAhorro->setTitular($_POST["txt_Titular"]);
    $objetoCuentaAhorro->setSaldo($_POST["num_Saldo"]);
    
    $objetoCuentaAhorro->setInteres($_POST["num_TasaInteres"]);
    $objetoCuentaAhorro->mostrarDatos();
?>