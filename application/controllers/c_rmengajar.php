<?php

class c_rmengajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_rmengajar');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->model("m_auth");

        if ($this->session->userdata('username')) {
            $data['judul'] = 'Report Mengajar';
            $this->load->model('m_rmengajar');
            $data['data_mengajar'] = $this->m_rmengajar->getAllKelas();
            $this->load->view('template/header', $data);
            $this->load->view('v_rmengajar', $data);
            $this->load->view('template/footer');
        } else {
            redirect(base_url());
        };
    }

    public function ubah()
    {
        $data['judul'] = 'Form Ubah Data Siswa';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo 'gagal';
        } else {
            $this->m_siswa->getDataSiswa($_POST);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('c_siswa');
        }
    }

    public function getUbah()
    {
        echo json_encode($this->m_siswa->getSiswaById($_POST['nis']));
    }

    public function coba($id)
    {
        $data['judul'] = 'Data Siswa';
        $this->load->model('m_rmengajar');
        $data['data_mengajar'] = $this->m_rmengajar->getKelas($id);
        $data['data_rmengajar'] = $this->m_rmengajar->getSiswa($id);
        $this->load->view('template/header', $data);
        $this->load->view('v_coba', $data);
        $this->load->view('template/footer');
    }
}
