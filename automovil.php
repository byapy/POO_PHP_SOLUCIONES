<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Automovil</title>
</head>
<body>
    <h1>Registro de Automovil</h1>

    <form action="automovil.php" method="post">
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

        <div>
            <label for="sel_TipoVehiculo">Tipo de vehiculo:</label>
            <select id="sel_TipoVehiculo" name="sel_TipoVehiculo" required>
                <option value="">Seleccione</option>
                <option value="Sedan">Sedan</option>
                <option value="Hatchback">Hatchback</option>
                <option value="Pickup">Pickup</option>
                <option value="SUV">SUV</option>
                <option value="Coupe">Coupe</option>
            </select>
        </div>

        <div>
            <label for="num_NumeroPuertas">Numero de puertas:</label>
            <input type="number" id="num_NumeroPuertas" name="num_NumeroPuertas" min="1" step="1" required>
        </div>

        <div>
            <label for="sel_TipoCombustible">Tipo de combustible:</label>
            <select id="sel_TipoCombustible" name="sel_TipoCombustible" required>
                <option value="">Seleccione</option>
                <option value="Gasolina">Gasolina</option>
                <option value="Diesel">Diesel</option>
                <option value="Electrico">Electrico</option>
                <option value="Hibrido">Hibrido</option>
            </select>
        </div>

        <button type="submit" name="btn_Registrar">Registrar</button>
    </form>
</body>
</html>
