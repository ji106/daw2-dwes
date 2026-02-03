<?php
require_once __DIR__ . '/../models/CocheModel.php';

class CocheController {
    private $model;

    public function __construct($conexion) {
        $this->model = new CocheModel($conexion);
    }

    // Listar coches
    public function listar() {
        $coches = $this->model->listarCoches();
        include __DIR__ . '/../views/listarCoches.php';
    }

    // Marcar como vendido
    public function vender() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->model->marcarVendido($id);
        }

        // Volver al listado
        header("Location: index.php?seccion=coche&accion=listar");
        exit;
    }

    // Ficha individual del coche
    public function ficha() {
        if (!isset($_GET['id'])) {
            header("Location: index.php?seccion=coche&accion=listar");
            exit;
        }

        $id = $_GET['id'];
        $coche = $this->model->obtenerCoche($id);

        include __DIR__ . '/../views/fichaCoche.php';
    }
}
?>