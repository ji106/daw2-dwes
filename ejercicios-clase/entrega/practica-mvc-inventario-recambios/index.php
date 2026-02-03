<?php
// Cargar clase Database (Singleton PDO)
require_once __DIR__ . '/config/Database.php';

// Cargar controladores
require_once __DIR__ . '/controllers/PiezaController.php';
require_once __DIR__ . '/controllers/CocheController.php';

// Obtener conexión a PDO
$conexion = Database::getInstance()->getConnection();

// Detectar sección (piezas o coches)
$seccion = $_GET['seccion'] ?? 'coches';

// Detectar accion (listar)
$accion = $_GET['accion'] ?? 'listar';

if ($seccion == 'piezas') {

    // Controlador de piezas
    $controller = new PiezaController($conexion);

    // Acciones disponibles
    switch($accion) {
        case 'anadir':
            $controller->anadir();
            break;

        default:
            $controller->listar();
            break;
    }
} else {
    
    // Controlador de coches
    $controller = new CocheController($conexion);

    // Acciones disponibles
    switch($accion) {
        case 'vender':
            $controller->vender();
            break;

        case 'ficha':
            $controller->ficha();
            break;

        default:
            $controller->listar();
            break;
    }
}
?>