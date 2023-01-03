<?php

class Dosen_m extends CI_Model
{
    public function tambah($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
