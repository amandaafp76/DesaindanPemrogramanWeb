<?php
require_once 'Dosen.php';

if (isset($_GET["idDosen"])) {
    $id = $_GET["idDosen"];
    $dosen = new Dosen();

    // Jalankan method delete
    if ($dosen->delete($id)) {
        header("Location: viewdosen.php");
        exit;
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    header("Location: viewdosen.php");
}
?>
