<?php

require_once(__DIR__ . '/../db.php');

class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUserByUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM terra.agentes WHERE correo = ?");
        $stmt->execute([$username]);
        return $stmt->fetch();
    }
}

?>