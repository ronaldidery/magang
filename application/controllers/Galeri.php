<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('galeri_model');
        $this->load->library('upload');
	}

	public function index() 
	{
		$data['judul'] = 'Data Foto Galeri';
		$data['galeri'] = $this->galeri_model->getAllGaleri();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/galeri/index');
		$this->load->view('admin/footer');
	}

	public function tambah_galeri()
	{
		$data['judul'] = 'Tambah Data Galeri';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/galeri/tambah');
		$this->load->view('admin/footer');
	}

	public function simpan_post()
	{
		$config['upload_path'] = './assets/foto/galeri/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/galeri/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/foto/galeri/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul', TRUE);

				$this->galeri_model->simpan_galeri($jdl,$gambar);
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('galeri');
		}else{
			redirect('galeri/tambah_galeri');
	    } 
	                 
	    }else{
			redirect('galeri/tambah_galeri');
		}		
	}

	public function hapus($id)
	{
		$this->galeri_model->hapusDataGaleri($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('galeri');
	} 

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Galeri';
		$data['galeri'] = $this->galeri_model->getGaleriById($id);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/galeri/detail', $data);
		$this->load->view('admin/footer');
	}
} 