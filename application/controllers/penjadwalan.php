<?php 


class Penjadwalan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_penjadwalan');
		$this->load->model('m_petugas');
		$this->load->model('mnotifikasi');
		$this->load->helper('url','form');
		$this->load->library('m_pdf');

	}
	
	function penjadwalan($idpegawai){
		$where = array('idpegawai' => $idpegawai);
		 $data['query']=$this->m_petugas->datauser()->result();
		 $data['qry']= $this->m_petugas->edata($idpegawai)->result();
		 $this->load->view('penjadwalan',$data);
	}

	function updatepegawai(){
		$np_pegawai          =    $this->input->post('np_pegawai');
		$nama_pegawai        =    $this->input->post('nama_pegawai');
		$nohp_pegawai        =    $this->input->post('nohp_pegawai');
		$email               =    $this->input->post('email');
		$s_jabatan           =    $this->input->post('s_jabatan');
		$status              =    "Tidak Terjadwalkan";
		
		$data = array(
		'np_pegawai'    => $np_pegawai,
		'nama_pegawai'  => $nama_pegawai,
		'nohp_pegawai'  => $nohp_pegawai,
		'email'         => $email,
		's_jabatan'     => $s_jabatan,
		'status'        => $status
		);
	      $this->m_penjadwalan->update_data($data,'pegawai');
	      redirect('notifikasi/notifikasijadwal');  
	}

	function login(){
        $this->load->view('login2');
    }
		function updatepegawai1(){
		 $cekbiodata =  $this->m_penjadwalan->pegawaiu();
	     $id = $cekbiodata->row()->idpegawai;
	     $cekbiodata =  $this->m_penjadwalan->pegawaiu();
	     $st = $cekbiodata->row()->status_j;
	     $data = array(
			'idpegawai' => $id,
			'status' => $st
			);
	      $this->m_penjadwalan->update_data($data,'pegawai');
	      redirect('notifikasi/notif3');  
	      // redirect('penjadwalan/dpenjadwalan'); 
	}
	 function reschedule()
	 {
	 	$data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] =$this->mnotifikasi->notif_count1();  //menghitung jumlah post
        $data['notifikasi'] =$this->mnotifikasi->getnotifikasi1();
	 	$data['qry'] = $this->m_petugas->data()->result();
	 	$this->load->view('approve_resekejul',$data);
	 	$tgldv=time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que=$this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach($que as $newque){
            $id=$newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
	 }

	 function Approve_resekejul($idpegawai){
	 	$where = array('idpegawai' => $idpegawai);
	 	$data['qry'] = $this->m_petugas->data1($idpegawai)->result();
	 	$this->load->view('approve_edit',$data);
	 }
	function dpenjadwalan(){
		$data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] =$this->mnotifikasi->notif_count1();  //menghitung jumlah post
        $data['notifikasi'] =$this->mnotifikasi->getnotifikasi1();
		$data['qry']=$this->m_petugas->getPetugas()->result();
		$this->load->view('jadwalpetugas',$data);
		  $tgldv=time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que=$this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach($que as $newque){
            $id=$newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
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
		$tgl_tugas2 = $this->input->post('tgl_tugas2');
		$jmlhari  = ((abs(strtotime ($tgl_tugas1) - strtotime ($tgl_tugas2)))/(60*60*24));
		$status_j = "Telah Terjadwalkan";
		$idpegawai = $this->input->post('idpegawai');
		$idakun  = $this->input->post('idakun');
	    // $uang_tf = number_format($uang_t, 2, ',', ' ');
		$data = array(
			'nip' => $nip,
			'nama_surveyor' => $nama_surveyor,
			'tgl_tugas1' => $tgl_tugas1,
			'tgl_tugas2' => $tgl_tugas2,
			'jmlhari' => $jmlhari,
			'status_j'=>$status_j,
			'idpegawai'=>$idpegawai,
			'idakun'=>$idakun
			);
		$this->m_penjadwalan->input($data,'penjadwalan');
		// redirect('notifikasi/tambah');
		redirect('penjadwalan/updatepegawai1');
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
	function resekejuljadwal($idpenjadwalan){
		$where = array('idpenjadwalan' => $idpenjadwalan);
		$data['query'] = $this->m_penjadwalan->edit_data($where,'penjadwalan')->result();
		$this->load->view('resekejuljadwal',$data);
	}
	// function edit($idresi){
	// 	$where = array('idresi' => $idresi);
	// 	$data['biodata'] = $this->m_data->edit_data($where,'biodata')->result();
	// 	$this->load->view('edit_biodata',$data);
	// }
	function update(){
		// $idpenjadwalan= $this->input->post('idpenjadwalan');
		$nip = $this->input->post('nip');
		$nama_surveyor = $this->input->post('nama_surveyor');
		$tgl_tugas1 = $this->input->post('tgl_tugas1');
		$tgl_tugas2 = $this->input->post('tgl_tugas2');
		$jmlhari  = ((abs(strtotime ($tgl_tugas1) - strtotime ($tgl_tugas2)))/(60*60*24));
		$status_j = $this->input->post('status_j');
		$idpegawai = $this->input->post('idpegawai');
	    // $uang_tf = number_format($uang_t, 2, ',', ' ');
		$data = array(
			'nip' => $nip,
			'nama_surveyor' => $nama_surveyor,
			'tgl_tugas1' => $tgl_tugas1,
			'tgl_tugas2' => $tgl_tugas2,
			'jmlhari' => $jmlhari,
			'status_j'=>$status_j,
			'idpegawai'=>$idpegawai
			);
	  //  $where = array('idpenjadwalan' => $idpenjadwalan);
		$this->m_penjadwalan->update($data,'penjadwalan');
	    redirect('penjadwalan/reschedule');
	}
}

?>