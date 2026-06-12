<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Motocicleta</title>
</head>
<body>
    <h1>Registro de Motocicleta</h1>

    <form action="motocicleta.php" method="post">
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
            <label for="num_Cilindrada">Cilindrada:</label>
            <input type="number" id="num_Cilindrada" name="num_Cilindrada" min="0" step="1" required>
        </div>

        <div>
            <label for="sel_TipoMoto">Tipo de moto:</label>
            <select id="sel_TipoMoto" name="sel_TipoMoto" required>
                <option value="">Seleccione</option>
                <option value="Scooter">Scooter</option>
                <option value="Naked">Naked</option>
                <option value="Deportiva">Deportiva</option>
                <option value="Cruiser">Cruiser</option>
                <option value="Enduro">Enduro</option>
            </select>
        </div>

        <button type="submit" name="btn_Registrar">Registrar</button>
    </form>
</body>
</html>
