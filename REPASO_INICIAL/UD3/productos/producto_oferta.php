<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombreProducto = "PC Gaming Modelo X";
    $precioBase = 800.50;
    $stock = 8;
    $enOferta = true;

    echo "<h1>$nombreProducto</h1>";
    echo 'Precio base: '.$precioBase.' €<br>';
    echo "Precio base: ".$precioBase." €<br>";

    $precioFinal;
    if ($enOferta == true) {
        $precioFinal = $precioBase * 0.9;
        echo "¡EN OFERTA! Precio final: $precioFinal €<br>";
    } else {
        $precioFinal = $precioBase;
        echo "Precio: $precioFinal €";
    }

    if ($stock == 0) {
        echo "<p>Producto Agotado</p>";
    } elseif ($stock > 0 && $stock < 10) {
        echo "<p>¡Últimas unidades!</p>";
    } else {
        echo "<p>En stock</p>";
    }

    echo "<label>Cantidad: </label>";
    echo "<select name='cantidad'>";
    $i = 1;
    while ($i <= $stock) {
        echo "<option value= '$i'>$i</option>";
        $i++;
    }
    echo "</select>";
    ?>
</body>
</html>