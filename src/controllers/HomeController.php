<?php
// Include the HomeModel class
require_once('../src/models/HomeModel.php');
require_once '../src/controllers/LoginController.php';


class HomeController {

  public function index() {
    session_start();

    $homeModel = new HomeModel ();
    $data = $homeModel->getData();

    include '../src/views/header.php';
    include '../src/views/home.php';
    include '../src/views/footer.php';

  }
  
}

?>
