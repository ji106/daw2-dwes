<?php
session_start();
session_unset();
session_destroy();

if(isset($_COOKIE['lastVisit'])) {
    setcookie('lastVisit', '', time() - 3600, "/");
}

header("Location: login.php");
exit();
?>