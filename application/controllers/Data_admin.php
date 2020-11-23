<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Data_admin extends CI_Controller {

	public function index() 
	{
		$data['judul'] = 'Data Akun Admin';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/data_admin/data_admin');
		$this->load->view('admin/footer');
	}
}