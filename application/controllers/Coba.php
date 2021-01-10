<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('coba_model');
        $this->load->library('upload');
	}

	public function index()
	{
		//$this->load->view('admin/contohamikomkrs');
		$this->load->view('coba');
	}

	public function simpan()
	{
		$data = array();
	    $config['upload_path'] = './assets/foto/document/'; //path folder
		$config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    
	   	if(!empty($_FILES['foto1']['name'])){
	   		$this->upload->initialize($config);
	        if ($this->upload->do_upload('foto1')){
	        	$gbr1 = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/document/'.$gbr1['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['new_image']= './assets/foto/document/'.$gbr1['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
			}           
	    }else{
			redirect('admin');
		}

		
		if(!empty($_FILES['foto2']['name'])){
			$this->upload->initialize($config);
	        if ($this->upload->do_upload('foto2')){
	        	$gbr2 = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/document/'.$gbr2['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['new_image']= './assets/foto/document/'.$gbr2['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
			}           
	    }else{
			redirect('admin');
		}

		$gambar1 = $gbr1['file_name'];
		$gambar2 = $gbr2['file_name'];

		$this->coba_model->simpan($gambar1,$gambar2);
	}
}