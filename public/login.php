<?php
    require_once '../src/controllers/LoginController.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SERVER['REQUEST_URI'] === '/terra-php/public/login.php') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $controller = new LoginController();
    $controller->login($username, $password);

} elseif ($_SERVER['REQUEST_URI'] === '/terra-php/public/login.php') {
    $controller = new LoginController();
    $controller->index('');

}elseif (isset($_GET['action'])){
    $action = $_GET['action'];
    
    $controller = new AuthModel();
    $controller->logout();
    
} else {
    $controller = new LoginController();
    $controller->showError('error al hacer post');
}