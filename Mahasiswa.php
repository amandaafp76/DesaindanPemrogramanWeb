<?php
require_once 'Dosen.php';

class Mahasiswa {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function tambah($npm, $nama, $prodi, $alamat, $noHP) {
        $stmt = $this->conn->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $npm, $nama, $prodi, $alamat, $noHP);
        return $stmt->execute();
    }

    public function getAll($search = "") {
        $search = "%$search%";
        $stmt = $this->conn->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ?");
        $stmt->bind_param("s", $search);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function getByNpm($npm) {
        $stmt = $this->conn->prepare("SELECT * FROM t_mahasiswa WHERE npm = ?");
        $stmt->bind_param("i", $npm);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($npm, $nama, $prodi, $alamat, $noHP) {
        $stmt = $this->conn->prepare("UPDATE t_mahasiswa SET namaMhs=?, prodi=?, alamat=?, noHP=? WHERE npm=?");
        $stmt->bind_param("ssssi", $nama, $prodi, $alamat, $noHP, $npm);
        return $stmt->execute();
    }

    public function delete($npm) {
        $stmt = $this->conn->prepare("DELETE FROM t_mahasiswa WHERE npm = ?");
        $stmt->bind_param("i", $npm);
        return $stmt->execute();
    }
}
?>
