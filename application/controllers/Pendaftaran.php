<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pendaftaran extends CI_Controller {

	public function index() 
	{
		$data['judul'] = 'Data Pendaftar';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/ppdb/pendaftaran');
		$this->load->view('admin/footer');
	}
}