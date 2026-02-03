<?php
require_once __DIR__ . '/../models/PiezaModel.php';

class PiezaController {
    private $model; // Instancia del modelo

    // El constructor recibe la conexión PDO desde index.php
    public function __construct($conexion) {
        $this->model = new PiezaModel($conexion);
    }

    // Listar todas las piezas
    public function listar() {
        // Datos del modelo
        $piezas = $this->model->listarPiezas();

        // Cargamos la vista
        include __DIR__ . '/../views/listarPiezas.php';
    }

    // Añadir una pieza nueva
    public function anadir() {
        // Si el usuario envía el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recogemos los datos enviados
            $nombre = $_POST['nombre'];
            $referencia = $_POST['referencia'];
            $stock = $_POST['stock'];

            // Llamamos al modelo para guardar la pieza
            $this->model->anadirPieza($nombre, $referencia, $stock);

            // Redirigimos
            header("Location: index.php?seccion=piezas&accion=listar");
            exit;
        }

        // Si no envía el formulario
        include __DIR__ . '/../views/anadirPieza.php';
    }
}
?>