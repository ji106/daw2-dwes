<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Declara dos números y muestra si el primero es mayor, menor o igual al segundo.
</h1>";

    $num1 = 12;
    $num2 = 4;

    if ($num1 > $num2) {
        echo "$num1 es mayor que $num2";
    } elseif ($num1 < $num2) {
        echo "$num1 es menor que $num2";
    } else {
        echo "$num1 es igual que $num2";
    }
    ?>
</body>
</html>