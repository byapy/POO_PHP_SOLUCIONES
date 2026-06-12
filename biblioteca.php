<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Biblioteca</title>
</head>
<body>
    <h1>Registro de Biblioteca</h1>

    <form action="objects/objetoBiblioteca.php" method="post">
        <div>
            <label for="txt_Isbn">ISBN:</label>
            <input type="text" id="txt_Isbn" name="txt_Isbn" required>
        </div>

        <div>
            <label for="txt_Titulo">Titulo:</label>
            <input type="text" id="txt_Titulo" name="txt_Titulo" required>
        </div>

        <div>
            <label for="txt_Autor">Autor:</label>
            <input type="text" id="txt_Autor" name="txt_Autor" required>
        </div>

        <div>
            <label for="num_AnoPublicacion">Año de publicacion:</label>
            <input type="date" id="num_AnioPublicacion" name="num_AnoPublicacion" min="0" step="1" required>
        </div>

        <button type="submit" name="btn_Registrar">Registrar</button>
    </form>
</body>
</html>
