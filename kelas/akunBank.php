<?php
class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;

    public function __construct($nomorAkun, $nominal, $nama)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang = $nominal;
        $this->nama = $nama;
    }
    // Getter dan setter untuk nama
    public function getNama()
    {
        return $this->nama;
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
    }
    // Menambahkan jumlah uang
    public function tambahUang($jumlah)
    {
        $this->jmlUang += $jumlah;
    }
    // Mengurangi jumlah uang
    public function kurangUang($jumlah)
    {
        if ($jumlah > $this->jmlUang) {
            echo "Saldo tidak cukup untuk dikurangi sebesar: $jumlah<br>";
        } else {
            $this->jmlUang -= $jumlah;
        }
    }
    // Menampilkan jumlah uang yang ada
    public function tampilkanSaldo()
    {
        return "Saldo saat ini: Rp " . number_format($this->jmlUang, 0, ',', '.');
    }
    // Menghitung pajak 11%
    public function hitungPajak()
    {
        $pajak = $this->jmlUang * 0.11;
        return "Pajak (11%): Rp " . number_format($pajak, 0, ',', '.');
    }
}
?>
