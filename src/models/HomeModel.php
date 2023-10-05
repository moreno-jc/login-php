<?php

require_once(__DIR__ . '/../db.php');

class HomeModel {
  private $db;

  public function __construct() {
    $this->db = new DB();
  }

  public function getDataProduct() {
    $query = "SELECT * FROM productos";
    $result = $this->db->query($query);
    $infoProducts = array();
    foreach ($result as $row) {
       $infoProducts[] = array(
        'codigo' => $row['id_product'],
        'cant' => $row['codigo']
    );   
  }
  $Products=json_encode($infoProducts);
  $this->db->close();
    return $Products;
  }
}

?>