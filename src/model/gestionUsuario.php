<?php
require 'C:\Users\PC\Desktop\proyecto2\config.php';
require '../model/user.php';

$userModel = new User();
$usuarios = $userModel->getAllUsers();

header('Content-Type: application/json');
echo json_encode($usuarios);
?>