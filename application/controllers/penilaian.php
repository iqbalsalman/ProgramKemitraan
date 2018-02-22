 <?php
class Penilaian extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
        $this->load->library('m_pdf');
        $this->load->model('m_perusahaan');
		$this->load->model('m_kegiatanusaha');
        $this->load->model('m_evaluasi');
        $this->load->model('m_hasil');
         $this->load->model('mnotifikasi'); 
        $this->load->model('m_survei3');
        $this->load->model('m_masukproposal');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['query'] = $this->m_hasil->tampil()->result();
		$this->load->view('datapenilaian',$data);
	}

  //   function evaluasi(){
  //    // $where = array('idevaluasi' => $idevaluasi);
	 // $data['qry'] = $this->m_hasil->edit_data()->result();
  //    $this->load->view('p_evaluasi',$data);
  //   }

    function survei($idsurvei3){
     $where = array('idsurvei3' => $idsurvei3 );
     $data['qry'] = $this->m_hasil->edit($idsurvei3)->result();
     $this->load->view('p_survei',$data);
    }
    function login()
    {
        $this->load->view('login2');
    }

    function mitrabinaan(){
     $data['qry'] = $this->m_hasil->edit()->result();
     $this->load->view('p_penetapan',$data);   
    }
    
    function login(){
        $this->load->view('login2');
    }
   
    function detailnilai1(){
       
        $data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] =$this->mnotifikasi->notif_count2();  //menghitung jumlah post
        $data['notifikasi'] =$this->mnotifikasi->getnotifikasi2();
        $data['ceklis'] = $this->m_hasil->detail_penilaian1();
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
       function detailnilai2(){
       
        $data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] =$this->mnotifikasi->notif_count2();  //menghitung jumlah post
        $data['notifikasi'] =$this->mnotifikasi->getnotifikasi2();
        $data['ceklis'] = $this->m_hasil->detail_penilaian2();
        $this->load->view('detail_penilaian2',$data);
         $tgldv=time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que=$this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach($que as $newque){
            $id=$newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }
function detailnilais(){
     $data['ceklis'] = $this->m_hasil->detail_penilaian();
     $data['qry'] = $this->m_hasil->detail_penilaian1();
     $data['query'] = $this->m_hasil->detail_penilaian2();
     $this->load->view('keseluruhan_nilai',$data);

}
    function update(){


        $idpenilaian      = $this->input->post('idpenilaian');
        $idkegiatanusaha  = $this->input->post('idkegiatanusaha');
    	$status           = $this->input->post('status');
    	$catatan          = $this->input->post('catatan');
        $idevaluasi       = $this->input->post('idevaluasi');
    	$data = array (
            'idpenilaian'    => $idpenilaian,
    		'status'         => $status,
    		'catatan'        => $catatan,
    		'idkegiatanusaha'=> $idkegiatanusaha,
            'idevaluasi'     => $idevaluasi
    		);
         $where = array('idpenilaian' =>$idpenilaian);
    	 $this->m_hasil->update_data($where,$data,'penilaian');
    	 redirect('notifikasi/nofnila2');
    }
     function update_s(){
        $idpenilaian      = $this->input->post('idpenilaian');
        $idkegiatanusaha  = $this->input->post('idkegiatanusaha');
        $status           = $this->input->post('status');
        $catatan          = $this->input->post('catatan');
        $idevaluasi       = $this->input->post('idevaluasi');
        $idsurvei3        = $this->input->post('idsurvei3');
        $data = array (
            'idpenilaian'     => $idpenilaian,
            'idkegiatanusaha' => $idkegiatanusaha,
            'status'          => $status,
            'catatan'         => $catatan,
            'idevaluasi'      => $idevaluasi,
            'idsurvei3'       => $idsurvei3
            
            );
         $where = array('idpenilaian' =>$idpenilaian);
         $this->m_hasil->update_data($where,$data,'penilaian');
        
          redirect('notifikasi/nofnila3');
         // redirect('dashboard/surveyor');
    }
     function update_p2(){
        $cekbiodata =  $this->m_hasil->edit_data();
        $penilaian = $cekbiodata->row()->idpenilaian;
        $query    =  $this->m_hasil->edit_data();
        $kegiatan =  $query->row()->idkegiatanusaha;
        $status      = $this->input->post('status');
        $catatan     = $this->input->post('catatan');
        $data = array (
            'idpenilaian'=> $penilaian,
            'status'=> $status,
            'catatan'=>$catatan,
            'idkegiatanusaha'=>$kegiatan
            );
         $this->m_hasil->update_data($data,'penilaian');
         redirect('dashboard/kepala_pkbl');
    }

    function penolakan(){
		$data['qry'] = $this->m_evaluasi->datapenolak()->result();
    	$this->load->view('datapenilaiansk',$data);
    }

    function surattolak(){
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $tanggal = $this->input->post('tanggal');
        $nopenolakn = $this->input->post('nopenolakn');
        $cek = $this->m_evaluasi->datasi();
        $evaluasi = $cek->row()->idevaluasi;

            $data = array (
            'nama'=> $nama,
            'alamat'=> $alamat,
            'tanggal'=>$tanggal,
            'nopenolakn'=>$nopenolakn,
            'idevaluasi'=>$evaluasi
            );
        $this->m_evaluasi->insert($data,'surat_tolak');
        redirect('dashboard/sekertariat');

    }
    
    function tampilsurat(){
     $data['query']=$this->m_evaluasi->tampilsurat()->result();
     $this->load->view('datasuratp',$data);
      
    }
    function penolakansurat(){
        $table='surat_tolak';
        $data['kodeunik'] = $this->m_evaluasi->getkodeunik($table);
        $data['query'] = $this->m_evaluasi->ubah()->result();
        $this->load->view('surat_tolak',$data);
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
    public function doprint($no_surat)
    {
     $where = array('no_surat' => $no_surat);
     $data['qry'] = $this->m_masukproposal->tampil_data()->result();
     $data['query'] = $this->m_evaluasi->cetakk($where,'surat_tolak');
     $output = $this->load->view('penolakanproposal',$data, TRUE);
     return $this->_gen_pdf($output);
    }

    function datapenilaian(){
        $data['qry']= $this->m_survei3->data()->result();
        $this->load->view('datapenilaianpk',$data);
    }




 
	
 
}
?>