<?php
if (isset($_COOKIE['user'])) {
    echo "Usuario guardado en cookie:" . htmlspecialchars($_COOKIE['user']);
} else {
    echo "No hay usuario guardado en cookie.";
}
?>