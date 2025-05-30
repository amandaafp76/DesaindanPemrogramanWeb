<?php
require_once 'Mahasiswa.php';
$mhs = new Mahasiswa();
$data = $mhs->getAll(isset($_GET['cari']) ? $_GET['cari'] : '');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
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
            margin-bottom: 20px;
        }
        form {
            text-align: center;
            margin-bottom: 15px;
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
        .add-button {
            display: block;
            text-align: right;
            margin: 10px 0;
        }
        .add-button a {
            background-color: #28a745;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
        }
        .add-button a:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
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
<div class="container">
    <h2>Data Mahasiswa</h2>

    <form method="get">
        <input type="text" name="cari" placeholder="Cari nama">
        <button type="submit">Cari</button>
    </form>

    <div class="add-button">
        <a href="tambah_mahasiswa.php">+ Tambah Data</a>
    </div>

    <table>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $data->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['npm']) ?></td>
            <td><?= htmlspecialchars($row['namaMhs']) ?></td>
            <td><?= htmlspecialchars($row['prodi']) ?></td>
            <td><?= htmlspecialchars($row['alamat']) ?></td>
            <td><?= htmlspecialchars($row['noHP']) ?></td>
            <td>
                <a class="action-link" href="edit_mahasiswa.php?npm=<?= $row['npm'] ?>">Edit</a> |
                <a class="action-link" href="hapus_mahasiswa.php?npm=<?= $row['npm'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
