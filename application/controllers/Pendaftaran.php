<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pendaftaran extends CI_Controller {
 
	public function index() 
	{
		$data['judul'] = 'Data Pendaftar';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/ppdb/index');
		$this->load->view('admin/footer');
	}

	public function tambah()
	{
		$nama=$this->input->post('nama_siswa', TRUE);
        $nis=$this->input->post('nis_siswa', TRUE);
        $no=$this->input->post('nomor', TRUE);

        $this->siswa_model->tambahDataSiswa($nama,$nis,$no);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('siswa');
	}

	public function hapus($id)
	{
		$this->berita_model->hapusDataBerita($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Pendaftaran');
	}
}