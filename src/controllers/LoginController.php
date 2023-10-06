<?php
// Include the HomeModel class
require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../models/AuthModel.php';
session_start();

class LoginController {

  public function index($msgLogin) {
    include __DIR__ . '/../views/header.php';
    include __DIR__ . '/../views/login.php';
    include __DIR__ . '/../views/footer.php';
  }

  public function login($username, $password) {

    $authModel =  new AuthModel();
    $auth = $authModel->authenticate($username,$password);

    if (!$auth) {
        $msgError= '<div class="alert alert-danger" role="alert"> Tu usuario o contraseña incorrectos! </div>';
        $this->index($msgError);
    }else{
      $_SESSION['username'] = $username;
      header('Location: /terra-php/public/index.php'); 

    }

  }
  public function showError($message) {
      require_once __DIR__ . '/../views/error.php';
  } 
}

?>
