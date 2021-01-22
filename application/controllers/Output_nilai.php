<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Output_nilai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('output_nilai_model');
	}

	public function nilai()
	{
		$nis = $this->input->post('nis',TRUE);
		$cek = $this->output_nilai_model->validationNIS($nis);

		if ($cek->num_rows() > 0) {
			$data['pts1'] = $this->output_nilai_model->getPts1($nis);
			$data['pas'] = $this->output_nilai_model->getPas($nis);
			$data['pts2'] = $this->output_nilai_model->getPts2($nis);
			$data['pat'] = $this->output_nilai_model->getPat($nis);

			$this->load->view('nilai/index', $data);
		} else {
			$this->session->set_flashdata('flash', 'terdaftar!');
			redirect('home/nilai_siswa');
		}
		




		

		//var_dump($data);
		
	}
}