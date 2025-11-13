<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Crea un programa que determine si un número es par o impar utilizando el operador 
módulo %.</h1>";

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "$i es par<br>";
        } else {
            echo "$i es impar<br>";
        }
    }
    ?>
</body>
</html>