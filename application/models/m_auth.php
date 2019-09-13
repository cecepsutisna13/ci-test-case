<?php

class m_auth extends CI_model
{
    public function getAllUser($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }
    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
}
