<?php

class Rps_m extends CI_Model
{
    public function list()
    {
        return $this->db->get('matkul')->result_array();
    }
}
