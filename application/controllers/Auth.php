<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // if ($this->session->username) {
        //     redirect('c_siswa');
        //     die();
        // }

        $this->load->library('form_validation');
        $this->load->helper(array('Form', 'Cookie', 'String'));
    }

    public function index()
    {
        $this->form_validation->set_rules('ni', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $this->load->view('auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $username = $this->input->post('ni');
        $password = $this->input->post('password');

        $this->load->model('m_auth');
        $user = $this->m_auth->getAllUser($username);

        if ($user) {
            if ($user['is_active'] == 1) {
                // if (password_verify($password, $user['password'])) {
                if ($user['password'] == md5($password)) {
                    $data = [
                        'username' => $user['username'],
                        'name' => $user['name'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        if (isset($_POST['remember'])) {
                            setcookie('id', $user['id'], time() + 60);
                            setcookie('username', hash('md5', $user['username']), time() + 60);
                        }
                        redirect('c_siswa');
                    } else {
                        redirect('c_siswa');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                         Password Salah
                         </div>');
                    redirect(base_url());
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Username Belum Diaktivasi
                    </div>');
                redirect(base_url());
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Username Tidak Terdaftar
            </div>');
            redirect(base_url());
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('ni', 'Ni', 'required|trim|is_unique[user.username]', ['required' => 'Masukan Nomor Identitas', 'is_unique' => 'Nomor udah terdaftar']);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'Masukan Nama Lengkap']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]', ['required' => 'Masukan Password', 'matches' => 'Password tidak cocok', 'min_length' => 'Password minimal 3 karakter']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi';
            $this->load->view('auth/header', $data);
            $this->load->view('auth/registrasi');
            $this->load->view('auth/footer');
        } else {
            $data = [
                'username' => $this->input->post('ni', true),
                'name' => $this->input->post('nama', true),
                // 'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'password' => md5($this->input->post('password1', true)),
                'role_id' => 2,
                'is_active' => 1
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Registrasi berhasil. Silahkan Login
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        session_destroy();
        delete_cookie('id');
        delete_cookie('username');
        redirect(base_url());
    }
}
