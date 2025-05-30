<?php
require_once 'Dosen.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $dosen = new Dosen();
    $sukses = $dosen->insert($namaDosen, $noHP);

    if ($sukses) {
        header("Location: viewdosen.php?pesan=berhasil");
        exit;
    } else {
        echo "<p>Gagal menyimpan data.</p>";
    }
} else {
    echo "<p>Metode tidak valid.</p>";
}
?>
