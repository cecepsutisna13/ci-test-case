<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends Auth
{
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        $this->session->set_userdata($data);
        var_dump($data);
    }
}
