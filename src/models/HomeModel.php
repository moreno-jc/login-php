<?php

require_once(__DIR__ . '/../db.php');

class HomeModel {
  private $db;

  public function __construct() {
    $this->db = new DB();
  }

  public function getData() {
    $query = "SELECT * FROM my_table";
    $result = $this->db->query($query);
    return $result;
  }
}

?>