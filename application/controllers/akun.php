<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Akun extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_akun');
        $this->load->model('mnotifikasi');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi();
        $data['query'] = $this->m_akun->tampil_data()->result();
        $this->load->view('data', $data);
        $tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }



    public function users()
    {
        $this->load->view('tambah_user');
    }

    public function petugas()
    {
        $data['title'] = 'Notifikasi PKBL Perum Peruri'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi();
        $data['query'] = $this->m_akun->akun_petugas()->result();
        $this->load->view('dataakunpetugas', $data);
        $tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
    }

    public function insert()
    {

        $username    = $this->input->post('username');
        $password    = md5($this->input->post('password'));
        $email       = $this->input->post('email');
        $jenis_akses = $this->input->post('jenis_akses');

        $data = array(
            'username'    => $username,
            'password'    => $password,
            'email'       => $email,
            'jenis_akses' => $jenis_akses,
        );

        $this->m_akun->insert($data, 'login2');
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">data  berhasil disimpan !!</div></div>");
        redirect('akun/petugas');
    }

    public function hapus_akun_p($idakun){
        $where = array('idakun' => $idakun);
        $this->m_akun->hapus_akun($where, 'login2');
        redirect('akun/petugas');
    }
    function login(){
        $this->load->view('login2');
    }
    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_akun->hapus_data($where, 'login2');
        redirect('akun/petugas');
    }

    public function edit($id)
    {
        $where = array('id' => $id_akun);
        $data['query'] = $this->m_akun->edit_data($where, 'login')->result();
        $this->load->view('edit_user', $data);
    }

    public function update()
    {
        $id_akun = $this->input->post('id_akun');
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $jenis_akses = $this->input->post('jenis_akses');

        $data = array(
            'username' => $username,
            'password' => $password,
            'jenis_akses' => $jenis_akses,
        );
        $where = array('id_akun' => $id_akun);
        $this->m_akun->update_data($where, $data, 'login');
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">data  berhasil di Update!!</div></div>");
        redirect('akun/index');
    }

}
