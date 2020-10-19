<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_berita');
        $this->load->library('upload');
	}

	public function index()
	{
		$data['judul'] = 'Daftar Berita';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/admin');
		$this->load->view('admin/footer');
	}

	public function tambah_berita()
	{
		$data['judul'] = 'Tambah Berita';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/berita/tambah');
		$this->load->view('admin/footer');
	}

	public function simpan_post()
	{
		$config['upload_path'] = './assets/images/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/images/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/images/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $berita=$this->input->post('berita');

				$this->m_berita->simpan_berita($jdl,$berita,$gambar);
				redirect('admin');
		}else{
			redirect('admin/tambah_berita');
	    } 
	                 
	    }else{
			redirect('admin/tambah_berita');
		}
				
	}
}