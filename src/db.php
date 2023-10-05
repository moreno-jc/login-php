<?php
class DB {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "terra";

    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function query($sql) {
        $result = mysqli_query($this->conn, $sql);

        if (!$result) {
            die("Query failed: " . mysqli_error($this->conn));
        }

        return $result;
    }

    public function close() {
        mysqli_close($this->conn);
    }
}