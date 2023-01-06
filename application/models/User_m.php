<?php

class User_m extends CI_Model
{
    public function signup()
    {
        $data = [
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'akses' => 3
        ];
        $this->session->set_flashdata('berhasil', 'Selamat! Akun anda berhasil dibuat. Silahkan login.');
        $this->db->insert('users', $data);
    }
}
