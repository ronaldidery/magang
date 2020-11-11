<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Login Admin';
		$this->load->view('login/login_header', $data);
		$this->load->view('login/index');
		$this->load->view('login/login_footer');
	}

} 
