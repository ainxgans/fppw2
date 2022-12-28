<?php
// create home controller
class Home extends CI_Controller
{
    // create index method
    public function index()
    {
        $data['judul'] = "Beranda | RPS";
        // load view
        $this->template->load('template', 'home', $data);
    }
    public function list()
    {
        $data['judul'] = "List RPS | RPS";
        // load view
        $this->template->load('template', 'list', $data);
    }
    public function tambah()
    {
        $data['judul'] = "Tambah RPS | RPS";
        $this->template->load('template', 'tambah', $data);
    }
}
