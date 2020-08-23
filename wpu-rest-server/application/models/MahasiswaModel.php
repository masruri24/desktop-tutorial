<?php



class MahasiswaModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database(); // wajib, kalau udah ada hubungannya sama database!
    }

    public function get_mahasiswa()
    {
        $data = $this->db->get('mahasiswa')->result();
        return $data;
    }

    public function insert_mahasiswa($arraydata)
    {
        $data = $this->db->insert('mahasiswa', $arraydata);
        return $data ? TRUE : FALSE;
    }
}