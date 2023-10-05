<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once '../src/config.php';
        require_once '../src/controllers/LoginController.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $controller = new LoginController();
    $controller->login($username, $password);

} else {
    $controller = new LoginController();
    $controller->showError();
}

?>