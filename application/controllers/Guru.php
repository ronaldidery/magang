<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Guru extends CI_Controller {

	public function index() 
	{
		$data['judul'] = 'Data Guru';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/guru/list_guru');
		$this->load->view('admin/footer');
	}
}