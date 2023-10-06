<?php
require_once(__DIR__ . '/../db.php');

class UserModel {
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function getUserByUsername($username) {
        $query = "SELECT * FROM agentes WHERE correo = '$username'";
        $result = $this->db->query($query);
        
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            return $user;
        } else {
            return null;
        }
    }

 }

?>