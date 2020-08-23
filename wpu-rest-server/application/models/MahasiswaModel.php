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

    public function update_mahasiswa($arrayId, $arraydata)
    {
        $data = $this->db->where($arrayId)
                            ->update('mahasiswa', $arraydata);
        return $data ? TRUE : FALSE;
    }

    public function delete_mahasiswa($arrayId)
    {
        $data = $this->db->where($arrayId)
                                ->delete('mahasiswa');
        return $data ? TRUE : FALSE;
    }
}