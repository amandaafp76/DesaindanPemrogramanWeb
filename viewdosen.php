<?php
$con = new mysqli(hostname: "127.0.0.1:3308", username: "root", password: "", database: "modul11");
//check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

//filter input dari metode GET untuk string query
$input=$con->escape_string($_GET['id']);
//membuat query dengan prepared statement
$statement= $con->prepare(query: "Select * from t_dosen where idDosen=?");
//merubah ? sesuai dengan tipe data input yang dibutuhkan
// i = integer, s = string, d = double, b = blob
$statement->bind_param("i", $input);
//mengeksekusi query ke basis data
$statement->execute();
//mendapatkan hasil dari eksekusi query
$hasil=$statement->get_result();
//perulangan untuk mendapatkan baris 
while($baris = $hasil->fetch_assoc()){
    //filter data tampilan untuk data teks saja tanpa kode html
    echo(htmlspecialchars($baris['namaDosen'])."<br>");
}
$con->close();
?>
