<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rps_m');
        $this->load->model('User_m');
        $this->load->library('form_validation');
        $this->load->model('Dosen_m');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "List Mata Kuliah";
        $data['matkul'] = $this->db->get_where('matkul', ['id_dosen' => $data['user']['id']])->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_matkul.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function listRps()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "List RPS";
        $this->db->select('matkul.*, users.nama as nama_dosen, rps.*');
        $this->db->from('rps');
        $this->db->join('matkul', 'matkul.kode = rps.id_matkul');
        $this->db->join('users', 'users.id = rps.id_dosen');
        $this->db->where('matkul.id_dosen', $data['user']['id']);
        $data['rps'] = $this->db->get()->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_rps.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function tambahRps($id_matkul)
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Tambah RPS";
        $data['matkul'] = $this->db->get_where('matkul', ['kode' => $id_matkul])->row_array();
        //tambahin rps
        $this->form_validation->set_rules('id_matkul', 'ID Mata Kuliah', 'required');
        $this->form_validation->set_rules('id_dosen', 'ID Dosen', 'required');
        $this->form_validation->set_rules('nomor_rps', 'Nomor RPS', 'required');
        $this->form_validation->set_rules('gb_umum', 'Gambaran Umum', 'required');
        $this->form_validation->set_rules('cp_pembelajaran', 'Capaian Pembelajaran', 'required');
        $this->form_validation->set_rules('prasyarat', 'Prasyarat', 'required');
        $this->form_validation->set_rules('referensi', 'Referensi', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('view_header.php', $data);
            $this->load->view('tambah_rps.php', $data);
            $this->load->view('view_footer.php', $data);
        } else {
            $table = 'rps';
            $isi = [
                'id_matkul' => $this->input->post('id_matkul'),
                'id_dosen' => $this->input->post('id_dosen'),
                'nomor_rps' => $this->input->post('nomor_rps'),
                'tgl_berlaku' => date('Y'),
                'tgl_disusun' => date('Y-m-d'),
                'gb_umum' => $this->input->post('gb_umum'),
                'cp_pembelajaran' => $this->input->post('cp_pembelajaran'),
                'prasyarat' => $this->input->post('prasyarat'),
                'referensi' => $this->input->post('referensi')
            ];
            $this->Dosen_m->tambahRps($table, $isi);
            redirect('dosen/listRps');
        }
    }
    public function detailRps()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Detail RPS";
        $id = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('rps');
        $this->db->join('matkul', 'matkul.kode = rps.id_matkul');
        $this->db->where('rps.id', $id);
        $data['rps'] = $this->db->get()->row_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('detail_rps.php', $data);
        $this->load->view('view_footer.php', $data);
    }
}
