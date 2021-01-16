<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Kelas9 extends CI_Controller
{
	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('nilai_model');
	}

	public function simpan_pts()
	{
		$nama = $this->input->post('nama', true);
		$nis = $this->input->post('nis', true);
		$kategori = $this->input->post('kategori', true);
		$ipa = $this->input->post('ipa', true);
		$ips = $this->input->post('ips', true);
		$mtk = $this->input->post('mtk', true);
		$bindo = $this->input->post('bindo', true);
		$bing = $this->input->post('bing', true);
		$bjawa = $this->input->post('bjawa', true);
		$pkn = $this->input->post('pkn', true);
		$sbk = $this->input->post('sbk', true);
		$pjok = $this->input->post('pjok', true);
		$tik = $this->input->post('tik', true);

		$data = array(
			'nama_siswa' => $nama,
			'nis_siswa' => $nis,
			'kategori' => $kategori,
			'ipa' => $ipa,
			'ips' => $ips,
			'matematika' => $mtk,
			'bhs_indo' => $bindo,
			'bhs_ing' => $bing,
			'bhs_jawa' => $bjawa,
			'pkn' => $pkn,
			'sbk' => $sbk,
			'pjok' => $pjok,
			'tik' => $tik
		);

        $this->nilai_model->simpanpts9($data);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		if ($kategori == 'PTS1') {
			redirect('admin/kelas9/pts1');
		} else {
			redirect('admin/kelas9/pts2');
		}
	}

	public function simpan_edit_pts($id)
	{
		$nama = $this->input->post('nama', true);
		$nis = $this->input->post('nis', true);
		$kategori = $this->input->post('kategori', true);
		$ipa = $this->input->post('ipa', true);
		$ips = $this->input->post('ips', true);
		$mtk = $this->input->post('mtk', true);
		$bindo = $this->input->post('bindo', true);
		$bing = $this->input->post('bing', true);
		$bjawa = $this->input->post('bjawa', true);
		$pkn = $this->input->post('pkn', true);
		$sbk = $this->input->post('sbk', true);
		$pjok = $this->input->post('pjok', true);
		$tik = $this->input->post('tik', true);

		$data = array(
			'nama_siswa' => $nama,
			'nis_siswa' => $nis,
			'kategori' => $kategori,
			'ipa' => $ipa,
			'ips' => $ips,
			'matematika' => $mtk,
			'bhs_indo' => $bindo,
			'bhs_ing' => $bing,
			'bhs_jawa' => $bjawa,
			'pkn' => $pkn,
			'sbk' => $sbk,
			'pjok' => $pjok,
			'tik' => $tik
		);

        $this->nilai_model->simpanpts9edit($data,$id);
		$this->session->set_flashdata('flash', 'Diubah');
		if ($kategori == 'PTS1') {
			redirect('admin/kelas9/pts1');
		} else {
			redirect('admin/kelas9/pts2');
		}
	}

	public function hapuspts1($id)
	{
		$this->nilai_model->hapusPts_9($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/kelas9/pts1');
	}

	public function hapuspts2($id)
	{
		$this->nilai_model->hapusPts_9($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/kelas9/pts2');
	}

	//Controller PTS 1
	public function pts1()
	{
		$data['nilai'] = $this->nilai_model->getNilaiPts1_9();
		$data['judul'] = 'Data Nilai PTS 1 Kelas 9';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas9/pts1');
		$this->load->view('admin/footer');
	}

	//End Controller PTS 1

	//##########################################################//

	//Controller PTS 2
	public function pts2()
	{
		$data['nilai'] = $this->nilai_model->getNilaiPts2_9();
		$data['judul'] = 'Data Nilai PTS 2 Kelas 9';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas9/pts2', $data);
		$this->load->view('admin/footer');
	}

	//End Controller PTS 2

	//###########################--End PTS--######################################//

	public function simpan_pas()
	{
		$nama = $this->input->post('nama', true);
		$nis = $this->input->post('nis', true);
		$kategori = $this->input->post('kategori', true);
		$ipa = $this->input->post('ipa', true);
		$ips = $this->input->post('ips', true);
		$mtk = $this->input->post('mtk', true);
		$bindo = $this->input->post('bindo', true);
		$bing = $this->input->post('bing', true);
		$bjawa = $this->input->post('bjawa', true);
		$pkn = $this->input->post('pkn', true);
		$sbk = $this->input->post('sbk', true);
		$pjok = $this->input->post('pjok', true);
		$tik = $this->input->post('tik', true);

		$data = array(
			'nama_siswa' => $nama,
			'nis_siswa' => $nis,
			'kategori' => $kategori,
			'ipa' => $ipa,
			'ips' => $ips,
			'matematika' => $mtk,
			'bhs_indo' => $bindo,
			'bhs_ing' => $bing,
			'bhs_jawa' => $bjawa,
			'pkn' => $pkn,
			'sbk' => $sbk,
			'pjok' => $pjok,
			'tik' => $tik
		);

        $this->nilai_model->simpanpas9($data);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		if ($kategori == 'PAT') {
			redirect('admin/kelas9/pat');
		} else {
			redirect('admin/kelas9/pas');
		}
	}

	public function simpan_edit_pas($id)
	{
		$nama = $this->input->post('nama', true);
		$nis = $this->input->post('nis', true);
		$kategori = $this->input->post('kategori', true);
		$ipa = $this->input->post('ipa', true);
		$ips = $this->input->post('ips', true);
		$mtk = $this->input->post('mtk', true);
		$bindo = $this->input->post('bindo', true);
		$bing = $this->input->post('bing', true);
		$bjawa = $this->input->post('bjawa', true);
		$pkn = $this->input->post('pkn', true);
		$sbk = $this->input->post('sbk', true);
		$pjok = $this->input->post('pjok', true);
		$tik = $this->input->post('tik', true);

		$data = array(
			'nama_siswa' => $nama,
			'nis_siswa' => $nis,
			'kategori' => $kategori,
			'ipa' => $ipa,
			'ips' => $ips,
			'matematika' => $mtk,
			'bhs_indo' => $bindo,
			'bhs_ing' => $bing,
			'bhs_jawa' => $bjawa,
			'pkn' => $pkn,
			'sbk' => $sbk,
			'pjok' => $pjok,
			'tik' => $tik
		);

        $this->nilai_model->simpanpas9edit($data,$id);
		$this->session->set_flashdata('flash', 'Diubah');
		if ($kategori == 'PAT') {
			redirect('admin/kelas9/pat');
		} else {
			redirect('admin/kelas9/pas');
		}
	}

	public function hapuspat($id)
	{
		$this->nilai_model->hapusPas_9($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/kelas9/pat');
	}

	public function hapuspas($id)
	{
		$this->nilai_model->hapusPas_9($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/kelas9/pas');
	}

	//Controller PAT
	public function pat()
	{
		$data['nilai'] = $this->nilai_model->getNilaiPat_9();
		$data['judul'] = 'Data Nilai PAT Kelas 9';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas9/pat', $data);
		$this->load->view('admin/footer');
	}

	//End Controller PAT

	//##########################################################//

	//Controller PAS
	public function pas()
	{
		$data['nilai'] = $this->nilai_model->getNilaiPas_9();
		$data['judul'] = 'Data Nilai PAS Kelas 9';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/kelas9/pas', $data);
		$this->load->view('admin/footer');
	}

	//End Controller PAS
}