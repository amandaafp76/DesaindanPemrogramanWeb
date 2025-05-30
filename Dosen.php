<?php
class Dosen {
    private $conn;

    public function __construct() {
        $this->conn = new mysqli("127.0.0.1:3308", "root", "", "modul11");
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function insert($namaDosen, $noHP) {
        $stmt = $this->conn->prepare("INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)");
        $stmt->bind_param("ss", $namaDosen, $noHP);
        return $stmt->execute();
    }

    public function update($id, $namaDosen, $noHP) {
    $stmt = $this->conn->prepare("UPDATE t_dosen SET namaDosen = ?, noHP = ? WHERE idDosen = ?");
    $stmt->bind_param("ssi", $namaDosen, $noHP, $id);
    return $stmt->execute();
    }

    public function delete($id) {
    $stmt = $this->conn->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

    public function __destruct() {
        $this->conn->close();
    }

}
?>
