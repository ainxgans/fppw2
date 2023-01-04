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
        $this->load->model('Admin_m');
        if (!$this->session->userdata('id') || $this->session->userdata('akses') != 1) {
            redirect('Auth');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "List Dosen";
        $data['dosen'] = $this->db->get_where('users', ['akses' => 2])->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_dosen.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function tambahDosen()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Tambah Dosen";
        $this->form_validation->set_rules('id', 'ID', 'required|trim|is_unique[users.id]', [
            'is_unique' => 'ID sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('view_header.php', $data);
            $this->load->view('tambah_dosen.php', $data);
            $this->load->view('view_footer.php', $data);
        } else {
            $table = 'users';
            $data = [
                'id' => htmlspecialchars($this->input->post('id', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('id'), PASSWORD_DEFAULT),
                'akses' => 2
            ];
            $this->Admin_m->tambah($table, $data);
            $this->session->set_flashdata('message', 'Dosen berhasil ditambahkan!');
            redirect('Admin/');
        }
    }
    public function listMatkul()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "List Mata Kuliah";
        $data['dosen'] = $this->db->get_where('users', ['akses' => 2])->result_array();
        $this->db->select('*');
        $this->db->from('matkul');
        $this->db->join('users', 'users.id = matkul.id_dosen');
        $data['matkul'] = $this->db->get()->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_matkul.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function tambahMatkul()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['dosen'] = $this->db->get_where('users', ['akses' => 2])->result_array();
        $data['judul'] = "Tambah Mata Kuliah";
        $this->form_validation->set_rules('kode', 'Kode', 'required|trim|is_unique[matkul.kode]', [
            'is_unique' => 'Kode sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('nm_matkul', 'Nama Mata Kuliah', 'required|trim');
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'required|trim');
        $this->form_validation->set_rules('semester', 'Semester', 'required|trim');
        $this->form_validation->set_rules('sks', 'SKS', 'required|trim');
        $this->form_validation->set_rules('penilaian', 'Penilaian', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('view_header.php', $data);
            $this->load->view('tambah_matkul.php', $data);
            $this->load->view('view_footer.php', $data);
        } else {
            $table = 'matkul';
            $data = [
                'kode' => htmlspecialchars($this->input->post('kode', true)),
                'nm_matkul' => htmlspecialchars($this->input->post('nm_matkul', true)),
                'id_dosen' => htmlspecialchars($this->input->post('id_dosen', true)),
                'semester' => htmlspecialchars($this->input->post('semester', true)),
                'sks' => htmlspecialchars($this->input->post('sks', true)),
                'penilaian' => $this->input->post('penilaian', true)
            ];
            $this->Admin_m->tambah($table, $data);
            $this->session->set_flashdata('message', 'Mata Kuliah berhasil ditambahkan!');
            redirect('Admin/listMatkul');
        }
    }
    public function deleteMatkul($id)
    {
        $this->Admin_m->deleteMatkul($id);
        $this->session->set_flashdata('message', 'Mata Kuliah berhasil dihapus!');
        redirect('Admin/listMatkul');
    }
    public function Matkul($id)
    {
        $this->Admin_m->deleteMatkul($id);
        $this->session->set_flashdata('message', 'Mata Kuliah berhasil dihapus!');
        redirect('Admin/listMatkul');
    }
}
