<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir pieza</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="fase">

        <div>
            <a href="index.php?seccion=coches&accion=listar">Coches</a> |
            <a href="index.php?seccion=piezas&accion=listar">Piezas</a>
        </div>

        <h2>Añadir nueva pieza</h2>

        <form action="index.php?seccion=piezas&accion=anadir" method="POST">
            <label>Nombre de la pieza</label>
            <input type="text" name="nombre" required>

            <label>Referencias</label>
            <input type="text" name="referencia" required>

            <label>Stock inicial</label>
            <input type="number" name="stock" min=0 required>

            <button type="submit">Guardar pieza</button>
        </form>
    </div>
</body>
</html>