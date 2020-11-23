<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Event extends CI_Controller {

	public function index() 
	{
		$data['judul'] = 'Data Akun Admin';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/event/event');
		$this->load->view('admin/footer');
	}
}