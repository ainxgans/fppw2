<?php
defined('BASEPATH') or exit('No direct script access allowed');

// create home controller
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }
    // create index method
    public function index()
    {
        $data['judul'] = "Login | RPS";
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Login | RPS";
            $this->load->view('login', $data);
        } else {
            $id = $this->input->post('id');
            $password = $this->input->post('password');
            $user = $this->db->get_where('users', ['id' => $id])->row_array();
            // cek user
            if ($user) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    if ($user['akses'] == 1) {
                        $data = [
                            'id' => $user['id'],
                            'nama' => $user['nama'],
                            'akses' => $user['akses']
                        ];
                        $this->session->set_userdata($data);
                        redirect('Admin');
                    } elseif ($user['akses'] == 2) {
                        $matkul = $this->db->get_where('matkul', ['id_dosen' => $user['id']])->row_array();
                        if ($matkul) {
                            $data = [
                                'id' => $user['id'],
                                'nama' => $user['nama'],
                                'akses' => $user['akses'],
                                'id_matkul' => $matkul['id_matkul']
                            ];
                            $this->session->set_userdata($data);
                            redirect('Dosen');
                        } else {
                            $this->session->set_flashdata('message', 'Anda Belum Mengajar!, silahkan hubungi Admin');
                            redirect('login');
                        }
                    } else {
                        redirect('Mahasiswa');
                    }
                } else {
                    $this->session->set_flashdata('message', 'Password Salah!');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', 'ID Tidak Terdaftar!');
                redirect('login');
            }
        }
    }
    public function signup()
    {
        $this->form_validation->set_rules('id', 'ID', 'required|is_unique[users.id]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
        } else {
            $this->user_m->signup();
            redirect('Auth');
        }
    }
    public function logout()
    {
        $logged = array('id', 'nama', 'akses');
        $this->session->unset_userdata($logged);
        redirect('Auth');
    }
}
