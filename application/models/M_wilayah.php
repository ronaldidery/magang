<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_wilayah extends CI_Model {
	
	public function get_provinsi () 
	{
		//$hasil=$this->db->query("SELECT * FROM wilayah_provinsi");
		//return $hasil;
		$this->db->select('*');
		$this->db->from('wilayah_provinsi');
		return $this->db->get();
	}

	public function get_kabupaten ($id_kab) 
	{
		//$hasil=$this->db->query("SELECT * FROM wilayah_kabupaten WHERE provinsi_id='$id_kab'");
		//return $hasil->result();
		$this->db->select('*');
		$this->db->from('wilayah_kabupaten');
		$this->db->where('wilayah_kabupaten.provinsi_id', $id_kab);
		return $this->db->get();
	}

	public function get_kecamatan ($id_kec) 
	{
		//$hasil=$this->db->query("SELECT * FROM wilayah_kecamatan WHERE kabupaten_id='$id_kec'");
		//return $hasil->result();
		$this->db->select('*');
		$this->db->from('wilayah_kecamatan');
		$this->db->where('wilayah_kecamatan.kabupaten_id', $id_kec);
		return $this->db->get();
	}
}