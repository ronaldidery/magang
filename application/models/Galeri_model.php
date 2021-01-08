<?php 
class Galeri_model extends CI_Model{

	function simpan_galeri($jdl,$gambar)
	{
		$data = array( 
			'judul_galeri' => $jdl,
			'foto_galeri' =>  $gambar
		);
		return $this->db->INSERT('tbl_galeri', $data);
	}

	function getGaleriKode($kode)
	{
		$hsl=$this->db->query("SELECT * FROM tbl_galeri WHERE id_galeri='$kode'");
		return $hsl;
	}

	function getAllGaleri() 
	{
		$this->db->order_by('id_galeri', 'DESC');
		return $this->db->get('tbl_galeri')->result_array();
	}

	public function hapusDataGaleri($id)
	{
		$row = $this->db->where('id_galeri',$id)->get('tbl_galeri')->row();
        unlink('assets/foto/galeri/'.$row->foto_galeri);
        $this->db->where('id_galeri', $id);
        $this->db->delete('tbl_galeri', ['id_galeri' => $id]);
        return true; 
		//tanda [] bisa diartikan where dan array
		//$this->db->where('id_galeri', $id);
		//$this->db->delete('tbl_galeri', ['id_galeri' => $id]);

	}

	public function getGaleriById($id)
	{
		//tanda [] mengartikan array dan didalamnya ada id. row_array untuk mengambil 1 baris
		return $this->db->get_where('tbl_galeri', ['id_galeri' => $id])->row_array();
	}

	public function updateGaleriFoto($jdl,$gambar,$id)
	{
		$this->db->where('id_galeri', $id);
		$data = array(
			'judul_galeri' => $jdl,
			'foto_galeri' =>  $gambar
		);
		return $this->db->update('tbl_galeri', $data);
	}

	public function updateGaleri($jdl,$id)
	{
		$this->db->where('id_galeri', $id);
		$data = array(
			'judul_galeri' => $jdl
		);
		return $this->db->update('tbl_galeri', $data);
	}
}