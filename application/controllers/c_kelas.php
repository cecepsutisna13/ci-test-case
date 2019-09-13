<?php

class c_kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kelas');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->model("m_auth");

        if ($this->session->userdata('username')) {
            $data['judul'] = 'Data Kelas';
            $this->load->model('m_kelas');
            $data['data_kelas'] = $this->m_kelas->getAllKelas();
            $data['data_guru'] = $this->m_kelas->getAllGuru();
            $this->load->view('template/header', $data);
            $this->load->view('v_kelas');
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
            $this->m_kelas->tambahDataKelas();
            redirect('c_kelas');
        }
    }

    public function hapus($id)
    {
        $this->m_kelas->hapusDataKelas($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('c_kelas');
    }

    public function ubah()
    {
        $data['judul'] = 'Form Ubah Data Kelas';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo 'gagal';
        } else {
            $this->m_kelas->ubahDataKelas($_POST);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('c_kelas');
        }
    }

    public function getUbah()
    {
        echo json_encode($this->m_kelas->getKelasById($_POST['id']));
    }
}
