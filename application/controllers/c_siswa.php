<?php

class c_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_siswa');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['username'] = $this->session->userdata('username');
        $this->load->model("m_auth");

        if ($this->session->userdata('username')) {
            $data['judul'] = 'Data Siswa';
            $this->load->model('m_siswa');
            $data['data_siswa'] = $this->m_siswa->getAllSiswa();
            $data['data_kelas'] = $this->m_siswa->getAllKelas();
            $this->load->view('template/header', $data);
            $this->load->view('v_siswa');
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
            $this->m_siswa->tambahDataSiswa();
            redirect('c_siswa');
        }
    }

    public function hapus($id)
    {
        $this->m_siswa->hapusDataSiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('c_siswa');
    }

    public function ubah()
    {
        $data['judul'] = 'Form Ubah Data Siswa';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo 'gagal';
        } else {
            $this->m_siswa->ubahDataSiswa($_POST);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('c_siswa');
        }
    }

    public function getUbah()
    {
        echo json_encode($this->m_siswa->getSiswaById($_POST['nis']));
    }
}
