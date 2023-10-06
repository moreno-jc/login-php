<?php

require_once(__DIR__ . '/../db.php');

class AuthModel {
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function authenticate($username, $password) {
        $query = "SELECT * FROM agentes WHERE correo = '$username'";
        $result = $this->db->query($query);


        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if($password === $user['pass']){
                return true;
            }else{
                return false;
            }
            
        } else {
            return false;
        }
    }
    public function logout(){
            session_start();
            session_unset();
            session_destroy();
            header('Location: /terra-php/public/login.php');
            exit();
    }
   

    
}

?>

