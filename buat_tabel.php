<?php
$con = new mysqli(hostname: "127.0.0.1:3308", username: "root", password: "", database: "modul11");
//check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
//buat query yang akan dikirim ke database
$q="CREATE TABLE t_login (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(50) NOT NULL,
email VARCHAR(50),
tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ";
//kirim query ke server basis data
$hasil=$con->query($q);
//periksa hasil pengiriman query
if ($hasil === TRUE) {
    echo "Tabel t_login berhasil dibuat";
} else {
    echo "Tabel gagal dibuat: " . $con->error;
}
//menutup koneksi
$con->close();