<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Usa operadores lógicos (&&, ||) para comprobar si una persona tiene entre 18 y 65 años 
y puede trabajar.</h1>";

    $edad = 34;
    if ($edad >= 18 && $edad <= 65) {
        echo "Puede trabajar";
    } else {
        echo "No puede trabajar";
    }
    ?>
</body>
</html>