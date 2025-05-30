<?php
require_once 'Matakuliah.php';

$mk = new Matakuliah();
$conn = $db->getConnection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $stmt = $conn->prepare("INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $kodeMK, $namaMK, $sks, $jam);

    if ($stmt->execute()) {
        header("Location: viewmatakuliah.php?pesan=sukses");
        exit;
    } else {
        echo "Gagal menyimpan data: " . $stmt->error;
    }

    $stmt->close();
}
$db->close();
?>
