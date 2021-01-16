<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('output_nilai_model');
	}

	public function nilai7()
	{
		if () {

			$value = ...

			$data['pts1'] = $this->output_nilai_model->getPts1_7($value);
			$data['pas'] = $this->output_nilai_model->getPas_7($value);
			$data['pts2'] = $this->output_nilai_model->getPts2_7($value);
			$data['pts1'] = $this->output_nilai_model->getPat_7($value);

			$this->load->view('nilai/kelas7', $data);
		}
	}

	public function nilai8()
	{
		if () {

			$value = ...

			$data['pts1'] = $this->output_nilai_model->getPts1_8($value);
			$data['pas'] = $this->output_nilai_model->getPas_8($value);
			$data['pts2'] = $this->output_nilai_model->getPts2_8($value);
			$data['pts1'] = $this->output_nilai_model->getPat_8($value);

			$this->load->view('nilai/kelas7', $data);
		}
	}

	public function nilai9()
	{
		if () {

			$value = ...

			$data['pts1'] = $this->output_nilai_model->getPts1_9($value);
			$data['pas'] = $this->output_nilai_model->getPas_9($value);
			$data['pts2'] = $this->output_nilai_model->getPts2_9($value);
			$data['pts1'] = $this->output_nilai_model->getPat_9($value);

			$this->load->view('nilai/kelas7', $data);
		}
	}
}