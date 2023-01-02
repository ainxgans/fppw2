<?php

class User_m extends CI_Model
{
    public function login()
    {
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $users = $this->db->get_where('users', ['id' => $id])->row_array();
        var_dump($users);
        die;
    }
    public function signup()
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            '   password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
        ];
        $this->session->set_flashdata('message', 'Selamat! Akun anda berhasil dibuat. Silahkan login.');
        $this->db->insert('users', $data);
    }
    public function tambahDosen_m($table, $isi)
    {

        $this->db->insert($table, $isi);
    }
}
