<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
include 'menu.php';
?>

<h1>Nuestros Servicios</h1>
<p>Estos son los servicios exclusivos para usuarios registrados:</p>

<ul>
    <li>
        <h3>Desarrollo Fronted</h3>
        <p>Creación de interfaces web modernas y responsivas utilizando HTML, CSS y JavaScript, atendiendo a la experiencia de usuario y accesibilidad.</p>
    </li>
    <li>
        <h3>Desarrollo Backend</h3>
        <p>Desarrollo de aplicaciones webs dinámicas con PHP, gestión de sesiones, autenticación y conexión segura a base de datos MySQL.</p>
    </li>
    <li>
        <h3>Gestión y diseño de base de datos</h3>
        <p>Diseño, creación y optimización de base de datos relacionales, consultas SQL y manejo de datos para aplicaciones web.</p>
    </li>
    <li>
        <h3>Control de versiones y buenas prácticas</h3>
        <p>Uso de herramientas como Git para el control de versiones y seguimiento de proyectos.</p>
    </li>
</ul>

</div>
</body>
</html>