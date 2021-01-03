<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function getAllSiswa() 
	{
		$this->db->order_by('id', 'DESC');
		return $this->db->get('siswa')->result_array();
	}
	public function getSiswaVII() 
	{
		$this->db->order_by('id', 'DESC');
		$this->db->where('kelas_siswa', 'VII');
		//return $this->db->query("SELECT * FROM siswa ORDER BY id DESC")->result_array();
		return $this->db->get('siswa')->result_array();
	}

	public function getSiswaVIII() 
	{
		$this->db->order_by('id', 'DESC');
		$this->db->where('kelas_siswa', 'VIII');
		//return $this->db->query("SELECT * FROM siswa ORDER BY id DESC")->result_array();
		return $this->db->get('siswa')->result_array();
	}

	public function getSiswaIX() 
	{
		$this->db->order_by('id', 'DESC');
		$this->db->where('kelas_siswa', 'IX');
		//return $this->db->query("SELECT * FROM siswa ORDER BY id DESC")->result_array();
		return $this->db->get('siswa')->result_array();
	}

	public function tambahDataSiswa($nama,$nis,$kls,$no)
	{
		$data = array(
			'nama_siswa' => $nama,
			'nis_siswa' =>  $nis,
			'kelas_siswa' =>  $kls,
			'no_hp' => $no
		);
		return $this->db->INSERT('siswa', $data);
	}

	public function hapusDataSiswa($id)
	{	
		//tanda [] bisa diartikan where dan array
		$this->db->where('id', $id);
		$this->db->delete('siswa', ['id' => $id]);
	}
}