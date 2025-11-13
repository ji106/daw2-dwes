<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Declara una variable de tipo booleano y usa echo para mostrar “Verdadero” o “Falso” 
según su valor.</h1>";

    $es_verde = true;

    if ($es_verde == true) {
        echo "Verdadero";
    } else {
        echo "Falso";
    }
    ?>
</body>
</html>