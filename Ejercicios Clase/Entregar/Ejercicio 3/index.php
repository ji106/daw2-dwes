<?php
include "Tarea.php";

session_start();

if (!isset($_SESSION['tareas'])) {
    $_SESSION['tareas'] = [];
}

if (isset($_POST['descripcion'])) {
    $descripcion = $_POST['descripcion'];
    $prioridad = $_POST['prioridad'];
    $_SESSION['tareas'][] = new Tarea($descripcion, $prioridad);
} else if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    unset($_SESSION['tareas'][$id]);
}

$tareas = $_SESSION['tareas'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Tareas (Lista de "To-Do") - El Cerebro</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 1rem;
            border: 1px solid rgb(206, 206, 206);

            th, td {
                padding: 0.5rem 0;
                padding-left: 0.5rem;
            }
            th {
                background-color:rgb(233, 233, 233);
            }
            th#id {
                padding-right: 3rem;
            }
            th#desc {
                padding-right: 12rem;
            }
            th#prioridad {
                padding-right: 7rem;
            }
            th#accion {
                padding-right: 7rem;
            }
        
        }
    </style>
</head>
<body>
    <h1>Lista de Tareas (CRUD Array)</h1>
    <form method="post">
        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion">
        <label for="prioridad">Prioridad:</label>
        <select name="prioridad" id="prioridad">
            <option value="Alta">Alta</option>
            <option value="Baja">Baja</option>
        </select>
        <button type="submit">Añadir Tarea</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th id="id">ID</th>
                <th id="desc">Descripción</th>
                <th id="prioridad">Prioridad</th>
                <th id="accion">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($tareas as $id => $tarea) {
                echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>" . $tarea->getDescripcion() . "</td>";
                echo "<td>" . $tarea->getPrioridad() . "</td>";
                echo "<td><a href='?eliminar=$id'>Eliminar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>