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
		//$data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('email')])->row_array();


		$data['judul'] = 'List Data Berita';
		$data['berita'] = $this->berita_model->getAllBerita();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/admin', $data);
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

				$this->berita_model->simpan_berita($jdl,$berita,$gambar);
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

		$this->load->view('admin/header', $data);
		$this->load->view('admin/berita/detail_berita', $data);
		$this->load->view('admin/footer');
	}

}