<?php
class CocheModel {
    private $db; // Conexión PDO

    public function __construct($conexion) {
        $this->db = $conexion;
    }

    // Obtener todos los coches
    public function listarCoches() {
        $sql = "SELECT * FROM coches ORDER BY id ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Marcar coche como vendido
    public function marcarVendido($id) {
        $sql = "UPDATE coches SET vendido = 1 WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
    }

    // Obtener un coche por su ID
    public function obtenerCoche($id) {
        $sql = "SELECT * FROM coches WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>