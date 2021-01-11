<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Kelas7 extends CI_Controller
{

	//Controller PTS 1
	public function pts1()
	{
		$data['judul'] = 'Data Nilai PTS 1 Kelas 7';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas7/pts1');
		$this->load->view('admin/footer');
	}

	//End Controller PTS 1

	//##########################################################//

	//Controller PAT
	public function pat()
	{
		$data['judul'] = 'Data Nilai PAT Kelas 7';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas7/pat');
		$this->load->view('admin/footer');
	}

	//End Controller PAT

	//##########################################################//

	//Controller PTS 2
	public function pts2()
	{
		$data['judul'] = 'Data Nilai PTS 2 Kelas 7';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas7/pts2');
		$this->load->view('admin/footer');
	}

	//End Controller PTS 2

	//##########################################################//

	//Controller PAS
	public function pas()
	{
		$data['judul'] = 'Data Nilai PAS Kelas 7';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas7/pas');
		$this->load->view('admin/footer');
	}

	//End Controller PAS
}