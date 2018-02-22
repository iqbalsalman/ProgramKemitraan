<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Registrasi extends CI_Controller {

//     function __construct() {
//         parent::__construct();
//         $this->load->model('m_akun');
//         $this->load->model('m_register');
//          $this->load->helper('url');
// }
    function index() {
        $this->load->view('registrasi');
    }
    
    public function submit(){
        //passing post data dari view
        $this->load->helper(array('form', 'url'));
        $username     =    $this->input->post('username');
        $password     =    md5($this->input->post('password'));
        $jenis_akses  =    'user';
        $email        =    $this->input->post('email');
        $tlpon        =    $this->input->post('tlpon');
        $dinas_daerah =    $this->input->post('dinas_daerah');
        
        //memasukan ke array
         $data = array(
            'username'       => $username,
            'password'       => $password,
            'jenis_akses'    => $jenis_akses,
            'email'          => $email,
            'tlpon'          => $tlpon,
            'dinas_daerah'   => $dinas_daerah,
            'active' => 0
        );
        //tambahkan akun ke database
        $this->load->model('m_akun');
        $id = $this->m_akun->add_account($data);
        
        //enkripsi id
        $encrypted_id = md5($id);
        
        $this->load->library('email');
        $config = array();
        $config['charset'] = 'utf-8';
        $config['useragent'] = 'Codeigniter';
        $config['protocol']= "smtp";
        $config['mailtype']= "html";
        $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
        $config['smtp_port']= "465";
        $config['smtp_timeout']= "400";
        $config['smtp_user']= "iqbalsalman1707@gmail.com"; // isi dengan email kamu
        $config['smtp_pass']= "SalmanIqbal1707"; // isi dengan password kamu
        $config['crlf']="\r\n"; 
        $config['newline']="\r\n"; 
        $config['wordwrap'] = TRUE;
        //memanggil library email dan set konfigurasi untuk pengiriman email
            
        $this->email->initialize($config);
        //konfigurasi pengiriman
        $this->email->from($config['smtp_user']);
        $this->email->to($email);
        $this->email->subject("Verifikasi Akun");
        $this->email->message(
            "Terimakasih telah melakuan registrasi akun Program Kemitraan PKBL Perum Peruri, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
            site_url("registrasi/verification/$encrypted_id")
        );
        
        if($this->email->send())
        {
               redirect('notifikasi/postkan');
        }else
        {
            echo "Berhasil melakukan registrasi, namu gagal mengirim verifikasi email";
             redirect('login/index');
        }
        
    }

    public function verification($key)
    {
        $this->load->helper('url');
        $this->load->model('m_akun');
        $this->m_akun->changeActiveState($key);
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Selamat kamu telah memverifikasi akun kamu !!</div></div>");
        redirect('login/index');
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}