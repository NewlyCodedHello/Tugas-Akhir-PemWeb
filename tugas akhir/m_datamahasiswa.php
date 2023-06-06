<?php
class m_datamahasiswa
{
    private $No;
    private $NIM;
    private $Nama;
    private $ProgramStudi;
    private $Email;

    public $hasil = array();
 
    public function setDataMahasiswa($no, $nim, $nama,$programstudi,$email)
    {
        require "koneksi MVC.php";
        $rs = $mysqli->query("INSERT INTO datamahasiswa VALUES('$this->no', '$this->nim', '$this->nama','$this->programstudi','$this->email')");
    }
    public function getDataMahasiswa()
    {
        require "koneksi MVC.php";
        $rs = $mysqli->query("SELECT * FROM datamahasiswa");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $row[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }
}
?>