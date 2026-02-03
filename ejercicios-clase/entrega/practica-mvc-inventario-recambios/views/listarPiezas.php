<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar piezas</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="fase">

        <div>
            <a href="index.php?seccion=coches&accion=listar">Coches</a> |
            <a href="index.php?seccion=piezas&accion=listar">Piezas</a>
        </div>

        <h2>Almacén de Recambios</h2>

        <!-- Enlace para ir al formulario de añadir -->
        <a href="index.php?seccion=piezas&accion=anadir">Añadir pieza</a>

        <table>
            <tr>
                <th>Nombre</th>
                <th>Referencia</th>
                <th>Stock</th>
            </tr>

            <!-- : es lo mismo que {} -->
            <?php foreach ($piezas as $p): ?>

                <?php $critico = ($p['stock'] < 3); ?>

                <tr>
                    <!-- = es lo mismo que php echo -->
                    <td><?= htmlspecialchars($p['nombre']) ?></td>
                    <td><?= htmlspecialchars($p['referencia']) ?></td>
                    <td>
                        <?php if ($critico): ?>
                            <!-- Stock crítico -->
                            <span style="color:red; font-weight:bold;"><?= $p['stock'] ?> ⚠️</span>
                            <?php else: ?>
                                <?= $p['stock'] ?>
                        <?php endif; ?>
                    </td>
                </tr>
                
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>