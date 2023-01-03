<?php

class Dosen_m extends CI_Model
{
    public function tambahRps($table, $data)
    {
        $this->db->insert($table, $data);
        return die($this->db->last_query());
    }
}
