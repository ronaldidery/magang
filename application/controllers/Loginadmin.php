<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginadmin extends CI_Controller 
{

	public function __construct() 
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Login Admin';
			$this->load->view('login/login_header', $data);
			$this->load->view('login/index');
			$this->load->view('login/login_footer');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$admin = $this->db->get_where('admin', ['username' => $username])->row_array();

		//jika admin ada
		if ($admin) {
			//cek password
			if (password_verify($password, $admin['password'])) {
				$data = [
					'username' => $admin['username'],
					'nama' => $admin['nama_admin']
				];
				$this->session->set_userdata($data);
				redirect('admin/admin');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role"alert">Gagal login!</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role"alert">Gagal login!</div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role"alert">Logout berhasil</div>');
		redirect('loginadmin');
	}
} 
