<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    <?php
        class Producto {
            private $nombre;
            private $precio;

            function __construct($nombre, $precio) {
                $this->nombre = $nombre;
                $this->precio = $precio;
            }

            public function mostrarInfo() {
                echo "El producto {$this->nombre} cuesta {$this->precio} euros.<br>";
            }

            public function getNombre() {
                return $this->nombre;
            }

            public function setPrecio($nuevoPrecio) {
                $this->precio = $nuevoPrecio;
            }

            public function getPrecio() {
                return $this->precio;
            }
        }
    ?>
</body>
</html>