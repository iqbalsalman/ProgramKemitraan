<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login2 extends CI_Controller {

        function __construct() {
            parent::__construct();
            $this->load->model('m_user2');
                //if username is already set up, then check the level of username is admin or member
                if($this->session->userdata('jenis_akses') == 'administrator'){
                    redirect('dashboard/home');
                }elseif($this->session->userdata('jenis_akses') == 'sekertariat'){
                    redirect('dashboard/sekertariat');
                }elseif($this->session->userdata('jenis_akses') == 'evaluator'){
                    redirect('dashboard/evaluator'); 
                }elseif ($this->session->userdata('jenis_akses') == 'kepala_pkbl') {
                    redirect('dashboard/kepala_pkbl');
                }elseif($this->session->userdata('jenis_akses') == 'surveyor'){
                    redirect('dashboard/surveyor');
            }
        }
    function index() {
        $this->load->view('login2');
    }
    function proses() {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan1', '<br>Username atau password masih kosong.');
			$this->load->view('login2');
        } else {
			$this->load->model('m_user2','',TRUE);
            $cek = $this->m_user2->cek_login($username,$password);
            if ($cek) {
                //login berhasil, buat session
                foreach ($cek as $qad) {
                    $idakun           = $qad['idakun'];
                    $username      = $qad['username'];
                    $jenis_akses   = $qad['jenis_akses'];
                    $email         = $qad['email'];
                } 
			$sess_data = array(
		    'id'             =>$id,
			'username'       =>$username,
		   	'jenis_akses'    =>$jenis_akses,
            'email'          =>$email
			);
			$this->session->set_userdata($sess_data);
          
                if ($this ->session->userdata('jenis_akses')== 'administrator'){
                redirect('dashboard/home');
				}elseif($this->session->userdata('jenis_akses') == 'sekertariat'){
                redirect('dashboard/sekertariat'); 
                }elseif($this->session->userdata('jenis_akses') =='evaluator'){
                redirect('dashboard/evaluator')    ; 
                }elseif ($this->session->userdata('jenis_akses') == 'kepala_pkbl') {
                redirect('dashboard/kepala_pkbl');
                }elseif($this->session->userdata('jenis_akses') == 'surveyor'){
                 redirect('dashboard/surveyor');
          }   
            } else  {
                $this ->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                redirect('login2');
            }
        }
    }

    function logout() {
        $this->session->        
        sess_destroy();
        redirect('login2');
    }
}