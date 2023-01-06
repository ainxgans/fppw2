<?php

class Rps_m extends CI_Model
{
    public function hapusRPP($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('rpp');
    }
}
