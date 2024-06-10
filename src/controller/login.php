<?php
// controllers/LoginController.php
session_start();
//require 'config.php';
include('config.php');
require '../model/user.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_or_email = $_POST['username_or_email'];
    $password = md5($_POST['password']);
    
    $user = new User();
    $result = $user->login($username_or_email, $password);

    if ($result) {
        $_SESSION['user'] = $result;
        header("Location: ../view/head.html");
    } else {
        header("Location: ../view/login.html?error=Credenciales inválidas");
    }
}
?>
