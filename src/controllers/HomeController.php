<?php

require_once __DIR__ . '/../models/HomeModel.php';

class HomeController {
  
  public function index() {
    $model = new HomeModel();
    $data = $model->getData();
    include __DIR__ . '/../views/home.php';
  }
  
}

?>