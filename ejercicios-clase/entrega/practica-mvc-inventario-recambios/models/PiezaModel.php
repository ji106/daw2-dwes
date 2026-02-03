<?php
class PiezaModel {
    private $db; // Conexión PDO

    // El constructor recibe la conexión desde Database::getInstance()
    public function __construct($conexion) {
        $this->db = $conexion;
    }

    // Obtener todas las piezas del almacén
    public function listarPiezas() {
        $sql = "SELECT * FROM piezas ORDER BY nombre ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Añadir una pieza nueva al almacén
    public function anadirPieza($nombre, $referencia, $stock) {
        $sql = "INSERT INTO piezas (nombre, referencia, stock) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$nombre, $referencia, $stock]);
    }

    // Actualizar stock
    public function actualizarStock($id, $stock) {
        $sql = "UPDATE piezas SET stock = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$stock, $id]);
    }
}
?>