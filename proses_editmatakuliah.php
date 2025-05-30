<?php
require_once 'Matakuliah.php';
$mk = new Matakuliah();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $db->prepare("UPDATE t_matakuliah SET namaMK = ?, sks = ?, jam = ? WHERE kodeMK = ?");
    $stmt->bind_param("siis", $_POST['namaMK'], $_POST['sks'], $_POST['jam'], $_POST['kodeMK']);

    if ($stmt->execute()) {
        header("Location: view_matakuliah.php?pesan=updated");
        exit;
    } else {
        echo "<p style='color:red;'>Gagal update data.</p>";
    }

    $stmt->close();
} else {
    echo "<p>Metode tidak diizinkan.</p>";
}
