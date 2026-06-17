<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f7f4ee;
            color: #1f2933;
            font-family: Arial, sans-serif;
        }

        .form-page {
            min-height: 100vh;
            padding: 48px 16px;
        }

        .side-nav {
            background: #3f2f16;
        }

        .side-nav .nav-link {
            color: #f3ead7;
            border-radius: 6px;
            font-weight: 600;
        }

        .side-nav .nav-link:hover,
        .side-nav .nav-link.active {
            background: #7c5e2f;
            color: #fff;
        }

        .form-card {
            max-width: 720px;
            margin: 0 auto;
            border-top: 6px solid #7c5e2f;
            border-radius: 8px;
            box-shadow: 0 12px 30px rgba(124, 94, 47, 0.14);
        }

        .form-title {
            color: #5f4520;
            font-weight: 700;
        }

        .form-label {
            font-weight: 600;
        }

        .btn-theme {
            background: #7c5e2f;
            border-color: #7c5e2f;
            color: #fff;
        }

        .btn-theme:hover {
            background: #5f4520;
            border-color: #5f4520;
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
            <li class="nav-item"><a class="nav-link" href="empleado.php">Empleado</a></li>
            <li class="nav-item"><a class="nav-link" href="personal.php">Personal</a></li>
            <li class="nav-item"><a class="nav-link active" href="biblioteca.php">Biblioteca</a></li>
            <li class="nav-item"><a class="nav-link" href="cuentaBancaria.php">Cuenta Bancaria</a></li>
        </ul>
    </nav>

    <main class="form-page">
        <section class="card form-card">
            <div class="card-body p-4 p-md-5">
                <h1 class="form-title mb-4">Registro de Biblioteca</h1>

                <form action="objects/objetoBiblioteca.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="txt_Isbn">ISBN:</label>
                        <input class="form-control" type="text" id="txt_Isbn" name="txt_Isbn" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="txt_Titulo">Titulo:</label>
                        <input class="form-control" type="text" id="txt_Titulo" name="txt_Titulo" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="txt_Autor">Autor:</label>
                        <input class="form-control" type="text" id="txt_Autor" name="txt_Autor" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label" for="num_AnoPublicacion">Año de publicacion:</label>
                        <input class="form-control" type="date" id="num_AnioPublicacion" name="num_AnoPublicacion" min="0" step="1" required>
                    </div>

                    <button class="btn btn-theme" type="submit" name="btn_Registrar">Registrar</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
