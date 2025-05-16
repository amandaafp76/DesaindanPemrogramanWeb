<?php
require_once ('kelas/mahasiswa.php');

$mhs1 = new Mahasiswa("Amanda Fahma Putri");
$mhs1->setNIM("243307065");
$mhs1->setKelas("TI-2C");

//tampilkan nama nim dan kelas dari $mhs1
echo ($mhs1->getNama());
echo ($mhs1->getNIM());
echo ($mhs1->getKelas());
?>
