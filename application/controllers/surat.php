<?php 


class Penjadwalan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_penjadwalan');
		$this->load->helper('url','form');
		$this->load->library('m_pdf');

	}
	
	function penjadwalan(){
		$this->load->view('penjadwalan');
	}

	function index(){
		$data['penjadwalan'] = $this->m_penjadwalan->tampil_data()->result();
		$this->load->view('v_penjadwalan',$data);
	}
	// function surat_dinas(){
	// 	// $data['query'] = $this->m_penjadwalan->suratdinas();
	// 	$this->load->view('suratperjalanan');
	// }
	function insert(){
		$nip = $this->input->post('nip');
		$nama_surveyor = $this->input->post('nama_surveyor');
		$tgl_tugas1 = $this->input->post('tgl_tugas1');
		$uang_t = $this->input->post('uang_t');
		$tgl_tugas2 = $this->input->post('tgl_tugas2');
		$jmlhari  = ((abs(strtotime ($tgl_tugas1) - strtotime ($tgl_tugas2)))/(60*60*24));
	    $jml_transport = $uang_t*$jmlhari;
	    // $uang_tf = number_format($uang_t, 2, ',', ' ');
		$data = array(
			'nip' => $nip,
			'nama_surveyor' => $nama_surveyor,
			'tgl_tugas1' => $tgl_tugas1,
			'uang_t' => $uang_t,
			'tgl_tugas2' => $tgl_tugas2,
			'jmlhari' => $jmlhari,
			'jml_transport' => $jml_transport
			);
		$this->m_penjadwalan->input($data,'penjadwalan');
		redirect('notifikasi/tambah');
		}
		private function _gen_pdf($html,$paper='A4')
	{
	 ob_end_clean();
	 $pdf = $this->m_pdf->load();
	 $pdf->AddPage('L');
	 $pdf->WriteHTML($html);
	 $pdf->Output();
	 }
	/////////////////////////////////////////////////////////
	public function doprint($idpenjadwalan)
	{
	 $where = array('idpenjadwalan' => $idpenjadwalan);
	 $data['query'] = $this->m_penjadwalan->cetak($where,'penjadwalan');
	 $output = $this->load->view('jadwalpdf',$data, TRUE);
	 return $this->_gen_pdf($output);
	}

	function hapus($idpenjadwalan){
		$where = array('idpenjadwalan' => $idpenjadwalan);
		$this->m_penjadwalan->hapus_data($where,'penjadwalan');
		redirect('penjadwalan/index');
	}
	function edit($idpenjadwalan){
		$where = array('idpenjadwalan' => $idpenjadwalan);
		$data['penjadwalan'] = $this->m_penjadwalan->edit_data($where,'penjadwalan')->result();
		$this->load->view('editjadwal',$data);
	}
	function update(){
		$idpenjadwalan = $this->input->post('idpenjadwalan');
	    $nip = $this->input->post('nip');
		$nama_surveyor = $this->input->post('nama_surveyor');
		$tgl_tugas1 = $this->input->post('tgl_tugas1');
		$uang_t = $this->input->post('uang_t');
		$tgl_tugas2 = $this->input->post('tgl_tugas2');
		$jmlhari  = ((abs(strtotime ($tgl_tugas1) - strtotime ($tgl_tugas2)))/(60*60*24));
	    $jml_transport = $uang_t*$jmlhari;
		$data = array(
			'nip' => $nip,
			'nama_surveyor' => $nama_surveyor,
			'tgl_tugas1' => $tgl_tugas1,
			'uang_t' => $uang_t,
			'tgl_tugas2' => $tgl_tugas2,
			'jmlhari' => $jmlhari,
			'jml_transport' => $jml_transport
			);
	    $where = array('idpenjadwalan' => $idpenjadwalan);
		$this->m_penjadwalan->update_data($where,$data,'penjadwalan');
	    redirect('penjadwalan/index');
	}
}

?>