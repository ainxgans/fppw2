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
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "List RPS | RPS";
        $data['matkul'] = $this->Rps_m->list();
        // load view
        $this->load->view('view_header.php', $data);
        $this->load->view('list.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function tambah()
    {
        $data['judul'] = "Tambah RPS | RPS";
        $this->load->view('view_header.php', $data);
        $this->load->view('tambah.php', $data);
        $this->load->view('view_footer.php', $data);
    }
}
