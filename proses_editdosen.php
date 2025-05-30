<?php
require_once 'Dosen.php';

// Mengecek apakah tombol edit diklik
if (isset($_POST['edit'])) {
    $id = $_POST['idDosen'];
    $nama = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $dosen = new Dosen();
    
    // Jalankan method update
    if ($dosen->update($id, $nama, $noHP)) {
        header("Location: viewdosen.php");
        exit;
    } else {
        echo "Gagal mengupdate data.";
    }
}
?>
