<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Jugadores</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="fase">
    <h2>Jugadores del Málaga CF</h2>
    <a href="index.php?accion=anadir" class="btn">Añadir jugador</a>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Dorsal</th>
                    <th>Posición</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jugadores as $jugador): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($jugador['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($jugador['dorsal']); ?></td>
                        <td><?php echo htmlspecialchars($jugador['posicion']); ?></td>
                        <td><img src="../public/imagenes/<?php echo htmlspecialchars($jugador['foto']); ?>" alt="Foto de <?php echo htmlspecialchars($jugador['nombre']); ?>"></td>
                    </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>