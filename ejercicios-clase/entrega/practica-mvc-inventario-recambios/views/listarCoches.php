<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar coches</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="fase">

        <div>
            <a href="index.php?seccion=coches&accion=listar">Coches</a> |
            <a href="index.php?seccion=piezas&accion=listar">Piezas</a>
        </div>

        <h2>Listado de Coches</h2>

        <table>
            <tr>
                <th>Matrícula</th>
                <th>Modelo</th>
                <th>Propietario</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>

            <?php foreach ($coches as $c): ?>
            <tr>
                <td><?= htmlspecialchars($c['matricula']) ?></td>
                <td><?= htmlspecialchars($c['modelo']) ?></td>
                <td><?= htmlspecialchars($c['propietario']) ?></td>
                <td><?= $c['vendido'] ? "Vendido" : "Disponible" ?></td>
                <td>
                    <!-- Enlace a la ficha -->
                    <a href="index.php?seccion=coches&accion=ficha&id=<?= $c['id'] ?>">Ver ficha</a>
                    
                    <!-- Mostrar que está vendido si no lo está -->
                    <?php if (!$c['vendido']): ?>
                        <a href="index.php?seccion=coches&accion=vender&id=<?= $c['id'] ?>">Marcar vendido</a>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>