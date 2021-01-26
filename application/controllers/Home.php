<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller { 
	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('berita_model');
        $this->load->library('upload');
        $this->load->library("pagination");
	}

	public function index()
	{
		//Config
		$config['base_url'] = 'http://localhost/magang/home/index';
		$config['total_rows'] = $this->berita_model->countAllBerita();
		$config['per_page'] = 4;

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['berita'] = $this->berita_model->getBerita($config['per_page'], $data['start']);


		$data['judul'] = 'MTS Bima Bhakti';
		$this->load->view('templates/header', $data);
		$this->load->view('home/home', $data);
		$this->load->view('templates/footer');
	}


	public function info_ppdb()
	{
		$data['judul'] = 'MTS Bima Bhakti';
		$this->load->view('templates/header', $data);
		$this->load->view('ppdb', $data);
		$this->load->view('templates/footer');
	}

	public function nilai_siswa()
	{
		$this->load->view('login/login_siswa');
	}

	public function loginadmin()
	{
		$this->load->view('login/login_header');
		$this->load->view('login/index');
		$this->load->view('login/login_footer');
	}
}
