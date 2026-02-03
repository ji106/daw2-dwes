<?php
class dbTienda {
    // Atributos necesarios para la conexión
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "tienda";

    // Conector
    private $conexion;

    // Propiedades para controlar errores
    private $error = false;

    function __construct() {
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
        if ($this->conexion->connect_errno) {
            $this->error = true;
        }
    }

    public function listarProductos() {
        if ($this->error) return null;
        $sql = "SELECT * FROM productos";
        $resultado = $this->conexion->query($sql); // Ejecutamos la consulta
        $productos[];
        while ($fila = $resultado->fetch_assoc()) {
            $productos[] = $fila;
        }
        return $productos;
    }
    
    // Function inserción tabla productos
    public function insertarProducto($nombre, $precio, $stock) {
        if ($this->error == false) return false;
        $sql = "INSERT INTO productos (id, nombre, precio, stock) VALUES (NULL, '".$nombre"', '"$precio"', '"$stock"')";
        return $this->conexion->query($sql);
    }

    public function burcarPorId ($id) {
        if ($this->error) reutrn false;
        $sql = "SELECT * FROM productos WHERE id = $id";
        $resultado = $this->conexion->query($sql);
        return $resultado->fetch_assoc();
    }

    public function actualizar ($id, $nombre, $precio, $stock) {
        if ($this-error) return false;
        $sql = "UPDATE productos SET nombre=$nombre, precio=$precio, stock=$stock WHERE id=$id";
        $resultado = $this->conexion->query($sql);
    }

    public function borrar($id) {
        if ($this->error) return false;
        $sql = "DELETE FROM productos WHERE id=$id";
        return $this->conexion->query($sql);
    }
}
?>