<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url"); 
        $this->load->model('ppdb_model'); 
    }

	public function index() 
    {
        $data['judul'] = 'Data Pendaftar';
        $data['pendaftaran'] = $this->ppdb_model->getAllDataPendaftaran();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/ppdb/index', $data);
        $this->load->view('admin/footer');
    } 

    public function print_data()
    {
        $data['pendaftaran'] = $this->ppdb_model->getAllDataPendaftaran("pendaftar");
        $this->load->view('admin/ppdb/print_pendaftaran', $data);
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['pendaftaran'] = $this->ppdb_model->getAllDataPendaftaran();
        $this->load->view('admin/ppdb/laporan_pdf', $data);

        $paper_size = 'A4';
        $orientation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan_ppdb.pdf", array('attachment' =>0));
    }
}
