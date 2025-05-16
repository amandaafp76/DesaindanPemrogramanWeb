<?php
class Koneksi_db
{
    private $db_host = "localhost";
    private $db_user = "user";
    private $db_pass = "password";
    private $db_name = "database";

    private $con = false;
    private $hasil = array();
    private $conn; // properti untuk menyimpan koneksi

    public function connect()
    {
        if (!$this->con) {
            $this->conn = @mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);

            if ($this->conn) {
                mysqli_set_charset($this->conn, 'utf8');
                $this->con = true;
                return true;
            } else {
                array_push($this->hasil, mysqli_connect_error());
                return false;
            }
        } else {
            return true;
        }
    }
}
?>
