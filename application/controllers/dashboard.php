<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mnotifikasi');
        $this->load->model('m_hasil');
        $this->load->model('m_kegiatanusaha'); //load model mnotifikasi
        $this->load->model('m_survei3');
        $this->load->model('m_petugas');
        $this->load->model('m_evaluasi');
        $this->load->model('m_masukproposal');
        $this->load->helper('form', 'url'); //load helper ci form dan url
    }

    public function home()
    {
        $data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi();
        $data['query'] = $this->m_petugas->tampil_data()->result();
        

        $this->load->view('home', $data); //load view vnotifikasi
        $tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }
    public function sekertariat()
    {
        $data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count1(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi1();
        $data['query'] = $this->m_masukproposal->datap()->result();

        $this->load->view('sekertariat', $data); //load view vnotifikasi
        $tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }
    public function kemitraan()
    {
        $data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count2(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi2();
        $data['query'] = $this->m_evaluasi->mitra()->result();

        $this->load->view('user_binaan', $data); //load view vnotifikasi
        $tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }
    public function evaluator()
    {
        $data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count1(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi1();

        $data['query'] = $this->m_evaluasi->data_evaluasi_p()->result();
        $this->load->view('evaluator', $data); //load view vnotifikasi
        $tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }
    public function tambahuser()
    {
        $this->load->view('tambah_user');
    }
    public function kepala_pkbl()
    {
        $data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count1(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi1(); //menampilkan isi postingan
        // $data['qry']= $this->m_survei3->datap1()->result();
        $data['query'] = $this->m_petugas->getPetugas2()->result();
        $this->load->view('datacmb', $data);
        $tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }
    public function login()
    {
        $this->load->view('login');
    }
    public function coba()
    {
        $this->load->view('coba');
    }
    // function survei(){
    //     $this->load->view('survei');
    // }
    public function surveyor()
    {
        $data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count1(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi1(); //menampilkan isi postingan
        $data['qry'] = $this->m_survei3->data()->result();
        $this->load->view('surveyor', $data);
        $tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }

    public function penjadwalan()
    {
        $this->load->view('penjadwalan');
    }
    public function hasil()
    {
        $this->load->view('v_input');
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
