<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Declara una variable con un número decimal y conviértela a entero usando casting.
</h1>";

    $num = 1.20;

    $num_decimal = (int) $num;

    echo $num;
    ?>
</body>
</html>