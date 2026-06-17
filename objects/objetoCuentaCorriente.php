<?php
    require_once("../classes/CuentaCorriente.php");
    $objetoCuentaCorriente = new CuentaCorriente();
    $objetoCuentaCorriente->setNumero($_POST["txt_NumeroCuenta"]);
    $objetoCuentaCorriente->setTitular($_POST["txt_Titular"]);
    $objetoCuentaCorriente->setSaldo($_POST["num_Saldo"]);

    $objetoCuentaCorriente->setLimiteMensual($_POST["num_LimiteDebitoMensual"]);
    $objetoCuentaCorriente->setLimiteDiario($_POST["num_LimiteDebitoDiario"]);
    $objetoCuentaCorriente->mostrarDatos();

?>  