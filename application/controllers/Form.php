<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	//Model di load disini karena ada lebih dari 1 function yang pake
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('pendaftaran_model');
	}

	public function get_kabupaten()
	{
		$id_prov=$this->input->post('id_prov');
		$data=$this->pendaftaran_model->get_kabupaten($id_prov);
		echo json_encode($data);
	}

	public function get_kecamatan()
	{
		$id_kab=$this->input->post('id_kab');
		$data=$this->pendaftaran_model->get_kecamatan($id_kab);
		echo json_encode($data);
	}

	public function index()
	{
		$data['judul'] = 'Daftar PPDB Online';
		$x['data']=$this->pendaftaran_model->get_provinsi();

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
		$this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telpon', 'required|numeric');
		$this->form_validation->set_rules('nilai_raport', 'Nilai Raport', 'required');
		$this->form_validation->set_rules('nisn', 'NISN', 'required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('pendaftaran/form_daftar', $x);
			$this->load->view('templates/footer');
		} else {
			$this->_simpan();
		}
	}

	private function _simpan()
	{
        $this->pendaftaran_model->tambahDataPendaftaran();
		$this->session->set_flashdata('flash', 'Pendaftaran Berhasil');
		redirect('form');
	}

	public function _tambahData()
	{
	    $config['upload_path'] = './assets/foto/document/'; //path folder
		$config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	    
	    $this->upload->initialize($config);
	    if(!empty($_FILES['pasfoto']['name'])){
	        if ($this->upload->do_upload('pasfoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/berita/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['new_image']= './assets/foto/berita/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
			}else{
				redirect('admin');
	    	}          
	    }else{
			redirect('admin');
		}
	}
} 
