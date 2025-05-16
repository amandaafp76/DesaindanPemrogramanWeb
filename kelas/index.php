<?php
require_once('kelas/Manusia.php');

$andi = new Manusia();
$andi->setNama("Andi Pratama");
$andi->setUmur(25);

$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(27);

echo "Nama Andi: " . $andi->getNama() . "<br>";
echo "Umur Andi: " . $andi->getUmur() . " tahun<br>";
echo $andi->tampilkanNIK() . "<br><br>";

echo "Nama Budi: " . $budi->getNama() . "<br>";
echo "Umur Budi: " . $budi->getUmur() . " tahun<br>";
echo $budi->tampilkanNIK() . "<br><br>";

echo "Dibuat oleh: Amanda Fahma Putri_TI-2C<br><br>";

echo "<hr>";
echo "<b>Kesimpulan:</b><br>";
echo "Class Manusia menunjukkan prinsip enkapsulasi dalam OOP PHP, dengan properti yang tidak langsung diakses dari luar. Kita menggunakan getter dan 
setter untuk membaca dan mengubah data. Method private seperti getNIK() tidak bisa diakses langsung, jadi kita buat method public untuk menampilkannya.";
?>
