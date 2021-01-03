<?php
class Ppdb_model extends CI_Model {
    
    public function getAllDataPendaftaran()
    {
        $this->db->order_by('id_pendaftar', 'ASC');
        return $this->db->get('pendaftar')->result_array();
    }
} 