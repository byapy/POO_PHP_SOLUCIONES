<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Producto</title>
</head>
<body>
    <h1>Registro de Producto</h1>

    <form action="objects/objetoProductos.php" method="post">
        <div>
            <label for="txt_Codigo">Codigo:</label>
            <input type="text" id="txt_Codigo" name="txt_Codigo" required>
        </div>

        <div>
            <label for="txt_Nombre">Nombre:</label>
            <input type="text" id="txt_Nombre" name="txt_Nombre" required>
        </div>

        <div>
            <label for="num_Precio">Precio:</label>
            <input type="number" id="num_Precio" name="num_Precio" min="0" step="0.01" required>
        </div>

        <div>
            <label for="num_Existencias">Existencias:</label>
            <input type="number" id="num_Existencias" name="num_Existencias" min="0" step="1" required>
        </div>

        <button type="submit" name="btn_Registrar">Registrar</button>
        <button type="submit" name="btn_Revisar">Revisar</button>
    </form>
</body>
</html>
