<?php
require_once 'Mahasiswa.php';
$mhs = new Mahasiswa();
$mhs->delete($_GET['npm']);
header("Location: view_mahasiswa.php");
?>
