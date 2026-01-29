<?php
require __DIR__ . '/config/Database.php';
require __DIR__ . '/controllers/JugadorController.php';

$controller = new JugadorController();

$accion = $_GET['accion'] ?? 'listar';

if ($accion === 'anadir') {
    $controller->anadir();
} else {
    $controller->listar();
}
?>