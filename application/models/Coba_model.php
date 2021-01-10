<?php 
class Coba_model extends CI_Model {

	function simpan($gambar1,$gambar2)
	{
		//$hsl=$this->db->query("INSERT INTO tbl_berita (berita_judul,berita_isi,berita_image) VALUES ('$jdl','$berita','$gambar')");
		//return $hsl;
		//Insert Menggunakan Modul CODEIGNITER
		$data = array(
			'foto1' => $gambar1,
			'foto2' =>  $gambar2
		);
		return $this->db->INSERT('coba', $data);
	}
}