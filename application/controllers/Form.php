<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	//Model di load disini karena ada lebih dari 1 function yang pake
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('m_wilayah');
		$this->load->library('form_validation');
	}

	public function get_kabupaten()
	{
		$id1=$this->input->post('id1');
		$data1=$this->m_wilayah->get_kabupaten($id1);
		echo json_encode($data1);
	}

	public function get_kecamatan()
	{
		$id2=$this->input->post('id2');
		$data2=$this->m_wilayah->get_kecamatan($id2);
		echo json_encode($data2);
	}

	public function index()
	{
		$data['judul'] = 'Daftar PPDB Online';
		$x['data']=$this->m_wilayah->get_provinsi();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telpon', 'required|numeric');
		$this->form_validation->set_rules('nilai_raport', 'Nilai Raport', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('form_daftar', $x);
			$this->load->view('templates/footer');
		} else {

			echo "Behasil";
			//Nanti dibuka bila udah ada databasenya!!!
			//$this->Data_daftar_siswa->tambahDataDaftarSiswa();
			//$this->session->set_flashdata('flash', 'Pendaftaran Berhasil');
			//redirect('form_daftar');
		}
	}
} 
