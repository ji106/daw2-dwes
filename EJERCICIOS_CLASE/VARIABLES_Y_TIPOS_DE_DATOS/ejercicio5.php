<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Define una cadena de texto y muestra su longitud, su versión en mayúsculas y minúsculas.
</h1>";

    $cadena = "Hola mundo";

    echo "Longitud: " . strlen($cadena) . "<br>";
    echo "Mayúsculas: " . strtoupper($cadena) . "<br>";
    echo "Minúsculas: " . strtolower($cadena) . "<br>"
    ?>
</body>
</html>