<?php

class Rps_m extends CI_Model
{
    public function tambahRPS()
    {
        $data = [
            'rps_id' => $this->input->post('rps_id'),
            'rps_nama' => $this->input->post('rps_nama'),
            'rps_jurusan' => $this->input->post('rps_jurusan'),
            'rps_semester' => $this->input->post('rps_semester'),
            'rps_tahun' => $this->input->post('rps_tahun'),
            'rps_matakuliah' => $this->input->post('rps_matakuliah'),
            'rps_kode' => $this->input->post('rps_kode'),
            'rps_sks' => $this->input->post('rps_sks'),
            'rps_jam' => $this->input->post('rps_jam'),
            'rps_dosen' => $this->input->post('rps_dosen'),
            'rps_prodi' => $this->input->post('rps_prodi'),
            'rps_kurikulum' => $this->input->post('rps_kurikulum'),
            'rps_tahun' => $this->input->post('rps_tahun'),
            'rps_tanggal' => $this->input->post('rps_tanggal'),
            'rps_judul' => $this->input->post('rps_judul'),
            'rps_tujuan' => $this->input->post('rps_tujuan'),
            'rps_silabus' => $this->input->post('rps_silabus'),
            'rps_bahan' => $this->input->post('rps_bahan'),
            'rps_metode' => $this->input->post('rps_metode'),
            'rps_penilaian' => $this->input->post('rps_penilaian'),
            'rps_keterangan' => $this->input->post('rps_keterangan'),
            'rps_status' => $this->input->post('rps_status'),
            'rps_file' => $this->input->post('rps_file'),
            'rps_created' => $this->input->post('rps_created'),
            'rps_updated' => $this->input]


        $this->db->insert('rps', $data);
    }
}
