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
            redirect('Admin/');
        } else {
            $table = 'users';
            $data = [
                'id' => htmlspecialchars($this->input->post('id', true)),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'akses' => 2
            ];
            $this->Admin_m->tambah($table, $data);
            $this->session->set_flashdata('message', 'Dosen berhasil ditambahkan!');
            redirect('Admin/');
        }
    }
    public function editDosen($id)
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Edit Dosen";
        $data['dosen'] = $this->db->get_where('users', ['id' => $id])->row_array();
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('view_header.php', $data);
            $this->load->view('edit_dosen.php', $data);
            $this->load->view('view_footer.php', $data);
        } else {
            $table = 'users';
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
            ];
            $this->Admin_m->editDosen($table, $data, $id);
            $this->session->set_flashdata('message', 'Dosen berhasil diubah!');
            redirect('Admin/');
        }
    }
    public function hapusDosen($id)
    {
        $this->Admin_m->hapusDosen($id);
        $this->session->set_flashdata('message', 'Dosen berhasil dihapus!');
        redirect('Admin/');
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
        $this->form_validation->set_rules('kode', 'Kode', 'required|trim');
        $this->form_validation->set_rules('nm_matkul', 'Nama Mata Kuliah', 'required|trim');
        $this->form_validation->set_rules('id_dosen', 'Dosen', 'required|trim');
        $this->form_validation->set_rules('semester', 'Semester', 'required|trim');
        $this->form_validation->set_rules('sks', 'SKS', 'required|trim');
        $this->form_validation->set_rules('penilaian', 'Penilaian', 'required|trim');

        if ($this->form_validation->run() == false) {
            redirect('Admin/listMatkul');
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
    public function editMatkul($id)
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Edit Mata Kuliah";
        $data['matkul'] = $this->db->get_where('matkul', ['kode' => $id])->row_array();
        $data['dosen'] = $this->db->get_where('users', ['akses' => 2])->result_array();
        $this->form_validation->set_rules('kode', 'Kode', 'required|trim');
        $this->form_validation->set_rules('id_dosen', 'Id Dosen', 'required|trim');
        $this->form_validation->set_rules('nm_matkul', 'Nama Mata Kuliah', 'required|trim');
        $this->form_validation->set_rules('semester', 'Semester', 'required|trim');
        $this->form_validation->set_rules('sks', 'SKS', 'required|trim');
        $this->form_validation->set_rules('penilaian', 'Penilaian', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('view_header.php', $data);
            $this->load->view('edit_matkul.php', $data);
            $this->load->view('view_footer.php', $data);
        } else {
            $table = 'matkul';
            $data = [
                'kode' => htmlspecialchars($this->input->post('kode', true)),
                'nm_matkul' => htmlspecialchars($this->input->post('nm_matkul', true)),
                'id_dosen' => htmlspecialchars($this->input->post('id_dosen', true)),
                'semester' => htmlspecialchars($this->input->post('semester', true)),
                'sks' => htmlspecialchars($this->input->post('sks', true)),
                'penilaian' => htmlspecialchars($this->input->post('penilaian', true))
            ];
            $this->Admin_m->editMatkul($table, $data, $id);
            $this->session->set_flashdata('message', 'Mata Kuliah berhasil diubah!');
            redirect('Admin/listMatkul');
        }
    }
    public function hapusMatkul($id)
    {
        $this->Admin_m->hapusMatkul($id);
        $this->session->set_flashdata('message', 'Mata Kuliah berhasil dihapus!');
        redirect('Admin/listMatkul');
    }
}
