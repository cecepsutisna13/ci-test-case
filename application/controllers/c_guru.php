<?php

class c_guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_guru');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->model("m_auth");

        if ($this->session->userdata('username')) {
            $data['judul'] = 'Data Guru';
            $this->load->model('m_guru');
            $data['data_guru'] = $this->m_guru->getAllGuru();
            $this->load->view('template/header', $data);
            $this->load->view('v_guru');
            $this->load->view('template/footer');
        } else {
            redirect(base_url());
        };
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo 'gagal';
        } else {
            $this->m_guru->tambahDataGuru();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('c_guru');
        }
    }

    public function hapus($id)
    {
        $this->m_guru->hapusDataGuru($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('c_guru');
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
