<?php

class RutasController {

  public function index() {
      
    session_start();

    if (!isset($_SESSION['user_id'])) {
        
        header('Location: /login.php');
        exit();
    }

    include __DIR__ . '/../views/header.php';
    include __DIR__ . '/../views/rutas.php';
    include __DIR__ . '/../views/footer.php';

  }
  
}

?>
