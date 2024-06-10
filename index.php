<?php
// index.php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: src/view/login.php");
    exit();
}

echo "¡Bienvenido, " . $_SESSION['user']['username'] . "!";
?>
