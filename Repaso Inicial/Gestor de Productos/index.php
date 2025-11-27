<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "Producto.php";

        $miProducto = new Producto("Teclado Gamer", 50);
        $miProducto->mostrarInfo();
        $miProducto->setPrecio(45);
        echo "Nombre del producto: " . $miProducto->getNombre() . "<br>";
    ?>
</body>
</html>