<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rps_m');
        $this->load->model('User_m');
        $this->load->library('form_validation');
        $this->load->model('Dosen_m');
        if (!$this->session->userdata('id') || ($this->session->userdata('akses') == '3')) {
            redirect('Auth');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "List Mata Kuliah";
        $data['matkul'] = $this->db->get_where('matkul', ['id_dosen' => $data['user']['id']])->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_matkul.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function listRps()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "List RPS";
        $this->db->select('matkul.*, users.nama as nama_dosen, rps.*');
        $this->db->from('rps');
        $this->db->join('matkul', 'matkul.kode = rps.id_matkul');
        $this->db->join('users', 'users.id = rps.id_dosen');
        $this->db->where('matkul.id_dosen', $data['user']['id']);
        $data['rps'] = $this->db->get()->result_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('list_rps.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function tambahRps($id_matkul)
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Tambah RPS";
        $data['matkul'] = $this->db->get_where('matkul', ['kode' => $id_matkul])->row_array();
        //tambahin rps
        $this->form_validation->set_rules('id_matkul', 'ID Mata Kuliah', 'required');
        $this->form_validation->set_rules('id_dosen', 'ID Dosen', 'required');
        $this->form_validation->set_rules('nomor_rps', 'Nomor RPS', 'required');
        $this->form_validation->set_rules('gb_umum', 'Gambaran Umum', 'required');
        $this->form_validation->set_rules('cp_pembelajaran', 'Capaian Pembelajaran', 'required');
        $this->form_validation->set_rules('prasyarat', 'Prasyarat', 'required');
        $this->form_validation->set_rules('referensi', 'Referensi', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('view_header.php', $data);
            $this->load->view('tambah_rps.php', $data);
            $this->load->view('view_footer.php', $data);
        } else {
            $table = 'rps';
            $isi = [
                'id_matkul' => $this->input->post('id_matkul'),
                'id_dosen' => $this->input->post('id_dosen'),
                'nomor_rps' => $this->input->post('nomor_rps'),
                'tgl_berlaku' => date('Y'),
                'tgl_disusun' => date('Y-m-d'),
                'gb_umum' => $this->input->post('gb_umum'),
                'cp_pembelajaran' => $this->input->post('cp_pembelajaran'),
                'prasyarat' => $this->input->post('prasyarat'),
                'referensi' => $this->input->post('referensi')
            ];
            $this->Dosen_m->tambah($table, $isi);
            $this->session->set_flashdata('message', 'RPS berhasil ditambahkan!');
            redirect('dosen/listRps');
        }
    }
    public function detailRps($id)
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Detail RPS";
        $id = $this->uri->segment(3);
        $data['unit'] = $this->db->get_where('unit_pembelajaran', ['id_rps' => $id])->result_array();
        $data['tugas'] = $this->db->get_where('tugas', ['id_rps' => $id])->result_array();
        $data['rpp'] = $this->db->get_where('rpp', ['id_rps' => $id])->result_array();
        $this->db->select('*');
        $this->db->from('rps');
        $this->db->join('matkul', 'matkul.kode = rps.id_matkul');
        $this->db->where('rps.id', $id);
        $data['rps'] = $this->db->get()->row_array();
        $this->load->view('view_header.php', $data);
        $this->load->view('detail_rps.php', $data);
        $this->load->view('view_footer.php', $data);
    }
    public function tambahUnit($id)
    {
        $data['rps'] = $this->db->get_where('rps', ['id' => $id])->row_array();
        $this->form_validation->set_rules('km_akhir_p', 'Kemampuan Akhir ', 'required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('bhn_kajian', 'Bahan Kajian', 'required');
        $this->form_validation->set_rules('mtd_belajar', 'Metode Belajar', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('mtd_nilai', 'Metode Nilai', 'required');
        $this->form_validation->set_rules('bahan_ajar', 'Bahan Ajar', 'required');
        if ($this->form_validation->run() == false) {
            redirect('dosen/detailRps/' . $id);
        } else {
            $table = 'unit_pembelajaran';
            $isi = [
                'id_rps' => $id,
                'km_akhir_p' => $this->input->post('km_akhir_p'),
                'indikator' => $this->input->post('indikator'),
                'bhn_kajian' => $this->input->post('bhn_kajian'),
                'mtd_belajar' => $this->input->post('mtd_belajar'),
                'waktu' => $this->input->post('waktu'),
                'mtd_nilai' => $this->input->post('mtd_nilai'),
                'bahan_ajar' => $this->input->post('bahan_ajar')
            ];
            $this->Dosen_m->tambah($table, $isi);
            $this->session->set_flashdata('message', 'Unit Pembelajaran berhasil ditambahkan!');
            redirect('dosen/detailRps/' . $id . '#unit');
        }
    }

    public function editUnit($id_rps, $id)
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Edit Unit";
        $data['rps'] = $this->db->get_where('rps', ['id' => $id_rps])->row_array();
        $data['unit'] = $this->db->get_where('unit_pembelajaran', ['id' => $id])->result_array();
        $this->form_validation->set_rules('id', 'id ', 'required');
        $this->form_validation->set_rules('km_akhir_p', 'Kemampuan Akhir ', 'required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('bhn_kajian', 'Bahan Kajian', 'required');
        $this->form_validation->set_rules('mtd_belajar', 'Metode Belajar', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('mtd_nilai', 'Metode Nilai', 'required');
        $this->form_validation->set_rules('bahan_ajar', 'Bahan Ajar', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('view_header.php', $data);
            $this->load->view('edit_unit.php', $data);
            $this->load->view('view_footer.php', $data);
        } else {
            $id = $this->input->post('id');
            $table = 'unit_pembelajaran';
            $data = [
                'id' => htmlspecialchars($this->input->post('id', true)),
                'km_akhir_p' => htmlspecialchars($this->input->post('km_akhir_p', true)),
                'indikator' => htmlspecialchars($this->input->post('indikator', true)),
                'bhn_kajian' => htmlspecialchars($this->input->post('bhn_kajian', true)),
                'mtd_belajar' => htmlspecialchars($this->input->post('mtd_belajar', true)),
                'waktu' => htmlspecialchars($this->input->post('waktu', true)),
                'mtd_nilai' => htmlspecialchars($this->input->post('mtd_nilai', true)),
                'bahan_ajar' => htmlspecialchars($this->input->post('bahan_ajar', true)),
            ];
            $this->Dosen_m->edit($table, $data, $id);
            $this->session->set_flashdata('message', 'Unit berhasil diubah!');
            redirect('dosen/detailRps/' . $id_rps . '#unit');
        }
    }
    public function tambahTugas($id)
    {
        $data['rps'] = $this->db->get_where('rps', ['id' => $id])->row_array();
        $this->form_validation->set_rules('tugas', 'Tugas', 'required');
        $this->form_validation->set_rules('km_akhir', 'Kemampuan Akhir', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('bobot', 'Bobot', 'required');
        $this->form_validation->set_rules('kriteria_nilai', 'Kriteria Nilai', 'required');
        $this->form_validation->set_rules('indikator_nilai', 'Indikator Nilai', 'required');
        if ($this->form_validation->run() == false) {
            redirect('dosen/detailRps/' . $id);
        } else {
            $table = 'tugas';
            $isi = [
                'id_rps' => $id,
                'tugas' => $this->input->post('tugas'),
                'km_akhir' => $this->input->post('km_akhir'),
                'waktu' => $this->input->post('waktu'),
                'bobot' => $this->input->post('bobot'),
                'kriteria_nilai' => $this->input->post('kriteria_nilai'),
                'indikator_nilai' => $this->input->post('indikator_nilai')
            ];
            $this->Dosen_m->tambah($table, $isi);
            $this->session->set_flashdata('message', 'Tugas berhasil ditambahkan!');
            redirect('dosen/detailRps/' . $id . '/#tugas');
        }
    }

    public function editTugas($id_rps, $id)
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Edit Unit";
        $data['rps'] = $this->db->get_where('rps', ['id' => $id_rps])->row_array();
        $data['tugas'] = $this->db->get_where('tugas', ['id' => $id])->result_array();
        $this->form_validation->set_rules('tugas', 'Tugas', 'required');
        $this->form_validation->set_rules('km_akhir', 'Kemampuan Akhir', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('bobot', 'Bobot', 'required');
        $this->form_validation->set_rules('kriteria_nilai', 'Kriteria Nilai', 'required');
        $this->form_validation->set_rules('indikator_nilai', 'Indikator Nilai', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('view_header.php', $data);
            $this->load->view('edit_tugas.php', $data);
            $this->load->view('view_footer.php', $data);
        } else {
            $id = $this->input->post('id');
            $table = 'tugas';
            $data = [
                'id' => $this->input->post('id'),
                'tugas' => $this->input->post('tugas'),
                'km_akhir' => $this->input->post('km_akhir'),
                'waktu' => $this->input->post('waktu'),
                'bobot' => $this->input->post('bobot'),
                'kriteria_nilai' => $this->input->post('kriteria_nilai'),
                'indikator_nilai' => $this->input->post('indikator_nilai')
            ];
            $this->Dosen_m->edit($table, $data, $id);
            $this->session->set_flashdata('message', 'Tugas berhasil diubah!');
            redirect('dosen/detailRps/' . $id_rps . '#tugas');
        }
    }

    public function tambahRpp($id)
    {
        $data['rps'] = $this->db->get_where('rps', ['id' => $id])->row_array();
        $this->form_validation->set_rules('minggu', 'Minggu', 'required');
        $this->form_validation->set_rules('km_akhir', 'Kemampuan Akhir yang Diharapkan', 'required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('topik', 'Strategi Pembelajaran', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('penilaian', 'Penilaian', 'required');
        if ($this->form_validation->run() == false) {
            redirect('dosen/detailRps/' . $id);
        } else {
            $table = 'rpp';
            $isi = [
                'id_rps' => $id,
                'minggu' => $this->input->post('minggu'),
                'km_akhir' => $this->input->post('km_akhir'),
                'indikator' => $this->input->post('indikator'),
                'topik' => $this->input->post('topik'),
                'strategi_pembelajaran' => $this->input->post('strategi_pembelajaran'),
                'waktu' => $this->input->post('waktu'),
                'penilaian' => $this->input->post('penilaian')
            ];
            $this->Dosen_m->tambah($table, $isi);
            $this->session->set_flashdata('message', 'Rencana Pelaksanaan Pembelajaran berhasil ditambahkan!');
            redirect('dosen/detailRps/' . $id . '/#rpp');
        }
    }
    public function editRpp($id_rps, $id)
    {
        $data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
        $data['judul'] = "Edit RPP";
        $data['rps'] = $this->db->get_where('rps', ['id' => $id_rps])->row_array();
        $data['rpp'] = $this->db->get_where('rpp', ['id' => $id])->result_array();
        $this->form_validation->set_rules('minggu', 'Minggu', 'required');
        $this->form_validation->set_rules('km_akhir', 'Kemampuan Akhir yang Diharapkan', 'required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'required');
        $this->form_validation->set_rules('topik', 'Strategi Pembelajaran', 'required');
        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('penilaian', 'Penilaian', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('view_header.php', $data);
            $this->load->view('edit_rpp.php', $data);
            $this->load->view('view_footer.php', $data);
        } else {
            $id = $this->input->post('id');
            $table = 'rpp';
            $data = [
                'id' => $this->input->post('id'),
                'minggu' => $this->input->post('minggu'),
                'km_akhir' => $this->input->post('km_akhir'),
                'indikator' => $this->input->post('indikator'),
                'topik' => $this->input->post('topik'),
                'strategi_pembelajaran' => $this->input->post('strategi_pembelajaran'),
                'waktu' => $this->input->post('waktu'),
                'penilaian' => $this->input->post('penilaian')
            ];
            $this->Dosen_m->edit($table, $data, $id);
            $this->session->set_flashdata('message', 'Rencana Pelaksanaan Pembelajaran berhasil diubah!');
            redirect('dosen/detailRps/' . $id_rps . '/#rpp');
        }
    }
    public function cetakRps($id)
    {
        $this->load->library('pdf');
        $data['rps'] = $this->db->get_where('rps', ['id' => $id])->row_array();
        $data['matkul'] = $this->db->get_where('matkul', ['kode' => $data['rps']['id_matkul']])->row_array();
        $data['dosen'] = $this->db->get_where('users', ['id' => $data['rps']['id_dosen']])->row_array();
        $data['unit'] = $this->db->get_where('unit_pembelajaran', ['id_rps' => $id])->result_array();
        $data['tugas'] = $this->db->get_where('tugas', ['id_rps' => $id])->result_array();
        $data['rpp'] = $this->db->get_where('rpp', ['id_rps' => $id])->result_array();
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "RPS.pdf";
        $this->pdf->load_view('cetak.php', $data);
        $this->load->view('cetak_rps.php', $data);
    }
    public function hapusRPP($id, $id_rps)
    {
        $id_rps = $this->uri->segment(4);
        $this->Rps_m->hapusRPP($id);
        $this->session->set_flashdata('message', 'RPP Berhasil dihapus!');
        redirect('Dosen/detailRps/' . $id_rps . '/#rpp');
    }
    public function hapusTugas($id, $id_rps)
    {
        $this->Rps_m->hapusTugas($id);
        $this->session->set_flashdata('message', 'Tugas Berhasil dihapus!');
        redirect('Dosen/detailRps/' . $id_rps . '/#tugas');
    }
    public function hapusUnit_pembelajaran($id, $id_rps)
    {
        $this->Rps_m->hapusUnit_pembelajaran($id);
        $this->session->set_flashdata('message', 'Unit Pembelajaran Berhasil dihapus!');
        redirect('Dosen/detailRps/' . $id_rps . '/#unit_pembelajaran');
    }
}
