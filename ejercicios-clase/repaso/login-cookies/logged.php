<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['username'];

$lastVisit = isset($_COOKIE['lastVisit']) ? $_COOKIE['lastVisit'] : "Primera vez que visita";

$date = date("d/m/Y");
$time = date("H:i");

setcookie('lastVisit', "$date a las $time", time() + 3600 * 24 * 30);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged</title>
</head>
<body>
    <div class="welcome-box">
        <p>Hola <strong><?php echo $name; ?></strong>,</p>
        <p>su última visita fue el</p>
        <p><?php echo htmlspecialchars($lastVisit); ?></p>
    </div>
    <form action="#" method="get">
        <button type="submit" name="action" value="login">Acceder</button>
    </form>
    <form action="logout.php" method="post">
        <button type="submit" name="action" value="logout">Salir</button>
    </form>
    
</body>
</html>