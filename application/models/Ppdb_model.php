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
        
        $row = $this->db->where('id_pendaftar',$id)->get('pendaftar')->row();
        unlink('assets/foto/document/'.$row->pas_foto);
        unlink('assets/foto/document/'.$row->ijazah_foto);
        unlink('assets/foto/document/'.$row->kk_foto);
		//tanda [] bisa diartikan where dan array
		$this->db->where('id_pendaftar', $id);
		$this->db->delete('pendaftar', ['id_pendaftar' => $id]);
        return true;
	}

    public function getDataPendaftaranBy($id)
    {
        //tanda [] mengartikan array dan didalamnya ada id. row_array untuk mengambil 1 baris
        return $this->db->get_where('pendaftar', ['id_pendaftar' => $id])->row_array();
    }
} 