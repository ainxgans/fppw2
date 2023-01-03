<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_m');
        $this->load->model('Mahasiswa_m');
        $this->load->library('form_validation');
        
    }
    public function index()
    {
        $this->load->view('welcome_message');
    }
}
