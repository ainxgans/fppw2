<?php

class User_m extends CI_Model
{
    public function login()
    {
        $email = $this->input->post('user_email');
        $password = $this->input->post('user_password');
        $user = $this->db->get_where('users', ['user_email' => $email])->row_array();
        var_dump($user);
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
