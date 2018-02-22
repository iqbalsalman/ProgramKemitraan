<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->model('m_akun');
        $this->load->model('m_select');
        $this->load->model('m_masukproposal');
        $this->load->helper('url');
    }
   
    // parameter untuk masuk ke view isi biodata
    public function index($idproposal)
    {
        $where = array('idproposal' => $idproposal);
        $data['provinsi'] = $this->m_select->provinsi();
        $data['qry'] = $this->db->order_by('idproposal desc')->where($where)->get('proposal_masuk')->row();
        $this->load->view('biodata',$data);
    }

    //evaluasi berdasarkan proposal masuk
    function proposal()
    {
        $data['query'] = $this->m_masukproposal->data_proposal()->result();
        $this->load->view('dataproposalmasuk_e',$data);
    }

    public function tambah()
    {
        $this->load->library('upload');
        $nmfile = "file_" . time(); //nama file + fungsi time(oid)
        $config['upload_path'] = './asset/img/biodata'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width'] = '5000'; //lebar maksimum 5000 px
        $config['max_height'] = '5000'; //tinggi maksimu 5000 px

        $this->upload->initialize($config)
        ;
        $this->upload->do_upload('upload_ktp');
        $gbr = $this->upload->file_name;

        $this->upload->do_upload('proposalk');
        $proposal = $this->upload->file_name;

        $this->upload->do_upload('upload_kk');
        $gbr2 = $this->upload->file_name;

        // $cekbiodata = $this->m_akun->tambah();
        // $id = $cekbiodata->row()->id;
        $data = array(
            'idproposal'         => $this->input->post('idproposal'),
            'nama'               => $this->input->post('nama'),
            'upload_ktp'         => $gbr,
            'ta_lahir'           => $this->input->post('ta_lahir'),
            'tgl_l'              => $this->input->post('tgl_l'),
            'jenis_kelamin'      => $this->input->post('jenis_kelamin'),
            'status_kawin'       => $this->input->post('status_kawin'),
            'jml_anak'           => $this->input->post('jml_anak'),
            'pekerjaan'          => $this->input->post('pekerjaan'),
            'nmkerja'            => $this->input->post('nmkerja'),
            'alamat_rumah'       => $this->input->post('alamat_rumah'),
            'klurah'             => $this->input->post('klurah'),
            'kcamatan'           => $this->input->post('kcamatan'),
            'ktkb'               => $this->input->post('ktkb'),
            'provinsi'           => $this->input->post('provinsi'),
            'kode_pos'           => $this->input->post('kode_pos'),
            'tlpr'               => $this->input->post('tlpr'),
            'No_kk'              => $this->input->post('No_kk'),
            'upload_kk'          => $gbr2,
            'proposalk'          => $proposal,
            'lembaga'            => $this->input->post('lembaga'),
            'bsd'                => $this->input->post('bsd'),
            'status_tinggal'     => $this->input->post('status_tinggal'),
            'pendidikan_f'       => $this->input->post('pendidikan_f'),
            'plt_k'              => $this->input->post('plt_k'),
        );
        $this->m_data->input_data($data, 'biodata');
        redirect('perusahaan/index');
        //$idresi = $data('idresi');
        //redirect('biodata/panggil_index/'.$idresi);
    }

    function edit($idresi)
    {
    $where = array('idresi' => $idresi);    
    $data['biodata'] = $this->m_data->edit_data($where,'biodata')->result(); 
    $this->load->view('edit_biodata',$data);
    }

    public function panggil_index($idresi)
    {
        redirect('perusahaan/index/' . $idresi);
    }

    public function hapus($idresi)
    {
        $where = array('idresi' => $idresi);
        $this->m_data->hapus_data($where, 'biodata');
        redirect('biodata/index');
    }

    public function update()
    {
        $idresi = $this->input->post('idresi');
        $this->load->library('upload');
        $nmfile = "file_" . time(); //nama file + fungsi time
        $path = './asset/img/biodata';
        $config['upload_path'] = $path; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf'; //type yang dapat diakses bisa anda sesuaikan

        $this->upload->initialize($config);
        $this->upload->do_upload('upload_ktp');
        $gbr = $this->upload->file_name;
        $this->upload->do_upload('proposalk');
        $proposal = $this->upload->file_name;
        $this->upload->do_upload('upload_kk');
        $gbr2 = $this->upload->file_name;

        // $cekbiodata = $this->m_akun->tambah();
        // $id = $cekbiodata->row()->id;

        $data = array(
            'idproposal'         => $this->input->post('idproposal'),
            'nama'               => $this->input->post('nama'),
            'upload_ktp'         => $gbr,
            'ta_lahir'           => $this->input->post('ta_lahir'),
            'tgl_l'              => $this->input->post('tgl_l'),
            'jenis_kelamin'      => $this->input->post('jenis_kelamin'),
            'status_kawin'       => $this->input->post('status_kawin'),
            'jml_anak'           => $this->input->post('jml_anak'),
            'pekerjaan'          => $this->input->post('pekerjaan'),
            'nmkerja'            => $this->input->post('nmkerja'),
            'alamat_rumah'       => $this->input->post('alamat_rumah'),
            'klurah'             => $this->input->post('klurah'),
            'kcamatan'           => $this->input->post('kcamatan'),
            'ktkb'               => $this->input->post('ktkb'),
            'provinsi'           => $this->input->post('provinsi'),
            'kode_pos'           => $this->input->post('kode_pos'),
            'tlpr'               => $this->input->post('tlpr'),
            'No_kk'              => $this->input->post('No_kk'),
            'upload_kk'          => $gbr2,
            'proposalk'          => $proposal,
            'lembaga'            => $this->input->post('lembaga'),
            'bsd'                => $this->input->post('bsd'),
            'status_tinggal'     => $this->input->post('status_tinggal'),
            'pendidikan_f'       => $this->input->post('pendidikan_f'),
            'plt_k'              => $this->input->post('plt_k'),
        );
        $where = array('idresi' => $idresi);

        $this->m_data->update_data($where, $data, 'biodata');
        redirect('perusahaan/index');
    }

    public function ambil_data()
    {

        $modul = $this->input->post('modul');
        $id = $this->input->post('id');

        if ($modul == "kabupaten") {
            echo $this->m_select->kabupaten($id);
        } else if ($modul == "kecamatan") {
            echo $this->m_select->kecamatan($id);
        } else if ($modul == "kelurahan") {
            echo $this->m_select->kelurahan($id);
        }
    }

    public function datakemitraan()
    {
        $data['query'] = $this->m_data->datakes();
        $this->load->view('dataadministrasi', $data);
    }

}
