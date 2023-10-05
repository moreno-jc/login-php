<?php

require_once __DIR__ . '/../models/AuthModel.php';
require_once __DIR__ . '/../models/UserModel.php';

class AuthController {
    public function login() {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $authModel = new AuthModel();
            $userModel = new UserModel();

            $user = $authModel->authenticate($username, $password);

            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                header('Location: /test-php/public/index.php');
                exit();
            } else {
                $error = 'Invalid username or password.';
            }
        }

        require_once _DIR_ . '/../views/login.php';
    }
}

?>