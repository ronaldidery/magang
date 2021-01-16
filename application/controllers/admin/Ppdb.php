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

    public function hapus($id)
    {
        $this->ppdb_model->hapusDataPPDB($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/ppdb');
    } 

    public function print_data()
    {
        $data['pendaftaran'] = $this->ppdb_model->getAllDataPendaftaran("pendaftar");
        $this->load->view('admin/ppdb/print_pendaftaran', $data);
    } 

    public function print_data_pendaftar($id)
    {
        $data['value'] = $this->ppdb_model->getDataPendaftaranBy($id);
        $this->load->view('admin/ppdb/formulir_pendaftaran', $data);
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

    public function excel()
    {
        $data['pendaftaran'] = $this->ppdb_model->getAllDataPendaftaran();
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');
        $object = new PHPExcel();

        $object->getProperties()->setCreator("MTs Bima Bhakti Pertiwi");
        $object->getProperties()->setLastModifiedBy("MTs Bima Bhakti Pertiwi");
        $object->getProperties()->setTitle("Daftar Pendaftaran");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->setCellValue('A1', 'DAFTAR PENDAFTARAN PESERTA DIDIK BARU');
        $object->getActiveSheet()->setCellValue('A2', 'No');
        $object->getActiveSheet()->setCellValue('B2', 'NAMA');
        $object->getActiveSheet()->setCellValue('C2', 'NISN');
        $object->getActiveSheet()->setCellValue('D2', 'NIK');
        $object->getActiveSheet()->setCellValue('E2', 'NO. TELEPON');

        $baris = 3;
        $no = 1;

        foreach ($data['pendaftaran'] as $value) {
            $object->getActiveSheet()->setCellValue('A'.$baris, $no++);
            $object->getActiveSheet()->setCellValue('B'.$baris, $value['nama']);
            $object->getActiveSheet()->setCellValue('C'.$baris, $value['nisn']);
            $object->getActiveSheet()->setCellValue('D'.$baris, $value['nik']);
            $object->getActiveSheet()->setCellValue('E'.$baris, $value['no_tlp']);

            $baris++;
        }

        $filename="Daftar_pendaftaran".'.xlsx';

        $object->getProperties()->setTitle("Daftar Pendaftaran");

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');

        $writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}
