<?php
require_once 'Matakuliah.php';
$mk = new Matakuliah();

if (!isset($_GET['kodeMK'])) {
    die("Kode MK tidak ditemukan.");
}

$kodeMK = $_GET['kodeMK'];
$stmt = $db->prepare("SELECT * FROM t_matakuliah WHERE kodeMK = ?");
$stmt->bind_param("s", $kodeMK);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    die("Data tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Matakuliah</title>
    <style>
               body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Edit Data Matakuliah</h2>
    <form action="proses_editmatakuliah.php" method="POST">
        <input type="hidden" name="kodeMK" value="<?= htmlspecialchars($data['kodeMK']) ?>">
        
        <label>Nama MK</label><br>
        <input type="text" name="namaMK" value="<?= htmlspecialchars($data['namaMK']) ?>" required><br><br>

        <label>SKS</label><br>
        <input type="number" name="sks" value="<?= $data['sks'] ?>" required><br><br>

        <label>Jam</label><br>
        <input type="number" name="jam" value="<?= $data['jam'] ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
