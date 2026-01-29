<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Jugador</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="fase">
        <h2>Añadir Nuevo Jugador</h2>
        <form action="index.php?accion=anadir" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="dorsal">Dorsal</label>
            <input type="number" id="dorsal" name="dorsal" required>

            <label for="posicion">Posición:</label>
            <select name="posicion" id="posicion" required>
                <option value="Portero">Portero</option>
                <option value="Defensa">Defensa</option>
                <option value="Centrocampista">Centrocampista</option>
                <option value="Delantero">Delantero</option>
            </select>

            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto">

            <button type="submit">Agregar Jugador</button>
        </form>
    </div>
</body>
</html>