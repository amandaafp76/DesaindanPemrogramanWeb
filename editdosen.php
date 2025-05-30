<?php
require_once 'Dosen.php';

// Mengecek apakah ada parameter idDosen
if (!isset($_GET['idDosen'])) {
    header("Location: viewdosen.php");
    exit;
}

$dosen = new Dosen();
$data = $dosen->getById($_GET['idDosen']);

if (!$data) {
    echo "<p>Data tidak ditemukan.</p>";
    exit;
}

$idDosen = $data['idDosen'];
$namaDosen = $data['namaDosen'];
$noHP = $data['noHP'];
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        h1 {
            text-align: center;
        }
        .container {
            width: 400px;
            margin: auto;
        }
        fieldset {
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 7px;
            margin-top: 5px;
        }
        input[type="submit"] {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Edit Data</h1>
    <div class="container">
        <form action="proses_editdosen.php" method="post">
            <fieldset>
                <legend>Edit Data Dosen</legend>
                <input type="hidden" name="idDosen" value="<?= htmlspecialchars($idDosen) ?>">
                
                <label for="idDosenDisabled">ID :</label>
                <input type="text" id="idDosenDisabled" value="<?= htmlspecialchars($idDosen) ?>" disabled>

                <label for="namaDosen">Nama Dosen :</label>
                <input type="text" name="namaDosen" id="namaDosen" value="<?= htmlspecialchars($namaDosen) ?>" required>

                <label for="noHP">No HP :</label>
                <input type="text" name="noHP" id="noHP" value="<?= htmlspecialchars($noHP) ?>" required>

                <input type="submit" name="edit" value="Update Data">
            </fieldset>
        </form>
    </div>
</body>
</html>
