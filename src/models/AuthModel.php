<?php

require_once(__DIR__ . '/../db.php');

class AuthModel {
    private $db;

    public function __construct($db) {
        $this->db = new DB();
    }

    public function authenticate($username, $password) {

        $stmt = $this->db->prepare("SELECT * FROM terra.agentes WHERE correo = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['pass'])) {
            return $user;
        } else {
            return false;
        }
    }
}

?>

