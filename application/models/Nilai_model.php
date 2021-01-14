<?php  
class Nilai_model extends CI_Model
{
//######################--Model untuk kelas 7--############################//
//---Model untuk PTS--//

		//Simpan PTS1 dan PTS2
		public function simpanpts7($data)
		{
			return $this->db->INSERT('tbl_pts_7', $data);
		}

		//Edit PTS1 dan PTS2
		public function simpanpts7edit($data,$id)
		{
			$this->db->where('id', $id);
			return $this->db->update('tbl_pts_7', $data);
		}

		//Hapus PTS1 dan PTS2
		public function hapusPts_7($id)
		{
			$this->db->delete('tbl_pts_7', ['id' => $id]);
	        return true;
		}

		//----PTS 1----//
		public function getNilaiPts1_7() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS1');
			return $this->db->get('tbl_pts_7')->result_array();
		}

		//----End PTS 1----//

		//----PTS 2----//
		public function getNilaiPts2_7() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS2');
			return $this->db->get('tbl_pts_7')->result_array();
		}

		//----End PTS 2----//

//---End Model Untuk PTS----//

//---Model Untuk PAS---//

		//Simpan PAT dan PAS
		public function simpanpas7($data)
		{
			return $this->db->INSERT('tbl_pas_7', $data);
		}

		//HapusPAT dan PAS
		public function hapuspas7($id)
		{
			$this->db->delete('tbl_pas_7', ['id' => $id]);
	        return true;
		}

		//Edit PTS1 dan PTS2
		public function simpanpas7edit($data,$id)
		{
			$this->db->where('id', $id);
			return $this->db->update('tbl_pas_7', $data);
		}

		//----PAT----//
		public function getNilaiPat_7() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAT');
			return $this->db->get('tbl_pas_7')->result_array();
		}

		//----End PAT----//

		//----PAS----//
		public function getNilaiPas_7() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAS');
			return $this->db->get('tbl_pas_7')->result_array();
		}

		//----End PAS----//


	//######################---End Model Kelas 7---###########################//



	//####################---Model untuk kelas 8---############################//

		public function simpanpts8($data)
		{
		return $this->db->INSERT('tbl_pts_8', $data);
		}

		//Edit PTS1 dan PTS2
		public function simpanpts8edit($data,$id)
		{
			$this->db->where('id', $id);
			return $this->db->update('tbl_pts_8', $data);
		}

		//Hapus PTS1 dan PTS2
		public function hapusPts_8($id)
		{
			$this->db->delete('tbl_pts_8', ['id' => $id]);
	        return true;
		}

		//----PTS 1----//
		function getNilaiPts1_8() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS1');
			return $this->db->get('tbl_pts_8')->result_array();
		}

		//----End PTS 1----//

		//----PTS 2----//
		function getNilaiPts2_8() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS2');
			return $this->db->get('tbl_pts_8')->result_array();
		}

		//----End PTS 2----//

//---End Model Untuk PTS----//

//---Model Untuk PAS---//

		public function simpanpas8($data)
		{
		return $this->db->INSERT('tbl_pas_8', $data);
		}

		//Edit PTS1 dan PTS2
		public function simpanpas8edit($data,$id)
		{
			$this->db->where('id', $id);
			return $this->db->update('tbl_pas_8', $data);
		}

		//Hapus PTS1 dan PTS2
		public function hapusPas_8($id)
		{
			$this->db->delete('tbl_pas_8', ['id' => $id]);
	        return true;
		}

		//----PAT----//
		function getNilaiPat_8() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAT');
			return $this->db->get('tbl_pas_8')->result_array();
		}

		//----End PAT----//

		//----PAS----//
		function getNilaiPas_8() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAS');
			return $this->db->get('tbl_pas_8')->result_array();
		}

		//----End PAS----//



	//######################---End Model Kelas 8---###########################//



	
	//#################---Model untuk kelas 9---###############################//


		//Simpan PTS1 dan PTS2
		public function simpanpts9($data)
		{
			return $this->db->INSERT('tbl_pts_9', $data);
		}

		//Edit PTS1 dan PTS2
		public function simpanpts9edit($data,$id)
		{
			$this->db->where('id', $id);
			return $this->db->update('tbl_pts_9', $data);
		}

		//Hapus PTS1 dan PTS2
		public function hapusPts_9($id)
		{
			$this->db->delete('tbl_pts_9', ['id' => $id]);
	        return true;
		}

		//----PTS 1----//
		function getNilaiPts1_9() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS1');
			return $this->db->get('tbl_pts_9')->result_array();
		}

		//----End PTS 1----//

		//----PTS 2----//
		function getNilaiPts2_9() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PTS2');
			return $this->db->get('tbl_pts_9')->result_array();
		}

		//----End PTS 2----//

//---End Model Untuk PTS----//

//---Model Untuk PAS---//

		public function simpanpas9($data)
		{
			return $this->db->INSERT('tbl_pas_9', $data);
		}

		//Edit PTS1 dan PTS2
		public function simpanpas9edit($data,$id)
		{
			$this->db->where('id', $id);
			return $this->db->update('tbl_pas_9', $data);
		}

		//Hapus PTS1 dan PTS2
		public function hapusPas_9($id)
		{
			$this->db->delete('tbl_pas_9', ['id' => $id]);
	        return true;
		}

		//----PAT----//
		function getNilaiPat_9() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAT');
			return $this->db->get('tbl_pas_9')->result_array();
		}

		//----End PAT----//

		//----PAS----//
		function getNilaiPas_9() 
		{
			$this->db->order_by('id', 'DESC');
			$this->db->where('kategori', 'PAS');
			return $this->db->get('tbl_pas_9')->result_array();
		}

		//----End PAS----//



	//######################---End Model Kelas 9---###########################//
}