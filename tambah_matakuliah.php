<?php
require_once 'Matakuliah.php';
$mk = new Matakuliah();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $db->prepare("INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssii", $_POST['kodeMK'], $_POST['namaMK'], $_POST['sks'], $_POST['jam']);

    if ($stmt->execute()) {
        echo "<p style='color:green;'>Data berhasil disimpan. <a href='view_matakuliah.php'>Lihat Data</a></p>";
    } else {
        echo "<p style='color:red;'>Gagal menyimpan data.</p>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Matakuliah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Input Data Matakuliah</h2>
    <form method="post">
        <label>Kode MK</label><br>
        <input type="text" name="kodeMK" required><br><br>

        <label>Nama MK</label><br>
        <input type="text" name="namaMK" required><br><br>

        <label>SKS</label><br>
        <input type="number" name="sks" required><br><br>

        <label>Jam</label><br>
        <input type="number" name="jam" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
