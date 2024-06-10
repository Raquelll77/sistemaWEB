<?php
// models/User.php
require 'C:\Users\PC\Desktop\proyecto2\config.php';
//include('/config.php');

class User {
    private $db;

    public function __construct() {
        $this->db = connect();
    }

    public function login($username_or_email, $password) {
        $stmt = $this->db->prepare("SELECT * FROM USUARIOS WHERE (USUARIO = ? OR CORREO = ?) AND CONTRASEÑA = ?");
        $stmt->bind_param("sss", $username_or_email, $username_or_email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
    public function getAllUsers() {
        $stmt = $this->db->prepare("SELECT * FROM USUARIOS");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
