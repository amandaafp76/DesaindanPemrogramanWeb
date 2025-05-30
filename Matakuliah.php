<?php
class Dosen {
    private $host = "127.0.0.1";
    private $port = "3308";
    private $user = "root";
    private $pass = "";
    private $dbname = "modul11";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname, $this->port);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function prepare($query) {
        return $this->conn->prepare($query);
    }

    public function close() {
        $this->conn->close();
    }
}
?>
