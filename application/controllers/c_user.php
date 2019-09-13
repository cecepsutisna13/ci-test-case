<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_user extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = 'Edit Profil';
		$this->m_user->getUser($_POST);
		redirect('c_user');
	}
}
