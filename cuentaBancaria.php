<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cuenta Bancaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f1f5f9;
            color: #1f2933;
            font-family: Arial, sans-serif;
        }

        .form-page {
            min-height: 100vh;
            padding: 48px 16px;
        }

        .side-nav {
            background: #0f3d4c;
        }

        .side-nav .nav-link {
            color: #dff6f3;
            border-radius: 6px;
            font-weight: 600;
        }

        .side-nav .nav-link:hover,
        .side-nav .nav-link.active {
            background: #0f766e;
            color: #fff;
        }

        .page-header {
            max-width: 980px;
            margin: 0 auto 24px;
        }

        .form-title {
            color: #0f3d4c;
            font-weight: 700;
        }

        .form-card {
            border-top: 6px solid #0f766e;
            border-radius: 8px;
            box-shadow: 0 12px 30px rgba(15, 61, 76, 0.12);
            height: 100%;
        }

        .section-title {
            color: #0f3d4c;
            font-size: 1.35rem;
            font-weight: 700;
        }

        fieldset {
            border: 1px solid #d7dee8;
            border-radius: 8px;
            padding: 18px;
            margin-bottom: 20px;
        }

        legend {
            float: none;
            width: auto;
            padding: 0 8px;
            margin-bottom: 0;
            color: #475569;
            font-size: 0.95rem;
            font-weight: 700;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-theme {
            background: #0f766e;
            border-color: #0f766e;
            color: #fff;
        }

        .btn-theme:hover {
            background: #115e59;
            border-color: #115e59;
            color: #fff;
        }

        .card-corriente {
            border-top-color: #334155;
        }

        .card-corriente .btn-theme {
            background: #334155;
            border-color: #334155;
        }

        .card-corriente .btn-theme:hover {
            background: #1e293b;
            border-color: #1e293b;
        }

        @media (min-width: 992px) {
            .side-nav {
                position: fixed;
                inset: 0 auto 0 0;
                width: 240px;
                min-height: 100vh;
            }

            .form-page {
                margin-left: 240px;
            }
        }
    </style>
</head>
<body>
    <nav class="side-nav p-3">
        <h2 class="h5 text-white mb-4">Formularios</h2>
        <ul class="nav nav-pills flex-column gap-1">
            <li class="nav-item"><a class="nav-link" href="producto.php">Producto</a></li>
            <li class="nav-item"><a class="nav-link" href="automovil.php">Automovil</a></li>
            <li class="nav-item"><a class="nav-link" href="motocicleta.php">Motocicleta</a></li>
            <li class="nav-item"><a class="nav-link" href="empleado.php">Empleado</a></li>
            <li class="nav-item"><a class="nav-link" href="biblioteca.php">Biblioteca</a></li>
            <li class="nav-item"><a class="nav-link active" href="cuentaBancaria.php">Cuenta Bancaria</a></li>
        </ul>
    </nav>

    <main class="form-page">
        <header class="page-header">
            <h1 class="form-title mb-0">Registro de Cuentas Bancarias</h1>
        </header>

        <section class="container px-0">
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="card form-card">
                        <div class="card-body p-4">
                            <h2 class="section-title mb-4">Cuenta de Ahorro</h2>

                            <form action="objects/objetoCuentaAhorro.php" method="post">
                                <fieldset>
                                    <legend>Datos de Cuenta Bancaria</legend>

                                    <div class="mb-3">
                                        <label class="form-label" for="txt_NumeroCuenta">Numero de cuenta:</label>
                                        <input class="form-control" type="text" id="txt_NumeroCuenta" name="txt_NumeroCuenta" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="txt_Titular">Titular:</label>
                                        <input class="form-control" type="text" id="txt_Titular" name="txt_Titular" required>
                                    </div>

                                    <div class="mb-0">
                                        <label class="form-label" for="num_Saldo">Saldo:</label>
                                        <input class="form-control" type="number" id="num_Saldo" name="num_Saldo" min="0" step="0.01" required>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend>Cuenta de Ahorro</legend>

                                    <div class="mb-0">
                                        <label class="form-label" for="num_TasaInteres">Tasa de interes:</label>
                                        <input class="form-control" type="number" id="num_TasaInteres" name="num_TasaInteres" min="0" step="0.01" required>
                                    </div>
                                </fieldset>

                                <button class="btn btn-theme" type="submit" name="btn_RegistrarAhorro">Registrar cuenta de ahorro</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="card form-card card-corriente">
                        <div class="card-body p-4">
                            <h2 class="section-title mb-4">Cuenta Corriente</h2>

                            <form action="objects/objetoCuentaCorriente.php" method="post">
                                <fieldset>
                                    <legend>Datos de Cuenta Bancaria</legend>

                                    <div class="mb-3">
                                        <label class="form-label" for="txt_NumeroCuenta">Numero de cuenta:</label>
                                        <input class="form-control" type="text" id="txt_NumeroCuenta" name="txt_NumeroCuenta" required>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="txt_Titular">Titular:</label>
                                        <input class="form-control" type="text" id="txt_Titular" name="txt_Titular" required>
                                    </div>

                                    <div class="mb-0">
                                        <label class="form-label" for="num_Saldo">Saldo:</label>
                                        <input class="form-control" type="number" id="num_Saldo" name="num_Saldo" min="0" step="0.01" required>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend>Cuenta Corriente</legend>

                                    <div class="mb-3">
                                        <label class="form-label" for="num_LimiteDebitoMensual">Limite de debito mensual:</label>
                                        <input class="form-control" type="number" id="num_LimiteDebitoMensual" name="num_LimiteDebitoMensual" min="0" step="0.01" required>
                                    </div>

                                    <div class="mb-0">
                                        <label class="form-label" for="num_LimiteDebitoDiario">Limite de debito diario:</label>
                                        <input class="form-control" type="number" id="num_LimiteDebitoDiario" name="num_LimiteDebitoDiario" min="0" step="0.01" required>
                                    </div>
                                </fieldset>

                                <button class="btn btn-theme" type="submit" name="btn_RegistrarCorriente">Registrar cuenta corriente</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
