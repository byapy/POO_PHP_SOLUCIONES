<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vehiculo</title>
</head>
<body>
    <h1>Registro de Vehiculo</h1>

    <form action="objects/objetoVehiculos.php" method="post">
        <div>
            <label for="txt_Placa">Placa:</label>
            <input type="text" id="txt_Placa" name="txt_Placa" required>
        </div>

        <div>
            <label for="txt_Marca">Marca:</label>
            <input type="text" id="txt_Marca" name="txt_Marca" required>
        </div>

        <div>
            <label for="num_Modelo">Modelo:</label>
            <input type="number" id="num_Modelo" name="num_Modelo" min="1900" step="1" required>
        </div>

        <div>
            <label for="num_Precio">Precio:</label>
            <input type="number" id="num_Precio" name="num_Precio" min="0" step="0.01" required>
        </div>

        <button type="submit" name="btn_Registrar">Registrar</button>
    </form>
</body>
</html>
