<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Petugas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_petugas');
        $this->load->helper('url');			
    }
    function index() {
       $data['query'] = $this->m_petugas->tampil_data()->result();
	    $this->load->view('datapetugas',$data);
    }
    function tambah_petugas(){
    	$this->load->view('tambah_petugas');
    }
    function login(){
        $this->load->view('login2');
    }
	
	function insert(){
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
		
		$this->m_petugas->insert_data($data,'pegawai');
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">data  berhasil disimpan !!</div></div>");
		redirect('petugas/index');
	}
	function hapus($idpegawai){
		$where = array('idpegawai' => $idpegawai);
		$this->m_petugas->hapus_data($where,'pegawai');
		redirect('petugas/index');
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