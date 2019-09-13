<?php

class c_rbelajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rbelajar');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->model("m_auth");

        if ($this->session->userdata('username')) {
            $data['judul'] = 'Report Belajar';
            $this->load->model('m_rbelajar');
            $data['data_belajar'] = $this->m_rbelajar->getAllBelajar();
            $data['data_guru'] = $this->m_rbelajar->getAllGuru();
            $this->load->view('template/header', $data);
            $this->load->view('v_rbelajar', $data);
            $this->load->view('template/footer');
        } else {
            redirect(base_url());
        };
    }

    public function detail($nip)
    {
        $data['judul'] = 'Detail Guru';
        $this->load->model('m_guru');
        $this->m_guru->getGuruById($nip);
        redirect('c_rbelajar');
    }

    public function ubah()
    {
        $data['judul'] = 'Form Ubah Data Guru';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo 'gagal';
        } else {
            $this->m_guru->ubahDataGuru($_POST);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('c_guru');
        }
    }

    public function getUbah()
    {
        echo json_encode($this->m_guru->getGuruById($_POST['nip']));
    }
}
