<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin extends CI_Controller { 

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
        $this->load->library('upload');
	}

	public function index()
	{
		//session LOGIN!!
		//$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();


		$data['judul'] = 'List Data Berita';
		$data['berita'] = $this->berita_model->getAllBerita();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/berita/index', $data);
		$this->load->view('admin/footer');

		/////PAGINATION UNTUK HALAMAN USER BESOK!!///
		//Load pagination
		//$this->load->library("pagination");

		//Config
		//$config['base_url'] = 'http://localhost/magang/admin/index';
		//$config['total_rows'] = $this->berita_model->countAllBerita();
		//$config['per_page'] = 11;

		//initialize
		//$this->pagination->initialize($config);

		//$data['start'] = $this->uri->segment(3);
		//$data['berita'] = $this->berita_model->getAllBerita($config['per_page'], $data['start']);
	}

	public function simpan_post()
	{
		$config['upload_path'] = './assets/foto/berita/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['filefoto']['name'])){
	        if ($this->upload->do_upload('filefoto')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/foto/berita/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 710;
	            $config['height']= 420;
	            $config['new_image']= './assets/foto/berita/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul', TRUE);
                $berita=$this->input->post('berita', TRUE);

				$this->berita_model->simpan_berita($jdl,$berita,$gambar);
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('admin');
		}else{
			redirect('admin/tambah_berita');
	    } 
	                 
	    }else{
			redirect('admin/tambah_berita');
		}		
	}

	public function hapus($id)
	{
		$this->berita_model->hapusDataBerita($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin');
	} 

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Berita';
		$data['berita'] = $this->berita_model->getBeritaById($id);
	}

}