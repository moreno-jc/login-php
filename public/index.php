<?php
require_once '../src/config.php';
require_once '../src/db.php';
require_once '../src/controllers/LoginController.php';

$controller = new LoginController();
$controller->index();