<?php

class Rps_m extends CI_Model
{
    public function list($id)
    {
        return $this->db->get_where('matkul', ['id_dosen' => $id])->result_array();
    }

    public function insert($table, $isi)
    {
        $this->db->insert($table, $isi);
    }
}
