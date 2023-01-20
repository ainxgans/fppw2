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

    public function edit($table, $data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }
}
