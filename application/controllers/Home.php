<?php
// create home controller
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rps_m');
    }
    // create index method
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['user_id' => $this->session->userdata('user_id')])->row_array();
        $data['judul'] = "List RPS | RPS";
        $data['rps'] = $this->Rps_m->list();
        // load view
        $this->template->load('template', 'list', $data);
    }
    public function tambah()
    {
        $data['judul'] = "Tambah RPS | RPS";
        $this->template->load('template', 'tambah', $data);
    }
}
