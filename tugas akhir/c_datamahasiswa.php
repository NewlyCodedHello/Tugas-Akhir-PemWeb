<?php
include_once("m_datamahasiswa.php");
class c_datamahasiswa
{
    public $model;
    public function __construct()
    {
        $this->model = new m_datamahasiswa();
    }
    public function invoke()
    {
        $datamahasiswa = $this->model->getDataMahasiswa();
        include 'v_datamahasiswa.php';
    }
    public function tambahdatamahasiswa(
        $no,
        $nim,
        $nama,
        $programstudi,
        $email
    ) {
        $this->model = new m_datamahasiswa();
        $tambahdatamahasiswa= $this->model -> setDataMahasiswa($no, $nim, $nama,$programstudi,$email);
    }
}
?>