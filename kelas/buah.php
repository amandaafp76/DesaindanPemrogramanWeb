<?php

class Buah
{
    public $nama;
    protected $warna;
    private $berat;

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    public function getWarna()
    {
        return $this->warna;
    }

    public function setBerat($berat)
    {
        $this->berat = $berat;
    }

    public function getBerat()
    {
        return $this->berat;
    }
}

$mango = new Buah();
$mango->nama = 'Mango';         // OK
$mango->setWarna('Yellow');     // gunakan setter
$mango->setBerat(300);          // gunakan setter

echo "Nama: " . $mango->nama . "<br>";
echo "Warna: " . $mango->getWarna() . "<br>";
echo "Berat: " . $mango->getBerat() . " gram<br>";
