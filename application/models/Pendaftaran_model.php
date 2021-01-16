<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {
 
	//insert data pendaftaran
	//public function tambahDataPendaftaran()
	//{
		//$data = array( 
			//"nama" => $this->input->post('nama', true),
			//"nik" => $this->input->post('nik', true),
			//"tmp_lahir" => $this->input->post('tempat_lahir', true),
			//"tt_lahir" => $this->input->post('tanggal_lahir', true),
		//);

		//return $this->db->INSERT('pendaftar', $data);
	//}

	public function simpan($data) 
	{
		return $this->db->INSERT('pendaftar', $data);
	}

	//Fungsi untuk menampilkan alamat(provinsi,kabuoaten,kecamatan) menggunakan ajax
	public function get_provinsi() 
	{
		$this->db->order_by('nama_prov', 'ASC');
		return $this->db->get('wilayah_provinsi');
	}

	public function get_kabupaten ($id_prov) 
	{
		$this->db->order_by('nama_kab', 'ASC');
		$this->db->where('provinsi_id', $id_prov);
		return $this->db->get('wilayah_kabupaten')->result();
	}

	public function get_kecamatan ($id_kab) 
	{
		$this->db->order_by('nama_kec', 'ASC');
		$this->db->where('kabupaten_id', $id_kab);
		return $this->db->get('wilayah_kecamatan')->result();
	}
}

