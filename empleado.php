<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Empleado</title>
</head>
<body>
    <h1>Registro de Empleado</h1>

    <form action="objects/objetoEmpleados.php" method="post">
        <div>
            <label for="txt_Nombre">Nombre:</label>
            <input type="text" id="txt_Nombre" name="txt_Nombre" required>
        </div>

        <div>
            <label for="txt_Puesto">Puesto:</label>
            <input type="text" id="txt_Puesto" name="txt_Puesto" required>
        </div>

        <div>
            <label for="num_HorasTrabajadas">Horas trabajadas:</label>
            <input type="number" id="num_HorasTrabajadas" name="num_HorasTrabajadas" min="0" step="0.01" required>
        </div>

        <div>
            <label for="num_PagoPorHora">Pago por hora:</label>
            <input type="number" id="num_PagoPorHora" name="num_PagoPorHora" min="0" step="0.01" required>
        </div>

        <button type="submit" name="btn_Registrar">Registrar</button>
    </form>
</body>
</html>
