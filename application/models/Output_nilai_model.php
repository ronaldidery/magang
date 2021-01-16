<?php 
class Output_nilai_model extends CI_Model
{
	//Modal nilai kelas 7

	public function getPts1_7($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pts_7')->result_array();
	}
	public function getPas_7($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pas_7')->result_array();
	}
	public function getPts2_7($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pts_7')->result_array();
	}
	public function getPat_7($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pas_7')->result_array();
	}

	//End modal nilai kelas 7

	//Modal nilai kelas 8

	public function getPts1_8($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pts_8')->result_array();
	}
	public function getPas_8($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pas_8')->result_array();
	}
	public function getPts2_8($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pts_8')->result_array();
	}
	public function getPat_8($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pas_8')->result_array();
	}

	//End modal nilai kelas 8

	//Modal nilai kelas 9

	public function getPts1_9($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pts_9')->result_array();
	}
	public function getPas_9($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pas_9')->result_array();
	}
	public function getPts2_9($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pts_9')->result_array();
	}
	public function getPat_9($value)
	{
		$this->db->where('nis_siswa',$value)
		return $this->db->get('tbl_pat_9')->result_array();
	}

	//End modal nilai kelas 9
}