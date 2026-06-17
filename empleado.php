<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #eef7f7;
            color: #1f2933;
            font-family: Arial, sans-serif;
        }

        .form-page {
            min-height: 100vh;
            padding: 48px 16px;
        }

        .side-nav {
            background: #134e4a;
        }

        .side-nav .nav-link {
            color: #ccfbf1;
            border-radius: 6px;
            font-weight: 600;
        }

        .side-nav .nav-link:hover,
        .side-nav .nav-link.active {
            background: #0f766e;
            color: #fff;
        }

        .form-card {
            max-width: 720px;
            margin: 0 auto;
            border-top: 6px solid #0f766e;
            border-radius: 8px;
            box-shadow: 0 12px 30px rgba(15, 118, 110, 0.12);
        }

        .form-title {
            color: #115e59;
            font-weight: 700;
        }

        .related-nav {
            max-width: 720px;
            margin: 0 auto 16px;
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
            <li class="nav-item"><a class="nav-link active" href="empleado.php">Empleado</a></li>
            <li class="nav-item"><a class="nav-link" href="personal.php">Personal</a></li>
            <li class="nav-item"><a class="nav-link" href="biblioteca.php">Biblioteca</a></li>
            <li class="nav-item"><a class="nav-link" href="cuentaBancaria.php">Cuenta Bancaria</a></li>
        </ul>
    </nav>

    <main class="form-page">
        <nav class="related-nav">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" href="empleado.php">Empleado</a></li>
                <li class="nav-item"><a class="nav-link" href="personal.php">Personal</a></li>
            </ul>
        </nav>

        <section class="card form-card">
            <div class="card-body p-4 p-md-5">
                <h1 class="form-title mb-4">Registro de Empleado</h1>

                <form action="objects/objetoEmpleados.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="txt_Nombre">Nombre:</label>
                        <input class="form-control" type="text" id="txt_Nombre" name="txt_Nombre" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="txt_Puesto">Puesto:</label>
                        <input class="form-control" type="text" id="txt_Puesto" name="txt_Puesto" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="num_HorasTrabajadas">Horas trabajadas:</label>
                        <input class="form-control" type="number" id="num_HorasTrabajadas" name="num_HorasTrabajadas" min="0" step="0.01" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="num_PagoPorHora">Pago por hora:</label>
                        <input class="form-control" type="number" id="num_PagoPorHora" name="num_PagoPorHora" min="0" step="0.01" required>
                    </div>

                    <button class="btn btn-theme" type="submit" name="btn_Registrar">Registrar</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
