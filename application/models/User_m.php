<?php

class User_m extends CI_Model
{
    public function login($post)
    {
        $this->db->select();
        $this->db->from('users');
        $this->db->where('user_name', $post['username']);
        $this->db->where('user_password', $post['password']);
        $query = $this->db->get();
        return $query;
    }
}
