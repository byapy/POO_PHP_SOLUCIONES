<?php
    require_once("../classes/CuentaBancaria.php");
    $objetoCuentaBancaria = new CuentaBancaria();
    $objetoCuentaBancaria->setNumero($_POST["txt_NumeroCuenta"]);
    $objetoCuentaBancaria->setTitular($_POST["txt_Titular"]);
    $objetoCuentaBancaria->setSaldo($_POST["num_Saldo"]);
    $objetoCuentaBancaria->mostrarDatos();
?>