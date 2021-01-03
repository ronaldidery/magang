<?php
class Guru_model extends CI_Model{ 

	function getAllBerita() 
	{
		return $this->db->query("SELECT * FROM tbl_guru ORDER BY id_guru DESC")->result_array();
	}
 
	function simpan_guru($nama,$nip,$email,$nomor,$gambar)
	{
		//return $this->db->query("INSERT INTO tbl_guru (nama_guru,nip,email_guru,no_hp,foto_guru) VALUES ('$nama','$nip','$email','$nomor','$gambar')");
		
		//Insert Menggunakan Modul CODEIGNITER
		$data = array(
			'nama_guru' => $nama,
			'nip' =>  $nip,
			'email_guru' => $email,
			'no_hp' => $nomor,
			'foto_guru' => $gambar
		);
		return $this->db->INSERT('tbl_guru', $data);
	}

	public function hapusDataGuru($id)
	{
		$row = $this->db->where('id_guru',$id)->get('tbl_guru')->row();
        unlink('assets/foto/guru/'.$row->foto_guru); 
        $this->db->where('id_guru', $id);
        $this->db->delete('tbl_guru', ['id_guru' => $id]);
        return true; 
	}
	
	public function getGuruById($id)
	{
		//tanda [] mengartikan array dan didalamnya ada id. row_array untuk mengambil 1 baris
		return $this->db->get_where('tbl_guru', ['id_guru' => $id])->row_array();
	}
}