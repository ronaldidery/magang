<?php
class Ppdb_model extends CI_Model {
    
    public function getAllDataPendaftaran()
    {
        $this->db->order_by('id_pendaftar', 'ASC');
        return $this->db->get('pendaftar')->result_array();
    }

    public function hapusDataPPDB($id)
	{
		//besok kalau memakai foto
		//$row = $this->db->where('berita_id',$id)->get('tbl_berita')->row();
        //unlink('assets/foto/berita/'.$row->berita_image);
        //$this->db->where('berita_id', $id);
        //$this->db->delete('tbl_berita', ['berita_id' => $id]);
        //return true;
        
		//tanda [] bisa diartikan where dan array
		$this->db->where('id_pendaftar', $id);
		$this->db->delete('pendaftar', ['id_pendaftar' => $id]);
        return true; 
	}
} 