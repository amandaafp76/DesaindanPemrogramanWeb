<?php
require_once 'Matakuliah.php';
$mk = new Matakuliah();

if (isset($_GET['kodeMK'])) {
    $stmt = $db->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("s", $_GET['kodeMK']);

    if ($stmt->execute()) {
        header("Location: view_matakuliah.php?pesan=deleted");
        exit;
    } else {
        echo "<p style='color:red;'>Gagal menghapus data.</p>";
    }

    $stmt->close();
} else {
    echo "<p>Kode MK tidak ditemukan.</p>";
}
