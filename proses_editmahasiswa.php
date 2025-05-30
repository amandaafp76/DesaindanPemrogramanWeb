<?php
require_once 'Mahasiswa.php';
$mhs = new Mahasiswa();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mhs->update($_POST['npm'], $_POST['namaMhs'], $_POST['prodi'], $_POST['alamat'], $_POST['noHP']);
    header("Location: view_mahasiswa.php");
}
?>
