<?php

class m_about extends CI_model
{
    public function getInformasi()
    {
        return  $this->db->get('about')->result_array();
    }
}
