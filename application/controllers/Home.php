<?php
// create home controller
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rps_m');
        $this->load->model('User_m');
        $this->load->library('form_validation');
    }
    // create index method
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "List RPS | RPS";
        $data['matkul'] = $this->Rps_m->list($data['user']['id']);
        // load view
        $this->load->view('view_header.php', $data);
        $this->load->view('list.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function tambah()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['matkul'] = $this->db->get_where('matkul', ['id_dosen' => $data['user']['id']])->row_array();
        $data['judul'] = "Tambah RPS | RPS";
        $this->load->view('view_header.php', $data);
        $this->load->view('tambah.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function insertCover($id_matkul, $id_dosen)
    {

        $this->Rps_m->insert($table, $isi);
    }
    public function tambahDosen()
    {
        $this->load->model('User_m');
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();

        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Tambah Dosen | RPS";
            $this->load->view('view_header.php', $data);
            $this->load->view('tambah_dosen.php');
            $this->load->view('view_footer.php');
        } else {
            $table = 'users';

            $isi = [
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'akses' => '2'
            ];
            $this->User_m->tambahDosen_m($table, $isi);
        }
    }
    public function tambahMatkul()
    {
    }
    public function listMatkul()
    {
    }
    public function listRps()
    {
    }
    public function tambahRps()
    {
    }
}
