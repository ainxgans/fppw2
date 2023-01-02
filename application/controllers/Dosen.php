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
        $data['judul'] = "Dosen | RPS";
        $data['dosen'] = $this->db->get_where('users', ['akses' => 2])->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_dosen.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function listMatkul()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "List Mata Kuliah";
        $data['matkul'] = $this->db->get_where('matkul', ['id_dosen' => $data['user']['id']])->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_matkul.php', $data);
        $this->load->view('view_footer.php', $data);
    }
}
