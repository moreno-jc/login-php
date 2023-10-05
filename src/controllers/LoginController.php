<?php
// Include the HomeModel class
require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../models/AuthModel.php';
require_once __DIR__ . '/../db.php';


class LoginController {
  private $db;

    public function __construct($db) {
        $this->db = $db;
    }

  public function index() {
    include __DIR__ . '/../views/header.php';
    include __DIR__ . '/../views/login.php';
    include __DIR__ . '/../views/footer.php';
  }

  public function login($username, $password) {

    $userModel =  new UserModel($this->db);
    $user = $userModel->getUserByUsername($username);

    if (!$user) {
        $this->showError('Invalid username or password');
        return;
    }

    $authModel = new AuthModel();
    $isAuthenticated = $authModel->authenticate($user, $password);

    if (!$isAuthenticated) {
        $this->showError('Invalid username or password');
        return;
    }

    session_start();
    $_SESSION['user_id'] = $user['id'];
    header('Location: /home.php');
  }

  private function showError($message) {
      require_once _DIR_ . '/../views/error.php';
  } 
}

?>
