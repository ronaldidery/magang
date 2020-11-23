<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Galeri extends CI_Controller {

	public function index() 
	{
		$data['judul'] = 'Data Foto Galeri';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/galeri/galeri');
		$this->load->view('admin/footer');
	}
}