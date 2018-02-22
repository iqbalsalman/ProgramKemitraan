<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

	/*****
     | Notifikasi Facebook Codeigniter dan Bootstrap
     | controller notifikasi
     | by g2tech
	 */
    public function __construct() {
        parent::__construct();
        $this->load->model('mnotifikasi'); 
        $this->load->model('m_masukproposal');  //load model mnotifikasi
         $this->load->model('m_penjadwalan');
         $this->load->model('m_evaluasi');
          $this->load->model('m_hasil');
         $this->load->model('m_akun');
          $this->load->model('m_user2');
        $this->load->helper('form','url');  //load helper ci form dan url
    }

	public function index()
	{
	 //    $data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
  //       $data['jlhnotif'] =$this->mnotifikasi->notif_count();  //menghitung jumlah post
  //       $data['notifikasi'] =$this->mnotifikasi->getnotifikasi(); //menampilkan isi postingan

		// $this->load->view('evaluator',$data); //load view vnotifikasi
  //       $tgldv=time();

  //       //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
  //       $que=$this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

  //       foreach($que as $newque){
  //           $id=$newque->id;
  //           $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
  //           //menghapus otomatis
  //       }

	}

    public function postkan(){
	    $name =  $this->m_akun->tams();
        $nama = $name->row()->username;
		$pesan	= 'Telah membuat akun cmb';    
        $ling =   'http://localhost/pk/index.php/akun/index';
        $nopesan ="01";
        $cekbiodata =  $this->m_akun->tams();
        $penilaian = $cekbiodata->row()->id;

		$data = array(
            'oleh'     => $nama,
            'pesan'     => $pesan,
            'tgl'  => time(),
            'ling' => $ling,
            'nopesan' =>$nopesan,
            'id' =>$penilaian
        );
        $this->mnotifikasi->input_data($data,'t_nitifikasifb');    //menyimpan data ke database melalu model mnotifikasi pada fungsi ginsert
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Berhasil melakukan registrasi, silahkan cek email kamu !!</div></div>");
        redirect('login/index');

    }

        public function p_masuk(){
        $name =  $this->m_akun->tams();
        $nama = $name->row()->username;
        $pesan  = 'Telah melakukan administrasi proposal';    
        $ling =   'http://localhost/pk/index.php/proposal_masuk/data';
        $nopesan ="02";
        $cekbiodata =  $this->m_akun->tams();
        $penilaian = $cekbiodata->row()->id;
        // $cekbiodata =  $this->m_masukproposal->tampil_data();
        // $penilaian = $cekbiodata->row()->idproposal;

        $data = array(
            'oleh'     => $nama,
            'pesan'     => $pesan,
            'tgl'  => time(),
            'ling' => $ling,
            'nopesan' =>$nopesan,
            'id'      =>$penilaian
            // 'idproposal' =>$penilaian
        );
        $this->mnotifikasi->input_data($data,'t_nitifikasifb');    //menyimpan data ke database melalu model mnotifikasi 
        redirect('notifikasi/nofnilai');

    }
    // public function notifjad(){
    //     $name =  $this->m_akun->tams();
    //     $nama = $name->row()->username;
    //     $pesan  = 'Telah melakukan penjadwalan untuk anda';    
    //     $ling =   'http://localhost/pk/index.php/proposal_masuk/data';
    //     $nopesan ="02";
    //     $cekbiodata =  $this->m_akun->tams();
    //     $penilaian = $cekbiodata->row()->id;
    //     // $cekbiodata =  $this->m_masukproposal->tampil_data();
    //     // $penilaian = $cekbiodata->row()->idproposal;

    //     $data = array(
    //         'oleh'     => $nama,c_
    //         'pesan'     => $pesan,
    //         'tgl'  => time(),
    //         'ling' => $ling,
    //         'nopesan' =>$nopesan,
    //         'id'      =>$penilaian
    //         // 'idproposal' =>$penilaian
    //     );
    //     $this->mnotifikasi->input_data($data,'t_nitifikasifb');    //menyimpan data ke database melalu model mnotifikasi 
    //     redirect('notifikasi/nofnilai');

    // }

        public function nofnilai(){
        $name =  $this->m_user2->tampil();
        $nama = $name->row()->username;
        $pesan  = 'Sebagai evaluator telah memberikan Penilaian proposal';    
        $ling =   'http://localhost/pk/index.php/penilaian/detailnilai';
        $nopesan ="03";
         $cekbiodata =  $this->m_akun->tams();
        $penilaian = $cekbiodata->row()->id;
        // $cekbiodata =  $this->m_hasil->edit_data();
        // $penilaian = $cekbiodata->row()->idpenilaian;

        $data = array(
            'oleh'     => $nama,
            'pesan'     => $pesan,
            'tgl'  => time(),
            'ling' => $ling,
            'id'  =>$penilaian,
            'nopesan' =>$nopesan
            // 'idpenilaian' =>$penilaian
        );
        $this->mnotifikasi->input_data($data,'t_nitifikasifb');    //menyimpan data ke database melalu model mnotifikasi 
        redirect('dashboard/kemitraan');

    }
    public function nofnila2(){
        $name =  $this->m_user2->tampil();
        $nama = $name->row()->username;
        $pesan  = 'Sebagai evaluator telah mengevaluasi proposal';    
        $ling =   'http://localhost/pk/index.php/penilaian/detailnilai1';
        $nopesan ="04";
         $cekbiodata =  $this->m_akun->tams();
        $penilaian = $cekbiodata->row()->id;
        // $cekbiodata =  $this->m_hasil->edit_data();
        // $penilaian = $cekbiodata->row()->idpenilaian;

        $data = array(
            'oleh'     => $nama,
            'pesan'     => $pesan,
            'tgl'  => time(),
            'ling' => $ling,
            'id'  =>$penilaian,
            'nopesan' =>$nopesan
            // 'idpenilaian' =>$penilaian
        );
        $this->mnotifikasi->input_data($data,'t_nitifikasifb');    //menyimpan data ke database melalu model mnotifikasi 
        redirect('dashboard/evaluator');

    }
       public function notif3(){
      //ambil variabel yang dikirim jquery post
    $name =  $this->m_user2->tampil1();
    $nama = $name->row()->username;
    $pesan  = 'Sebagai Kepala PKBL Telah menjadwalkan survei';
    $nopesan ='05';
    $ling =   'http://localhost/pk/index.php/notifikasi/penjadwalan';
     $cekbiodata =  $this->m_akun->tams();
     $penilaian = $cekbiodata->row()->id;
    $data = array(
            'oleh'     => $nama,
            'pesan'     => $pesan,
            'tgl'  => time(),
            'ling' => $ling,
            'id'  =>$penilaian,
            'nopesan' =>$nopesan
        );
        $this->mnotifikasi->input_data($data,'t_nitifikasifb');   
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil di simpan !!</div></div>"); //menyimpan data ke database melalu model mnotifikasi pada fungsi ginsert
        redirect('dashboard/kepala_pkbl');

    }
    public function notifikasijadwal(){
      //ambil variabel yang dikirim jquery post
    $name =  $this->m_user2->tampil1();
    $nama = $name->row()->username;
    $pesan  = 'Sebagai Kepala PKBL Telah Meresejul jadwal anda';
    $nopesan ='07';
    $ling =   'http://localhost/pk/index.php/notifikasi/resekejul';
    $cekbiodata =  $this->m_akun->tams();
    $penilaian = $cekbiodata->row()->id;
    $data = array(
            'oleh'     => $nama,
            'pesan'     => $pesan,
            'tgl'  => time(),
            'ling' => $ling,
            'id'  =>$penilaian,
            'nopesan' =>$nopesan
        );
        $this->mnotifikasi->input_data($data,'t_nitifikasifb');   
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil di simpan !!</div></div>"); //menyimpan data ke database melalu model mnotifikasi pada fungsi ginsert
       redirect('notifikasi/resekejul');

    }

    function resekejul(){
        $data['query'] = $this->m_penjadwalan->tamp()->result();
        $this->load->view('v_penjadwalan1',$data);

        // $data['query']= $this->m_penjadwalan->tamp()->result();
        // $this->load->view('v_penjadwalan1'$data);
    }
     
     public function nofnila3(){
        $name =  $this->m_user2->tampil2();
        $nama = $name->row()->username;
        $pesan  = 'Sebagai surveyor telah mengsurvei anda';    
        $ling =   'http://localhost/pk/index.php/penilaian/detailnilai2';
        $nopesan ="06";
        $cekbiodata =  $this->m_akun->tams();
        $penilaian = $cekbiodata->row()->id;
        // $cekbiodata =  $this->m_hasil->edit_data();
        // $penilaian = $cekbiodata->row()->idpenilaian;

        $data = array(
            'oleh'     => $nama,
            'pesan'     => $pesan,
            'tgl'  => time(),
            'ling' => $ling,
            'id'  =>$penilaian,
            'nopesan' =>$nopesan
            // 'idpenilaian' =>$penilaian
        );
        $this->mnotifikasi->input_data($data,'t_nitifikasifb');    //menyimpan data ke database melalu model mnotifikasi 
       redirect('dashboard/surveyor');
    }
    
    // public function nofnila5(){
    //     $name =  $this->m_user2->tampil2());
    //     $nama = $name->row()->username;
    //     $pesan  = 'Sebagai Kepala Surveyor telah memberikan penilaian surve';    
    //     $ling =   'http://localhost/pk/index.php/penilaian/detailnilai';
    //     $nopesan ="04";
    //      $cekbiodata =  $this->m_akun->tams();
    //     $penilaian = $cekbiodata->row()->id;
    //     // $cekbiodata =  $this->m_hasil->edit_data();
    //     // $penilaian = $cekbiodata->row()->idpenilaian;

    //     $data = array(
    //         'oleh'     => $nama,
    //         'pesan'     => $pesan,
    //         'tgl'  => time(),
    //         'ling' => $ling,
    //         'id'  =>$penilaian,
    //         'nopesan' =>$nopesan
    //         // 'idpenilaian' =>$penilaian
    //     );
    //     $this->mnotifikasi->input_data($data,'t_nitifikasifb');    //menyimpan data ke database melalu model mnotifikasi 
    //     redirect('dashboard/kemitraan');

    // }


    // function proposalmasuk(){
    //     $data['query']=$this->m_masukproposal->tampil_data()->result();
    //     $this->load->view('dataproposalmasukp',$data);
    // }
    // function registrasi_akun(){
    //     $data['query']=$this->m_akun->tampil_data()->result();
    //     $this->load->view('dataproposalmasukp',$data);
    // }

    function penjadwalan(){
        $data['penjadwalan'] = $this->m_penjadwalan->tampil_data()->result();
        $this->load->view('v_penjadwalans',$data);
    }

    function datapenilaian(){
        $data['query'] = $this->m_evaluasi->datape()->result();
        $this->load->view('datapenilaianl',$data);
    }

    public function load_row(){     //fungsi load_row untuk menampilkan jlh data pada navbar secara realtime
        echo $this->mnotifikasi->notif_count(); //jumlah data akan langsung di tampilkan
    }

    public function load_data(){    //fungsi load_data untuk menampilkan isi data pada navbar secara realtime

        $datas=$this->mnotifikasi->getnotifikasi();
        $no=0;
        foreach($datas as $rdata){ $no++;
            // if($no % 2==0){$strip='strip1';}
            //         else{$strip='strip2';}
            // echo"<li><a href=\"#\" class=\"".$strip."\">".$rdata->pesan."<br>
            // <small>".$rdata->oleh." ".timeAgo($rdata->tgl)."</small>
            // </a><li>";
        }
    }

 
    //  public function tambah_s(){
    //   //ambil variabel yang dikirim jquery post
    // $pesan   = 'Telah menilai proposal layak survei';
    // $nama    = 'evaluator';
    // $nopesan ='02';
    // $ling =   'http://localhost/pk/index.php/notifikasi/datapenilaian';
    // // $cekbiodata =  $this->m_evaluasi->tampil_data();
    // // $penilaian   = $cekbiodata->row()->idpenilaian;

    // $data = array(
    //         'oleh'     => $nama,
    //         'pesan'     => $pesan,
    //         'tgl'  => time(),
    //         // 'idpenilaian'=>$penilaian,
    //         'nopesan' =>$nopesan,
    //         'ling' => $ling
    //     );
    //     $this->mnotifikasi->input_data($data,'t_nitifikasifb');   
    //     $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil di simpan !!</div></div>"); //menyimpan data ke database melalu model mnotifikasi pada fungsi ginsert
    //     redirect('dashboard/evaluator');

    // }

    public function load_row2(){     //fungsi load_row untuk menampilkan jlh data pada navbar secara realtime
        echo $this->mnotifikasi->notif_count1(); //jumlah data akan langsung di tampilkan
    }

    public function load_data2(){    //fungsi load_data untuk menampilkan isi data pada navbar secara realtime

        $datas=$this->mnotifikasi->getnotifikasi1();
        $no=0;
        foreach($datas as $rdata){ $no++;
            // if($no % 2==0){$strip='strip1';}
            //         else{$strip='strip2';}
            // echo"<li><a href=\"#\" class=\"".$strip."\">".$rdata->pesan."<br>
            // <small>".$rdata->oleh." ".timeAgo($rdata->tgl)."</small>
            // </a><li>";
        }
    }
}

/* End of file notifikasi.php */
/* Location: ./application/controllers/notifikasi.php */