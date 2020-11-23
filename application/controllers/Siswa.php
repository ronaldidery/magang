<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Siswa extends CI_Controller {

	public function index() 
	{
		$data['judul'] = 'Data Siswa';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/siswa/daftar_siswa');
		$this->load->view('admin/footer');
	}
}