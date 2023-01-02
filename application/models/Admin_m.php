<?php

class Admin_m extends CI_Model
{
    public function tambah($table, $isi)
    {
        $this->db->insert($table, $isi);
    }
    public function deleteMatkul($id)
    {
        $this->db->where('kode', $id);
        $this->db->delete('matkul');
    }
}
