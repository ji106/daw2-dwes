<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Servidor - Jiaxin Ji</title>
</head>
<body>
    <?php
    $nombre_alumno = "Jiaxin Ji";
    $modulo = "Desarrollo Web en Entorno Servidor";
    $nota_media = 7.5;
    $es_matriculado = true;

    echo "<h1>$nombre_alumno</h1>";
    echo "<h2>$modulo</h2>";
    echo "<p>Mi nota media actual es: $nota_media</p>";
    echo '<p>Mi nota media actual es: $nota_media</p>';

    if ($nota_media >= 9) {
        echo "<p>Sobresaliente</p>";
    } elseif ($nota_media >= 7 && $nota_media < 9) {
        echo "<p>Notable</p>";
    } elseif ($nota_media >= 5 && $nota_media < 7) {
        echo "<p>Aprobado</p>";
    } else {
        echo "<p>Suspenso</p>";
    }

    if ($es_matriculado == true) {
        echo "<p>Estado: Alumno matriculado</p>";
    }

    echo "<table border='1'>";
    $i = 1;
    while ($i <= 5) {
        echo "<tr>";
        echo "<td>Fila número:</td>";
        echo "<td>$i</td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";
    ?>
</body>
</html>