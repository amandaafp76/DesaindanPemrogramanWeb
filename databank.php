<?php
require_once('kelas/akunBank.php');

// Membuat objek akun bank
$data1 = new akunBank("001", 10000, "Budi");
$data2 = new akunBank("002", 10000, "Andi");

// Menambahkan uang ke akun 1
$data1->tambahUang(5000);

// Mengurangi uang dari akun 2
$data2->kurangUang(3000);

// Menampilkan informasi akun 1
echo "<b>Data Akun 1</b><br>";
echo "Nama: " . $data1->getNama() . "<br>";
echo "Nomor Akun: 001<br>";
echo $data1->tampilkanSaldo() . "<br>";
echo $data1->hitungPajak() . "<br><br>";

// Menampilkan informasi akun 2
echo "<b>Data Akun 2</b><br>";
echo "Nama: " . $data2->getNama() . "<br>";
echo "Nomor Akun: 002<br>";
echo $data2->tampilkanSaldo() . "<br>";
echo $data2->hitungPajak() . "<br>";
?>
