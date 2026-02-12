<?php
session_start();

if ($_POST) {
    $user = "Admin";
    $pass = "1234";
    $form_user = $_POST['user'];
    $form_pass = $_POST['password'];

    if ($user === $form_user && $pass === $form_pass) {
        $_SESSION['username'] = $user;

        if (isset($_POST['remindme'])) {
            setcookie("user", $user, time() + (86400 * 30), "/");
        }

        header("Location: logged.php");
        exit();
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>

    </style>
</head>
<body>
    <form method="post">
        <label for="user">Usuario: </label>
        <input type="text" name="user" id="user" required>
        <label for="password">Contraseña: </label>
        <input type="password" name="password" id="password" required>
        <label for="remindme">Recordarme: </label>
        <input type="checkbox" name="remindme">
        <button type="submit">Acceder</button>
    </form>
    <?php if (isset($error)) echo "<p class='error'>$error</p>" ?>
</body>
</html>