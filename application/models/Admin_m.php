<?php

class Admin_m extends CI_Model
{
    public function tambah($table, $isi)
    {
        $this->db->insert($table, $isi);
    }
    public function hapusMatkul($id)
    {
        $this->db->where('kode', $id);
        $this->db->delete('matkul');
    }
    public function hapusDosen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
    public function editDosen($table, $isi, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $isi);
    }
    public function editMatkul($table, $isi, $id)
    {
        $this->db->where('kode', $id);
        $this->db->update($table, $isi);
    }
    public function editMahasiswa($table, $isi, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $isi);
    }
    public function hapusMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('users');
    }
}
