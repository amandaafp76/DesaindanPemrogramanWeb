<?php
require_once 'Mahasiswa.php';

if (!isset($_GET['npm'])) {
    echo "<p>NPM tidak ditemukan.</p>";
    exit;
}

$mhs = new Mahasiswa();
$data = $mhs->getByNpm($_GET['npm']);

if (!$data) {
    echo "<p>Data tidak ditemukan.</p>";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
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
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #555;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Edit Mahasiswa</h2>
    <form action="proses_editmahasiswa.php" method="post">
        <input type="hidden" name="npm" value="<?= htmlspecialchars($data['npm']) ?>">

        <label>Nama Mahasiswa:</label>
        <input type="text" name="namaMhs" value="<?= htmlspecialchars($data['namaMhs']) ?>" required>

        <label>Prodi:</label>
        <input type="text" name="prodi" value="<?= htmlspecialchars($data['prodi']) ?>" required>

        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?= htmlspecialchars($data['alamat']) ?>" required>

        <label>No HP:</label>
        <input type="text" name="noHP" value="<?= htmlspecialchars($data['noHP']) ?>" required>

        <button type="submit">Update</button>
    </form>
</div>
</body>
</html>
