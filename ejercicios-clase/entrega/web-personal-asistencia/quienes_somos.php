<?php
session_start();
// SEGURIDAD: Si no hay usuario, fuera.
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
include 'menu.php';
?>

<h1>Quiénes Somos</h1>
<p>Bienvenidos a nuestra sección corporativa.</p>

<div style="display: flex; gap: 20px; align-items: center;">
    <div style="flex: 1;">
        <img src="https://img.static-rmg.be/a/view/q75/w2400/h1256/f29.86,38.44/4754194/teletubbies-jpg.jpg" alt="Oficina" style="width: 100%; border-radius: 5px;">
    </div>
    <div style="flex: 2;">
        <h3>Nuestra Historia</h3>
        <p>Hola, me llamo Jiaxin Ji y vivo en Málaga, España. Mi interés por la informática nació gracias a la motivación de mi hermano, quien me recomendó este módulo de desarrollo Web en Entorno Servidor para comenzar a explorar este apasionante mundo.</p>
        <p>Me gusta pasear, disfrutar de la naturaleza y pasar el tiempo con mis mascotas y familia. También, me gusta resolver problemas, ayudar y fomentar el bienestar de todos.</p>
        <p>Soy buena en matemáticas, empática, persistente y me gusta razonar. Creo que la tecnología, especialmente la programación y la IA, pueden ayudar a unir al mundo y resolver problemas globales como la contaminación y el cuidado de los animales.</p>
    </div>
</div>

</div>
</body>
</html>