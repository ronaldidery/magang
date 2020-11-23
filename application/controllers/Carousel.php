<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Carousel extends CI_Controller {

	public function index() 
	{
		$data['judul'] = 'Data Carousel';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/carousel/carousel');
		$this->load->view('admin/footer');
	}
}