<?php
require_once '../src/config.php';
require_once '../src/db.php';
require_once '../src/models/HomeModel.php';
require_once '../src/controllers/HomeController.php';

$controller = new HomeController();
$controller->index();