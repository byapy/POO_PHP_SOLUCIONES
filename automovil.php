<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Automovil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #eef3f8;
            color: #1f2933;
            font-family: Arial, sans-serif;
        }

        .form-page {
            min-height: 100vh;
            padding: 48px 16px;
        }

        .side-nav {
            background: #172554;
        }

        .side-nav .nav-link {
            color: #dbeafe;
            border-radius: 6px;
            font-weight: 600;
        }

        .side-nav .nav-link:hover,
        .side-nav .nav-link.active {
            background: #1d4ed8;
            color: #fff;
        }

        .related-nav {
            max-width: 760px;
            margin: 0 auto 16px;
        }

        .form-card {
            max-width: 760px;
            margin: 0 auto;
            border-top: 6px solid #1d4ed8;
            border-radius: 8px;
            box-shadow: 0 12px 30px rgba(29, 78, 216, 0.12);
        }

        .form-title {
            color: #1e3a8a;
            font-weight: 700;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-theme {
            background: #1d4ed8;
            border-color: #1d4ed8;
            color: #fff;
        }

        .btn-theme:hover {
            background: #1e40af;
            border-color: #1e40af;
            color: #fff;
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
            <li class="nav-item"><a class="nav-link active" href="automovil.php">Automovil</a></li>
            <li class="nav-item"><a class="nav-link" href="motocicleta.php">Motocicleta</a></li>
            <li class="nav-item"><a class="nav-link" href="empleado.php">Empleado</a></li>
            <li class="nav-item"><a class="nav-link" href="biblioteca.php">Biblioteca</a></li>
            <li class="nav-item"><a class="nav-link" href="cuentaBancaria.php">Cuenta Bancaria</a></li>
        </ul>
    </nav>

    <main class="form-page">
        <nav class="related-nav">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="automovil.php">Automovil</a></li>
                <li class="nav-item"><a class="nav-link" href="motocicleta.php">Motocicleta</a></li>
            </ul>
        </nav>

        <section class="card form-card">
            <div class="card-body p-4 p-md-5">
                <h1 class="form-title mb-4">Registro de Automovil</h1>

                <form action="objects/objetoAutomovil.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="txt_Placa">Placa:</label>
                        <input class="form-control" type="text" id="txt_Placa" name="txt_Placa" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="txt_Marca">Marca:</label>
                        <input class="form-control" type="text" id="txt_Marca" name="txt_Marca" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="num_Modelo">Modelo:</label>
                        <input class="form-control" type="number" id="num_Modelo" name="num_Modelo" min="1900" step="1" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="num_Precio">Precio:</label>
                        <input class="form-control" type="number" id="num_Precio" name="num_Precio" min="0" step="0.01" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="sel_TipoVehiculo">Tipo de vehiculo:</label>
                        <select class="form-select" id="sel_TipoVehiculo" name="sel_TipoVehiculo" required>
                            <option value="">Seleccione</option>
                            <option value="Sedan">Sedan</option>
                            <option value="Hatchback">Hatchback</option>
                            <option value="Pickup">Pickup</option>
                            <option value="SUV">SUV</option>
                            <option value="Coupe">Coupe</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="num_NumeroPuertas">Numero de puertas:</label>
                        <input class="form-control" type="number" id="num_NumeroPuertas" name="num_NumeroPuertas" min="1" step="1" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="sel_TipoCombustible">Tipo de combustible:</label>
                        <select class="form-select" id="sel_TipoCombustible" name="sel_TipoCombustible" required>
                            <option value="">Seleccione</option>
                            <option value="Gasolina">Gasolina</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electrico">Electrico</option>
                            <option value="Hibrido">Hibrido</option>
                        </select>
                    </div>

                    <button class="btn btn-theme" type="submit" name="btn_Registrar">Registrar</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
