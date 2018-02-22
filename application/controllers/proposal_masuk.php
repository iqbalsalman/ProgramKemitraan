<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Proposal_masuk extends CI_Controller{
 
	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_masukproposal');
		$this->load->library('m_pdf');
		// $this->load->model('m_select');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['query']=$this->m_masukproposal->tampil_proposal_m_p();
        $this->load->view('dataproposalmasuk',$data);
	}
	function login(){
        $this->load->view('login2');
    }
    
     // Belum jelas
	// function data(){
	// 	$data['query']=$this->m_masukproposal->tampil_data()->result();
 //        $this->load->view('dataproposalmasukp',$data);
	// }


	function proposal ()
	{
		$table='proposal_masuk';
	    $data['kodeunik'] = $this->m_masukproposal->getkodeunik($table);
	    $this->load->view('proposalmasuk',$data);
    }

   //tambah data proposal masuk
	function tambah() 
	{
		$table           = 'proposal_masuk';
		$cekbiodata      =  $this->m_masukproposal->relasi_akun_proposal();
	    $idakun          =  $cekbiodata->row()->idakun;     
	    $kode            =  $this->m_masukproposal->getkodeunik($table);
	    $tglmasuk        =  $this->input->post('tglmasuk');
	    $nik             =  $this->input->post('nik');
        $nama            =  $this->input->post('nama');
        $tlhp            =  $this->input->post('tlhp');
        $nlpcmb          =  $this->input->post('nlpcmb');
        $alamatcmb       =  $this->input->post('alamatcmb');
        $namadinas       =  $this->input->post('nama_dinas');
        $tlphp           =  $this->input->post('tlphp');
        $almatdinas      =  $this->input->post('almatdinas');
        $nosurat_pemohon =  $this->input->post('nosurat_pemohon');
        $perihal         =  $this->input->post('perihal');
  
       //array untuk input
	    $data = array(
		  	'idakun'          =>$idakun,
		  	'resi_p'          =>$kode,
		  	'tglmasuk'        =>$tglmasuk,
		  	'nik'             =>$nik,
		  	'nama'            =>$nama,
            'tlhp'            =>$tlhp,
            'nlpcmb'          =>$nlpcmb,
            'alamatcmb'       =>$alamatcmb,
            'nama_dinas'       =>$namadinas,
            'tlphp'           =>$tlphp,
            'almatdinas'      =>$almatdinas,
		  	'nosurat_pemohon' =>$nosurat_pemohon,
		  	'perihal'         =>$perihal
         );

	    // return $data;

		$this->m_masukproposal->input_data($table,$data);
		redirect('dashboard/sekertariat');
		        
    }

    //Reposrt PDF
    private function _gen_pdf($html,$paper='A4')
    {
       ob_end_clean();
       $pdf = $this->m_pdf->load();
       $pdf->AddPage('P');
       $pdf->WriteHTML($html);
       $pdf->Output();
    }
/////////////////////////////////////////////////////////
    public function doprint($idproposal)
    {
    $where = array('idproposal' => $idproposal);
    $data['query'] = $this->m_masukproposal->cetak($idproposal);
    $output = $this->load->view('cetakproposal',$data, TRUE);
    return $this->_gen_pdf($output);
    }
 
	
	
	function hapus($idproposal){
		$where = array('idproposal' => $idproposal);
		$this->m_masukproposal->hapus_data($where,'proposal_masuk');
		// redirect('/index');
	}
}

?>