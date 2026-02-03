<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha coche</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="fase">

        <div>
            <a href="index.php?seccion=coches&accion=listar">Coches</a> |
            <a href="index.php?seccion=piezas&accion=listar">Piezas</a>
        </div>
        
        <h2>Ficha del Coche</h2>

        <?php if (!$coche): ?>
            <p class="error">Coche no encontrado.</p>
        <?php else: ?>
            <p><strong>Matrícula:</strong> <?= htmlspecialchars($coche['matricula']) ?></p>
            <p><strong>Modelo:</strong> <?= htmlspecialchars($coche['modelo']) ?></p>
            <p><strong>Propietario:</strong> <?= htmlspecialchars($coche['propietario']) ?></p>
            <p><strong>Estado:</strong> <?= $coche['vendido'] ? "Vendido" : "Disponible" ?></p>

            <a href="index.php?seccion=coches&accion=listar">Volver al listado</a>
        <?php endif ?>
    </div>
</body>
</html>