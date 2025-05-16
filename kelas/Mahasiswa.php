<?php
require_once "Manusia.php";

class Mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        // memanggil setter dari class induk Manusia
        $this->setNama($nama);
    }
    // Setter dan Getter untuk NIM
    public function setNIM($nim)
    {
        $this->NIM = $nim;
    }
    public function getNIM()
    {
        return $this->NIM;
    }
    // Setter dan Getter untuk jurusan
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }
    public function getJurusan()
    {
        return $this->jurusan;
    }
    // Setter dan Getter untuk kelas
    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }
    public function getKelas()
    {
        return $this->kelas;
    }
}
?>
