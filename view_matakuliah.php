<?php
require_once 'Matakuliah.php';
$mk = new Matakuliah();

$result = $db->conn->query("SELECT * FROM t_matakuliah");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Matakuliah</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 8px;
            width: 60%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 8px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        a.action-link {
            margin: 0 5px;
            text-decoration: none;
            color: #007BFF;
        }
        a.action-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h2>Daftar Matakuliah</h2>
    <a href="tambah_matakuliah.php">Tambah Data</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>Kode MK</th>
            <th>Nama MK</th>
            <th>SKS</th>
            <th>Jam</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['kodeMK']) ?></td>
                <td><?= htmlspecialchars($row['namaMK']) ?></td>
                <td><?= $row['sks'] ?></td>
                <td><?= $row['jam'] ?></td>
                <td>
                    <a href="edit_matakuliah.php?kodeMK=<?= $row['kodeMK'] ?>">Edit</a> |
                    <a href="hapus_matakuliah.php?kodeMK=<?= $row['kodeMK'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
