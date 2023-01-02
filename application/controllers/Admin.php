<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rps_m');
        $this->load->model('User_m');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Admin | RPS";
        $this->load->view('view_header.php', $data);
        $this->load->view('list.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function tambahDosen()
    {
        
    }
}
