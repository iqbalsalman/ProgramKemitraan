<?php
class Aprovel extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_approve');
		$this->load->model('m_survei3');
		$this->load->model('m_select');
		$this->load->helper('url');

	}
 
	// function index(){
	// 	$data['query'] = $this->m_data->tampil_data()->result();
	// 	$data['qry'] = $this->db->order_by('idresi desc')->limit(1)->get('perusahaan')->row();
	// 	$data['provinsi']=$this->m_select->provinsi();
	// 	$this->load->view('Data_perusahaan',$data);		
	// }
	function persetujuan($idpenilaian){
		$where =array('idpenilaian' => $idpenilaian );
		 $data['qry']= $this->m_approve->data($idpenilaian)->result();
         $this->load->view('p_kbl',$data);
	}
	function login(){
        $this->load->view('login2');
    }

	function index(){
		$data['qry']= $this->m_approve->tampil()->result();
		$this->load->view('datapersetujuan',$data);
	}

	function insert(){
		$nama             =   $this->input->post('nama');
		$nik              =   $this->input->post('nik');
		$alamat           =   $this->input->post('alamat');
		$status           =   "Dana Telah Disetujui";
		$dana_cmb         =   $this->input->post('dana_cmb');

		$data = array(              
	    'nama'             =>  $nama,                
		'nik'              =>  $nik,               
		'alamat'           =>  $alamat,          
		'status'           =>  $status,       
		'dana_cmb'         =>  $dana_cmb                  
			);
		$this->m_approve->input_data($data,'p_pkbl');
		 $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil di simpan !!</div></div>"); //
		 redirect('aprovel/index');
	}
 


}

?>