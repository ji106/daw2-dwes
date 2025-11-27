<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Tareas (Lista de "To-Do") - El Molde</title>
</head>
<body>
    <?php
        class Tarea {
            private $descripcion;
            private $prioridad;
            
            public function __construct($descripcion, $prioridad) {
                $this->descripcion = $descripcion;
                $this->prioridad = $prioridad;
            }

            public function getDescripcion() {
                return $this->descripcion;
            }


            public function setDescripcion($descripcion) {
                $this->descripcion = $descripcion;
            }

            public function getPrioridad() {
                return $this->prioridad;
            }

            public function setPrioridad() {
                $this->prioridad = $prioridad;
            }
        }
    ?>
    
</body>
</html>