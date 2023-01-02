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
        $this->form_validation->set_rules('id', 'ID', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['judul'] = "Login | RPS";
            $this->load->view('login', $data);
        } else {
            $id = $this->input->post('id');
            $password = $this->input->post('password');
            $user = $this->db->get_where('users', ['id' => $id])->row_array();
            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['akses'] == 1) {
                        redirect('tambah');
                    } else {
                        redirect('list');
                    }
                }
            }
        }
    }
    public function signup()
    {
        $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('user_name', 'Username', 'required');
        $this->form_validation->set_rules('user_password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
        } else {
            $this->user_m->signup();
            redirect('Auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('user_email');
        redirect('Auth');
    }
}
