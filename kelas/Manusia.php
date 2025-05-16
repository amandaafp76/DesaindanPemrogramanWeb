<?php
class Manusia 
{
    protected $name = "";
    protected $nik = "123212131243243";
    protected $umur = "";

    public function getNama()
    {
        return $this->name;
    }
    public function setNama($name)
    {
        $this->name = $name;
    }
    public function getUmur()
    {
        return $this->umur;
    }
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
    public function tampilkanNIK()
    {
        return "NIK: {$this->nik}";
    }
    private function getNIK()
    {
        return " nik {$this->nik} ";
    }
}
?>
