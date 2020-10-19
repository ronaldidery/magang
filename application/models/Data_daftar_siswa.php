<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_daftar_siswa extends CI_Model {

	//!!Untuk menampilkan data pada tampilan admin(guru)!!
	public function getDataSiswa()
	{

		$query = $this->db->get('form_daftar');
		return $query->result_array();

	}

	public function tambahDataSiswa()
	{
		$data = array[
			"nama" => $this->input->post('nama', true),
			"nik" => $this->input->post('nik', true),
			"tempat_lahir" => $this->input->post('tempat_lahir', true),
			"tanggal_lahir" => $this->input->post('tanggal_lahir', true),
			"jk" => $this->input->post('jk', true),
			"kewarganegaraan" => $this->input->post('kewarganegaraan', true),
			"agama" => $this->input->post('agama', true),
			"nama_ibu" => $this->input->post('nama_ibu', true),
			"email" => $this->input->post('email', true),
			"no_telp" => $this->input->post('no_telp', true),
			"alamat" => $this->input->post('alamat', true),
			"kode_pos" => $this->input->post('kode_pos', true),
			"provinsi" => $this->input->post('provinsi', true),
			"kabupaten" => $this->input->post('kabupaten', true),
			"kecamatan" => $this->input->post('kecamatan', true),
			"pendidikan" => $this->input->post('pendidikan', true),
			"sekolah" => $this->input->post('sekolah', true),
			"nilai_raport" => $this->input->post('nilai_raport', true)
		];

		$this->db->insert('form_daftar', $data);

	}
}
