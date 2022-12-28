<?php
defined('BASEPATH') or exit('No direct script access allowed');

// create home controller
class Auth extends CI_Controller
{
    // create index method
    public function index()
    {
        // load view
        $this->load->view('login');
    }
    public function signup()
    {
        // load view
        $this->load->view('signup');
    }
    public function proses()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if ($query->num_rows() > 0) {
                redirect('Home');
            }
        }
    }
}
