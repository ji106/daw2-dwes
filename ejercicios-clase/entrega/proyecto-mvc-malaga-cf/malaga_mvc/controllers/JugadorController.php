<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/JugadorModel.php';

class JugadorController {
    private $model;

    public function __construct() {
        $this->model = new JugadorModel(Database::getInstance()->getConnection());
    }

    public function listar() {
        $jugadores = $this->model->listarJugadores();
        include __DIR__ . '/../views/listarJugadores.php';
    }

    public function anadir() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $dorsal = $_POST['dorsal'];
            $posicion = $_POST['posicion'];
            $foto = $_FILES['foto']['name'] ?: 'sin_foto.png';

            if ($_FILES['foto']['error'] == 0) {
                move_uploaded_file($_FILES['foto']['tmp_name'], "../public/imagenes/$foto");
            }

            $this->model->anadirJugador($nombre, $dorsal, $posicion, $foto);
            header('Location: index.php');
        } else {
            include __DIR__ . '/../views/anadirJugador.php';
        }
    }
}
?>