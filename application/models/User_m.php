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
            'user_name' => $this->input->post('user_name'),
            'user_email' => $this->input->post('user_email'),
            'user_password' => password_hash($this->input->post('user_password'), PASSWORD_DEFAULT)
        ];
        $this->session->set_flashdata('message', 'Selamat! Akun anda berhasil dibuat. Silahkan login.');
        $this->db->insert('users', $data);
    }
}
