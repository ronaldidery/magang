<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {
 
	//insert data pendaftaran
	public function tambahDataPendaftaran()
	{
		$data = array(
			"nama" => $this->input->post('nama', true),
			"nik" => $this->input->post('nik', true),
			"tmp_lahir" => $this->input->post('tempat_lahir', true),
			"tt_lahir" => $this->input->post('tanggal_lahir', true),
			"jenis_kelamin" => $this->input->post('jk', true),
			"kewarganegaraan" => $this->input->post('kewarganegaraan', true),
			"agama" => $this->input->post('agama', true),
			"nama_wali" => $this->input->post('nama_wali', true),
			"email" => $this->input->post('email', true),
			"no_tlp" => $this->input->post('no_telp', true),
			"alamat_pendaftar" => $this->input->post('alamat', true),
			"id_provinsi" => $this->input->post('provinsi', true),
			"id_kabupaten" => $this->input->post('kabupaten', true),
			"id_kecamatan" => $this->input->post('kecamatan', true),
			"pos" => $this->input->post('kode_pos', true),
			"pend_akhir" => $this->input->post('pendidikan', true),
			"nama_sekolah" => $this->input->post('nama_sekolah', true),
			"nilai_raport" => $this->input->post('nilai_raport', true),
			"nisn" => $this->input->post('nisn', true)
		);

		return $this->db->INSERT('pendaftar', $data);
	}

	public function simpan_post()
	{
		$config['upload_path'] = './assets/foto/ppdb/'; //path folder
	    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $data['userfile'] = $fileData['file_name'];
	    		
	}

	//Fungsi untuk menampilkan alamat(provinsi,kabuoaten,kecamatan) menggunakan ajax
	public function get_provinsi() 
	{
		$this->db->order_by('nama', 'ASC');
		return $this->db->get('wilayah_provinsi');
	}

	public function get_kabupaten ($id_prov) 
	{
		$this->db->order_by('nama', 'ASC');
		$this->db->where('provinsi_id', $id_prov);
		return $this->db->get('wilayah_kabupaten')->result();
	}

	public function get_kecamatan ($id_kab) 
	{
		$this->db->order_by('nama', 'ASC');
		$this->db->where('kabupaten_id', $id_kab);
		return $this->db->get('wilayah_kecamatan')->result();
	}
}

