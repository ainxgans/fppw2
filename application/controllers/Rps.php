<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rps extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rps_m');
        $this->load->model('User_m');
        $this->load->library('form_validation');
        $this->load->model('Dosen_m');
        $this->load->model('Admin_m');
    }
    public function tambahTugas($id)
    {
        $data['rps'] = $this->db->get_where('rps', ['id' => $id])->row_array();
        $this->form_validation->set_rules('tugas', 'Tugas', 'required');
        $this->form_validation->set_rules('km_akhir', 'Kemampuan Akhir', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('bobot', 'Bobot', 'required');
        $this->form_validation->set_rules('kriteria_nilai', 'Kriteria Nilai', 'required');
        $this->form_validation->set_rules('indikator_nilai', 'Indikator Nilai', 'required');
        if ($this->form_validation->run() == false) {
            redirect('dosen/detailRps/' . $id);
        } else {
            $table = 'tugas';
            $isi = [
                'id_rps' => $id,
                'tugas' => $this->input->post('tugas'),
                'km_akhir' => $this->input->post('km_akhir'),
                'waktu' => $this->input->post('waktu'),
                'bobot' => $this->input->post('bobot'),
                'kriteria_nilai' => $this->input->post('kriteria_nilai'),
                'indikator_nilai' => $this->input->post('indikator_nilai')
            ];
            $this->Dosen_m->tambah($table, $isi);
            $this->session->set_flashdata('message', 'Tugas berhasil ditambahkan!');
            redirect('dosen/detailRps/' . $id);
        }
    }
    public function tambahRpp($id)
    {

        $data['rps'] = $this->db->get_where('rps', ['id' => $id])->row_array();
        $this->form_validation->set_rules('minggu', 'Minggu', 'required');
        $this->form_validation->set_rules('km_akhir', 'Kemampuan Akhir yang Diharapkan', 'required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('topik', 'Strategi Pembelajaran', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('penilaian', 'Penilaian', 'required');
        if ($this->form_validation->run() == false) {
            redirect('dosen/detailRps/' . $id);
        } else {
            $table = 'rpp';
            $isi = [
                'id_rps' => $id,
                'minggu' => $this->input->post('minggu'),
                'km_akhir' => $this->input->post('km_akhir'),
                'indikator' => $this->input->post('indikator'),
                'topik' => $this->input->post('topik'),
                'waktu' => $this->input->post('waktu'),
                'penilaian' => $this->input->post('penilaian')
            ];
            $this->Dosen_m->tambah($table, $isi);
            $this->session->set_flashdata('message', 'Rencana Pelaksanaan Pembelajaran berhasil ditambahkan!');
            redirect('dosen/detailRps/' . $id);
        }
    }
    public function cetakRps($id)
    {
        $this->load->library('pdf');
        $this->pdf->set_option('isRemoteEnabled', true);
        $this->pdf->set_option('isPhpEnabled', true);
        $data['rps'] = $this->db->get_where('rps', ['id' => $id])->row_array();
        $data['matkul'] = $this->db->get_where('matkul', ['kode' => $data['rps']['id_matkul']])->row_array();
        $data['dosen'] = $this->db->get_where('users', ['id' => $data['rps']['id_dosen']])->row_array();
        $data['unit'] = $this->db->get_where('unit_pembelajaran', ['id_rps' => $id])->result_array();
        $data['tugas'] = $this->db->get_where('tugas', ['id_rps' => $id])->result_array();
        $data['rpp'] = $this->db->get_where('rpp', ['id_rps' => $id])->result_array();
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->load_view('cetak.php', $data);
        $this->pdf->load->view('cetak.php', $data);
    }
}
