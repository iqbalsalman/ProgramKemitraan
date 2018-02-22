<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Uang_perjalanandinas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_uangp');
        $this->load->helper('url');			
    }
    // function index() {
    //    $data['query'] = $this->m_uangp->tampil_data()->result();
	   //  $this->load->view('datapetugas',$data);
    // }
    function uangp(){
    	$this->load->view('uang_perjalanandinas');
    }
	
	function insert(){
		$golongan_jabatan          =    $this->input->post('golongan_jabatan');
		$kode_anggaran             =    $this->input->post('kode_anggaran');
		$uang_h                    =    $this->input->post('uang_h');
		$uangpenginapan            =    $this->input->post('uangpenginapan');
		$uang_tiket                =    $this->input->post('uang_tiket');
		$transportasi              =    $this->input->post('transportasi');
		
		$data = array(
		'golongan_jabatan'    => $golongan_jabatan,
		'kode_anggaran'       => $kode_anggaran,
		'uang_h'              => $uang_h,
		'uangpenginapan'      => $uangpenginapan,
		'uang_tiket'          => $uang_tiket,
		'transportasi'        => $transportasi

		);
		
		$this->m_uangp->insert_data($data,'anggaran_p');
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">data  berhasil disimpan !!</div></div>");
		redirect('petugas/indexs');
	}
	function hapus($idpegawai){
		$where = array('idpegawai' => $idpegawai);
		$this->m_petugas->hapus_data($where,'anggaran_p');
		redirect('dashboard/home');
	}

	function edit($idpegawai){
		$where = array('idpegawai' => $idpegawai);
		$data['query'] = $this->m_petugas->edit_data($where,'pegawai')->result();
		$this->load->view('editspegawai',$data);
	}
	function update(){
	    $np_pegawai          =    $this->input->post('np_pegawai');
		$nama_pegawai        =    $this->input->post('nama_pegawai');
		$nohp_pegawai        =    $this->input->post('nohp_pegawai');
		$email        =    $this->input->post('email');
		$s_jabatan        =    $this->input->post('s_jabatan');
		
		$data = array(
		'np_pegawai'    => $np_pegawai,
		'nama_pegawai'  => $nama_pegawai,
		'nohp_pegawai'  => $nohp_pegawai,
		'email'         => $email,
		's_jabatan'     => $s_jabatan
		);
		$where = array('idpegawai' => $idpegawai);
		$this->m_petugas->update_data($where,$data,'pegawai');
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">data  berhasil di Update!!</div></div>");
		redirect('petugas/index');
	}
}