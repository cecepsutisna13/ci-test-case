<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_dashboard extends CI_Controller
{
	public function index()
	{
		if ($this->m_admin->logged_id()) {

			$this->load->view("siswa");
		} else {

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("c_login");
		}
	}

	public function logout()
	{
		session_destroy();
		deletecookie('id');
		deletecookie('username');
		redirect(base_url());
	}
}
