<?php

require_once '../src/controllers/LoginController.php';
require_once '../src/controllers/HomeController.php';


if (isset($_SESSION['username'] )) {
    $controller = new HomeController();
    $controller->index();

} else {
    header('Location: /terra-php/public/login.php'); 
    exit();
}