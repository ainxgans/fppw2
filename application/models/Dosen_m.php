<?php

class Dosen_m extends CI_Model
{
    public function tambah($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function tambahTugas($data)
    {
        $this->db->insert('tugas', $data);
    }
}
