<?php
session_start();
// 1. SEGURIDAD
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

require 'db.php';
include 'menu.php';

// 2. OBTENER DATOS DE LA BBDD
// Vamos a contar cuántas veces aparece cada estado
$usuario = $_SESSION['usuario'];
$sql = "SELECT id FROM usuarios WHERE usuario = '$usuario'";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
$usuario_id = $fila['id'];

$sql = "SELECT horas FROM asistencia WHERE usuario_id = $usuario_id";
$resultado = $conexion->query($sql);
if ($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $horas = (int)$fila['horas'];
} else {
    $horas = 0;
}

$max_horas = 39;
$horas_restantes = $max_horas - $horas;
if ($horas_restantes < 0) $horas_restantes = 0;

// Preparamos arrays para javascript
$etiquetas = ['Horas asistidas', 'Horas restantes']; // Guardará: "Presente", "Falta"...
$datos = [$horas, $horas_restantes];     // Guardará: 7, 2, 1...
?>

<h1>Control de Asistencia</h1>
<p>Aquí puedes ver visualmente tu rendimiento en el curso.</p>

<div style="display: flex; justify-content: space-around; flex-wrap: wrap;">
    
    <div style="width: 400px; height: 400px;">
        <canvas id="miGrafica"></canvas>
    </div>

    <div style="padding: 20px;">
        <h3>Resumen Numérico:</h3>
        <ul>
            <li><strong>Horas asistidas: </strong><?php echo $horas ?> horas</li>
            <li><strong>Horas restantes: </strong><?php echo $horas_restantes ?> horas</li>
            <li><strong>Total horas: </strong><?php echo $max_horas ?> horas</li>
        </ul>
    </div>
</div>

</div> <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Recogemos el Canvas del HTML
    const ctx = document.getElementById('miGrafica').getContext('2d');

    // Pasamos los datos de PHP a Javascript usando json_encode
    const etiquetasDesdePHP = <?php echo json_encode($etiquetas); ?>;
    const datosDesdePHP = <?php echo json_encode($datos); ?>;

    // Creamos el gráfico
    new Chart(ctx, {
        type: 'doughnut', // TIPO DE GRÁFICO: 'bar' (barras), 'pie' (tarta), 'doughnut' (donu), 'line' (linea)
        data: {
            labels: etiquetasDesdePHP,
            datasets: [{
                label: 'Horas de asistencia',
                data: datosDesdePHP,
                backgroundColor: [
                    'rgba(75, 192, 192, 0.6)', // Verde para el primero (Presente)
                    'rgba(255, 99, 132, 0.6)' // Rojo para el segundo (Falta)
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
                title: {
                    display: true,
                    text: 'Distribución de Asistencias'
                }
            }
        }
    });
</script>

</body>
</html>