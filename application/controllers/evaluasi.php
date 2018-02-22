<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Evaluasi extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_evaluasi');
		$this->load->model('m_hasil');
		$this->load->model('m_data');
		$this->load->library('m_pdf');
		$this->load->model('mnotifikasi');
		$this->load->helper('url');
 
	}
	function data(){
		 $data['query'] = $this->m_evaluasi->datape()->result();
	     $this->load->view('dataevaluasi',$data);
	}
	function nilai_ev(){
		$data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] =$this->mnotifikasi->notif_count1();  //menghitung jumlah post
        $data['notifikasi'] =$this->mnotifikasi->getnotifikasi1();
		$data['qry'] = $this->m_evaluasi->Pram_Nilai()->result();    
		 $this->load->view('detailnilai/nilai_evaluasi',$data);
		 $tgldv=time();

        $que=$this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach($que as $newque){
            $id=$newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
	}
	 function detailnilai(){
       
        $data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] =$this->mnotifikasi->notif_count2();  //menghitung jumlah post
        $data['notifikasi'] =$this->mnotifikasi->getnotifikasi2();
        $data['qry'] = $this->m_hasil->detail_penilaian();
        $this->load->view('detailnilai/nilai_evaluasi',$data);
         $tgldv=time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que=$this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach($que as $newque){
            $id=$newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }

	function evaluasi_p($idkegiatanusaha){
		$where = array('idkegiatanusaha' => $idkegiatanusaha);
		$data['query'] = $this->m_evaluasi->data($idkegiatanusaha)->result();
		$data['qry'] = $this->m_evaluasi->dana($idkegiatanusaha);
		
		$this->load->view('evaluasi',$data);
	}
	function penNilai($idkegiatanusaha)
	{
    $where = array('idkegiatanusaha' => $idkegiatanusaha);
    $data['qry'] = $this->m_evaluasi->Ambil_nilai($idkegiatanusaha)->result();
    $this->load->view('p_evaluasi',$data);
	}
    
    function evaluasi()
    {
    	
    	$data['qey'] = $this->m_hasil->datad()->result();
    	$this->load->view('dataev',$data);

    }
    function datamitra($idkegiatanusaha)
    {
	$where = array('idkegiatanusaha' => $idkegiatanusaha);
	$data['query'] = $this->m_evaluasi->datakes1($idkegiatanusaha)->result();
	$data['cek']   = $this->m_evaluasi->data_biodata($idkegiatanusaha)->result();
  $data['qry']   = $this->m_evaluasi->data_perusahaan($idkegiatanusaha)->result();
	$this->load->view('dataadministrasi1',$data);
    }

    function dataukm(){
    	$data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] =$this->mnotifikasi->notif_count1();  //menghitung jumlah post
        $data['notifikasi'] =$this->mnotifikasi->getnotifikasi1();
    	$data['query'] = $this->m_evaluasi->data_evaluasi_p()->result();
    	$this->load->view('dataukmcek',$data);
    	$tgldv=time();

        $que=$this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach($que as $newque){
            $id=$newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }
    function evaluasi_score()
    {
    	$data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] =$this->mnotifikasi->notif_count1();  //menghitung jumlah post
        $data['notifikasi'] =$this->mnotifikasi->getnotifikasi1();
    	
    	
    	$data['ceklis'] = $this->m_evaluasi->Pram_Nilai();
    	$this->load->view('detailnilai/nilai_evaluasi1',$data);
    	$tgldv=time();

        $que=$this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach($que as $newque){
            $id=$newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }

    }
    function login()
    {
    	$this->load->view('login2');
    }
    function proposal_score()
    {
    	$data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] =$this->mnotifikasi->notif_count1();  //menghitung jumlah post
        $data['notifikasi'] =$this->mnotifikasi->getnotifikasi1();
    	
        $data['ceklis'] = $this->m_evaluasi->data_admis()->result();
    	$this->load->view('detailnilai/nilai_proposal',$data);

    	$tgldv=time();

        $que=$this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach($que as $newque){
            $id=$newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }

    }

	  private function _gen_pdf($html,$paper='A4')
    {
     ob_end_clean();
     $pdf = $this->m_pdf->load();
     $pdf->AddPage('P');
     $pdf->WriteHTML($html);
     $pdf->Output();
    }
    /////////////////////////////////////////////////////////
    public function doprint($idevaluasi)
    {
     $where = array('idevaluasi' => $idevaluasi);
     $data['query'] = $this->m_evaluasi->cetak($idevaluasi)->result();
     $output = $this->load->view('printevalusiproposal',$data, TRUE);
     return $this->_gen_pdf($output);
    }
	function tambah()

	{ 
    $idevaluasi          = $this->input->post('idevaluasi');
	$thn_anggaran        = $this->input->post('thn_anggaran'); 
	$ktkb                = $this->input->post('ktkb');
	$nm_usaha            = $this->input->post('nm_usaha');
	$nm_pemilik          = $this->input->post('nm_pemilik');
	$p_binaan_pk         = $this->input->post('p_binaan_pk');
	$kd_binaan           = $this->input->post('kd_binaan');
	$alamat_perusahaan   = $this->input->post('alamat_perusahaan');
	$status_usaha        = $this->input->post('status_usaha');
	$notlp_perusahaan    = $this->input->post('notlp_perusahaan');
	$thn_berdiri         = $this->input->post('thn_berdiri');
	$jml_karyawan        = $this->input->post('jml_karyawan');
	$jml_pengurus        = $this->input->post('jml_pengurus');
	$neraca              = $this->input->post('neraca');
	$nilai_asset         = $this->input->post('nilai_asset');
	$nilai_asset_tahun   = $nilai_asset*12;
	$laba_bersih         = $this->input->post('laba_bersih');
	$npwp                = $this->input->post('npwp');
	$kendala_usaha       = $this->input->post('kendala_usaha');
	$jml_permohonan      = $this->input->post('jml_permohonan');
	$penggunaan_modal    = $this->input->post('penggunaan_modal');
	$srs_tansie          = $this->input->post('srs_tansie');
	$rasio_likuiditas    = $this->input->post('rasio_likuiditas');
	$rasio_aktifitas     = $this->input->post('rasio_aktifitas');
	$legalitas           = $this->input->post('legalitas');
	$pemasaran           = $this->input->post('pemasaran');
	$tgl_evaluasi        = $this->input->post('tgl_evaluasi');
	$jenis_usaha         = $this->input->post('jenis_usaha');
    $perkiraan_dana      = $this->input->post('perkiraan_dana');
    $idkegitanusaha      = $this->input->post('idkegitanusaha');
		  $data = array(
		  'idevaluasi'           =>$idevaluasi,	
          'thn_anggaran'         =>$thn_anggaran,
          'ktkb'                 =>$ktkb,
          'nm_usaha'             =>$nm_usaha,
          'nm_pemilik'           =>$nm_pemilik,
          'jenis_usaha'          =>$jenis_usaha,
          'p_binaan_pk'          =>$p_binaan_pk,
          'kd_binaan'            =>$kd_binaan,
          'alamat_perusahaan'    =>$alamat_perusahaan,
          'status_usaha'         =>$status_usaha,
          'notlp_perusahaan'     =>$notlp_perusahaan,
          'thn_berdiri'          =>$thn_berdiri,
          'jml_karyawan'         =>$jml_karyawan,
          'jml_pengurus'         =>$jml_pengurus,
          'neraca'               =>$neraca,
          'nilai_asset'          =>$nilai_asset,
          'nilai_asset_tahun'    =>$nilai_asset_tahun,
          'laba_bersih'          =>$laba_bersih,
          'npwp'                 =>$npwp,
          'kendala_usaha'        =>$kendala_usaha,
          'jml_permohonan'       =>$jml_permohonan,
          'penggunaan_modal'     =>$penggunaan_modal,
          'srs_tansie'           =>$srs_tansie,
          'rasio_likuiditas'     =>$rasio_likuiditas,
          'rasio_aktifitas'      =>$rasio_aktifitas,
		  'legalitas'            =>$legalitas,
		  'pemasaran'            =>$pemasaran,
		  'tgl_evaluasi'         =>$tgl_evaluasi,
		  'perkiraan_dana'       =>$perkiraan_dana,
		  'idkegitanusaha'       =>$idkegitanusaha	
        );  
		 
		  $this->m_evaluasi->input_data($data,'evaluasi');
		  redirect('evaluasi/detailnilai');
	}
	// function p_evaluasi($idpenilaian){
	//   $where = array('idpenilaian' => $idpenilaian);
	//   $data['qry'] = $this->m_hasil->edit_data($where,'penilaian')->result();
 //      $this->load->view('p_evaluasi');
	// }
	
	function hapus($idevaluasi){
		$where = array('idevaluasi' => $idevaluasi);
		$this->m_data->hapus_data($where,'evaluasi');
		redirect('penilaian/evaluasi');
	}

	function penolakan(){
		
	}


}
?>