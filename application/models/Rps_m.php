<?php

class Rps_m extends CI_Model
{
    public function hapusRPP($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('rpp');
    }
    public function hapusUnit_pembelajaran($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('unit_pembelajaran');
    }
    public function hapusTugas($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tugas');
    }
}
