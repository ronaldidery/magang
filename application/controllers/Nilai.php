<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Nilai extends CI_Controller {

	public function index() 
	{
		$data['judul'] = 'Data Nilai Siswa';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/nilai/tambah_nilai');
		$this->load->view('admin/footer');
	}
}