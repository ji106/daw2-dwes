<?php
class JugadorModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listarJugadores() {
        $stmt = $this->pdo->prepare("SELECT * FROM plantilla");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function anadirJugador($nombre, $dorsal, $posicion, $foto) {
        $stmt = $this->pdo->prepare("INSERT INTO plantilla (nombre, dorsal, posicion, foto) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nombre, $dorsal, $posicion, $foto]);
    }
}
?>