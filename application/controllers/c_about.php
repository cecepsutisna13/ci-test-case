<?php

class c_about extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_about');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $data['informasi'] = $this->m_about->getInformasi();
        $this->load->view('template/header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('template/footer');
    }
}
