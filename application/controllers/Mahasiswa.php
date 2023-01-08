<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rps_m');
        $this->load->model('User_m');
        if (!$this->session->userdata('id') || ($this->session->userdata('akses') != '3')) {
            redirect('Auth');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Semester 1";
        $this->db->select('matkul.*, users.nama as nama_dosen, rps.*');
        $this->db->from('rps');
        $this->db->join('matkul', 'matkul.kode = rps.id_matkul');
        $this->db->join('users', 'users.id = rps.id_dosen');
        $this->db->where('matkul.semester', '1');

        $data['rps'] = $this->db->get()->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_rps.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function semester2()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Semester 2";
        $this->db->select('matkul.*, users.nama as nama_dosen, rps.*');
        $this->db->from('rps');
        $this->db->join('matkul', 'matkul.kode = rps.id_matkul');
        $this->db->join('users', 'users.id = rps.id_dosen');
        $this->db->where('matkul.semester', '2');


        $data['rps'] = $this->db->get()->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_rps.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function semester3()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Semester 3";
        $this->db->select('matkul.*, users.nama as nama_dosen, rps.*');
        $this->db->from('rps');
        $this->db->join('matkul', 'matkul.kode = rps.id_matkul');
        $this->db->join('users', 'users.id = rps.id_dosen');
        $this->db->where('matkul.semester', '3');


        $data['rps'] = $this->db->get()->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_rps.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function semester4()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Semester 4";
        $this->db->select('matkul.*, users.nama as nama_dosen, rps.*');
        $this->db->from('rps');
        $this->db->join('matkul', 'matkul.kode = rps.id_matkul');
        $this->db->join('users', 'users.id = rps.id_dosen');
        $this->db->where('matkul.semester', '4');
        $data['rps'] = $this->db->get()->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_rps.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function semester5()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Semester 5";
        $this->db->select('matkul.*, users.nama as nama_dosen, rps.*');
        $this->db->from('rps');
        $this->db->join('matkul', 'matkul.kode = rps.id_matkul');
        $this->db->join('users', 'users.id = rps.id_dosen');
        $this->db->where('matkul.semester', '5');
        $data['rps'] = $this->db->get()->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_rps.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function semester6()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Semester 6";
        $this->db->select('matkul.*, users.nama as nama_dosen, rps.*');
        $this->db->from('rps');
        $this->db->join('matkul', 'matkul.kode = rps.id_matkul');
        $this->db->join('users', 'users.id = rps.id_dosen');
        $this->db->where('matkul.semester', '6');
        $data['rps'] = $this->db->get()->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_rps.php', $data);
        $this->load->view('view_footer.php', $data);
    }


    public function cetakRps($id)
    {
        $this->load->library('pdf');
        $this->pdf->set_option('isRemoteEnabled', true);

        $data['rps'] = $this->db->get_where('rps', ['id' => $id])->row_array();
        $data['matkul'] = $this->db->get_where('matkul', ['kode' => $data['rps']['id_matkul']])->row_array();
        $data['dosen'] = $this->db->get_where('users', ['id' => $data['rps']['id_dosen']])->row_array();
        $data['unit'] = $this->db->get_where('unit_pembelajaran', ['id_rps' => $id])->result_array();
        $data['tugas'] = $this->db->get_where('tugas', ['id_rps' => $id])->result_array();
        $data['rpp'] = $this->db->get_where('rpp', ['id_rps' => $id])->result_array();
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->load_view('cetak.php', $data);
        $this->pdf->load->view('cetak.php', $data);
    }
}
