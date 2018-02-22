<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

    var $limit = 10;
    var $offset = 10;

    public function __construct() {
        parent::__construct();
        $this->load->model('m_keuangan');
        $this->load->model('m_perusahaan');
        $this->load->helper('url');
    }

    public function index() 
    {
        $data['query'] = $this->m_perusahaan->tampil_data()->result();
        $data['qry']   = $this->db->order_by('idperusahaan desc')
                         ->limit(1)->get('perusahaan')->row();
        $this->load->view('Data_keuangan', $data);
    }
    function login(){
        $this->load->view('login2');
    }

    public function insert() 
    {
        $cekbiodata                = $this->m_keuangan->datap();
        $perusahaan                = $cekbiodata->row()->idperusahaan;
        $thn1                      = $this->input->post('thn1');
        $thn2                      = $this->input->post('thn2');
        $kas1                      = $this->input->post('kas1');
        $kas2                      = $this->input->post('kas2');
        $bank1                     = $this->input->post('bank1');
        $bank2                     = $this->input->post('bank2');
        $piutang1                  = $this->input->post('piutang1');
        $piutang2                  = $this->input->post('piutang2');
        $pes_barang1               = $this->input->post('pes_barang1');
        $pes_barang2               = $this->input->post('pes_barang2');
        $per_produksi1             = $this->input->post('per_produksi1');
        $per_produksi2             = $this->input->post('per_produksi2');
        $per_kantor1               = $this->input->post('per_kantor1');
        $per_kantor2               = $this->input->post('per_kantor2');
        $total_af1                 = $kas1 + $bank1 + $piutang1 + $pes_barang1 + $per_produksi1 + $per_kantor1;
        $total_af2                 = $kas2 + $bank2 + $piutang2 + $pes_barang2 + $per_produksi2 + $per_kantor2;
        $bangunan1                 = $this->input->post('bangunan1');
        $bangunan2                 = $this->input->post('bangunan2');
        $tanah1                    = $this->input->post('tanah1');
        $tanah2                    = $this->input->post('tanah2');
        $lain1                     = $this->input->post('lain1');
        $lain2                     = $this->input->post('lain2');
        $total_akv1                = $bangunan1 + $tanah1 + $lain1;
        $total_akv2                = $bangunan2 + $tanah2 + $lain2;
        $htnb1                     = $this->input->post('htnb1');
        $htnb2                     = $this->input->post('htnb2');
        $hutang_dagang1            = $this->input->post('hutang_dagang1');
        $hutang_dagang2            = $this->input->post('hutang_dagang2');
        $hlain1                    = $this->input->post('hlain1');
        $hlain2                    = $this->input->post('hlain2');
        $modal1                    = $this->input->post('modal1');
        $modal2                    = $this->input->post('modal2');
        $laba_ditahan1             = $this->input->post('laba_ditahan1');
        $laba_ditahan2             = $this->input->post('laba_ditahan2');
        $total_pasiva1             = $htnb1 + $hutang_dagang1 + $hlain1 + $modal1 + $laba_ditahan1;
        $total_pasiva2             = $htnb2 + $hutang_dagang2 + $hlain2 + $modal2 + $laba_ditahan2;
        $nama_bank                 = $this->input->post('nama_bank');
        $pok_pinjaman              = $this->input->post('pok_pinjaman');
        $besar_Bunga               = $this->input->post('besar_Bunga');
        $prosentasi_bunga          = $this->input->post('prosentasi_bunga');
        $sisa_pinjaman             = $this->input->post('sisa_pinjaman');
        $sisa_kali_ansur           = $this->input->post('sisa_kali_ansur');
        $jml_angsuran              = $this->input->post('jml_angsuran');
        $nama_perusahaan_d         = $this->input->post('nama_perusahaan_d');
        $pokok_pinjaman_dagang     = $this->input->post('pokok_pinjaman_dagang');
        $Besar_bunga_dagang        = $this->input->post('Besar_bunga_dagang');
        $prosentase_bunga_dagang   = $this->input->post('prosentase_bunga_dagang');
        $sisa_pinjaman_dagang      = $this->input->post('sisa_pinjaman_dagang');
        $sisa_angsuran_dagang      = $this->input->post('sisa_angsuran_dagang');
        $jml_angsuran_dagang       = $this->input->post('jml_angsuran_dagang');
        $nama_bumn                 = $this->input->post('nama_bumn');
        $pokok_pinjaman_bumn       = $this->input->post('pokok_pinjaman_bumn');
        $besar_bunga_bumn          = $this->input->post('besar_bunga_bumn');
        $prosentase_bunga_bumn     = $this->input->post('prosentase_bunga_bumn');
        $sisa_pinjaman_bumn        = $this->input->post('sisa_pinjaman_bumn');
        $sisa_angsuran_bumn        = $this->input->post('sisa_angsuran_bumn');
        $jml_angsuran_bumn         = $this->input->post('jml_angsuran_bumn');
        $nama_badan                = $this->input->post('nama_badan');
        $pokok_pinjaman_badan      = $this->input->post('pokok_pinjaman_badan');
        $besar_bunga_badan         = $this->input->post('besar_bunga_badan');
        $prosentase_bunga_badan    = $this->input->post('prosentase_bunga_badan');
        $sisa_pinjaman_badan       = $this->input->post('sisa_pinjaman_badan');
        $sisa_angsuran_badan       = $this->input->post('sisa_angsuran_badan');
        $jml_angsuran_badan        = $this->input->post('jml_angsuran_badan');


        $data = array(
            'idperusahaan'              => $perusahaan,
            'thn1'                      => $thn1,
            'thn2'                      => $thn2,
            'kas1'                      => $kas1,
            'kas2'                      => $kas2,
            'bank1'                     => $bank1,
            'bank2'                     => $bank2,
            'piutang1'                  => $piutang1,
            'piutang2'                  => $piutang2,
            'pes_barang1'               => $pes_barang1,
            'pes_barang2'               => $pes_barang2,
            'per_produksi1'             => $per_produksi1,
            'per_produksi2'             => $per_produksi2,
            'per_kantor1'               => $per_kantor1,
            'per_kantor2'               => $per_kantor2,
            'total_af1'                 => $total_af1,
            'total_af2'                 => $total_af2,
            'bangunan1'                 => $bangunan1,
            'bangunan2'                 => $bangunan2,
            'tanah1'                    => $tanah1,
            'tanah2'                    => $tanah2,
            'lain1'                     => $lain1,
            'lain2'                     => $lain2,
            'total_akv1'                => $total_akv1,
            'total_akv2'                => $total_akv2,
            'htnb1'                     => $htnb1,
            'htnb2'                     => $htnb2,
            'hutang_dagang1'            => $hutang_dagang1,
            'hutang_dagang2'            => $hutang_dagang2,
            'hlain1'                    => $hlain1,
            'hlain2'                    => $hlain2,
            'modal1'                    => $modal1,
            'modal2'                    => $modal2,
            'laba_ditahan1'             => $laba_ditahan1,
            'laba_ditahan2'             => $laba_ditahan2,
            'total_pasiva1'             => $total_pasiva1,
            'total_pasiva2'             => $total_pasiva2,
            'nama_bank'                 => $nama_bank,
            'pok_pinjaman'              => $pok_pinjaman,
            'besar_Bunga'               => $besar_Bunga,
            'prosentasi_bunga'          => $prosentasi_bunga,
            'sisa_pinjaman'             => $sisa_pinjaman,
            'sisa_kali_ansur'           => $sisa_kali_ansur,
            'jml_angsuran'              => $jml_angsuran,
            'nama_perusahaan_d'         => $nama_perusahaan_d,
            'pokok_pinjaman_dagang'     => $pokok_pinjaman_dagang,
            'Besar_bunga_dagang'        => $Besar_bunga_dagang,
            'prosentase_bunga_dagang'   => $prosentase_bunga_dagang,
            'sisa_pinjaman_dagang'      => $sisa_pinjaman_dagang,
            'sisa_angsuran_dagang'      => $sisa_angsuran_dagang,
            'jml_angsuran_dagang'       => $jml_angsuran_dagang,
            'nama_bumn'                 => $nama_bumn,
            'pokok_pinjaman_bumn'       => $pokok_pinjaman_bumn,
            'besar_bunga_bumn'          => $besar_bunga_bumn,
            'prosentase_bunga_bumn'     => $prosentase_bunga_bumn,
            'sisa_pinjaman_bumn'        => $sisa_pinjaman_bumn,
            'sisa_angsuran_bumn'        => $sisa_angsuran_bumn,
            'jml_angsuran_bumn'         => $jml_angsuran_bumn,
            'nama_badan'                => $nama_badan,
            'pokok_pinjaman_badan'      => $pokok_pinjaman_badan,
            'besar_bunga_badan'         => $besar_bunga_badan,
            'prosentase_bunga_badan'    => $prosentase_bunga_badan,
            'sisa_pinjaman_badan'       => $sisa_pinjaman_badan,
            'sisa_angsuran_badan'       => $sisa_angsuran_badan,
            'jml_angsuran_badan'        => $jml_angsuran_badan
        );

        $this->m_keuangan->input_data($data, 'keuangan'); //akses model untuk menyimpan ke database
        redirect('pendapatan/index'); //jika berhasil maka akan ditampilkan view upload
    }

    function data_id() {
        $where['query'] = $this->m_perusahaan->data();
        $this->load->view('Data_keuangan', $where);
    }

    function hapus($idkeuangan) {
        $where = array('idkeuangan' => $idkeuangan);
        $this->m_keuangan->hapus_data($where, 'keuangan');
        redirect('keuangan/index');
    }

    function edit($idkeuangan) {
        $where          = array('idkeuangan' => $idkeuangan);
        $data['qry']    = $this->db->order_by('idperusahaan desc')->limit(1)->get('perusahaan')->row();
        $data['query']  = $this->m_keuangan->edit_data($where, 'keuangan')->result();
        $this->load->view('edit_keuangan', $data);
    }

    function update()
     {
        $cekbiodata                = $this->m_keuangan->datap();
        $perusahaan                = $cekbiodata->row()->idperusahaan;
        $thn1                      = $this->input->post('thn1');
        $thn2                      = $this->input->post('thn2');
        $kas1                      = $this->input->post('kas1');
        $kas2                      = $this->input->post('kas2');
        $bank1                     = $this->input->post('bank1');
        $bank2                     = $this->input->post('bank2');
        $piutang1                  = $this->input->post('piutang1');
        $piutang2                  = $this->input->post('piutang2');
        $pes_barang1               = $this->input->post('pes_barang1');
        $pes_barang2               = $this->input->post('pes_barang2');
        $per_produksi1             = $this->input->post('per_produksi1');
        $per_produksi2             = $this->input->post('per_produksi2');
        $per_kantor1               = $this->input->post('per_kantor1');
        $per_kantor2               = $this->input->post('per_kantor2');
        $total_af1                 = $kas1 + $bank1 + $piutang1 + $pes_barang1 + $per_produksi1 + $per_kantor1;
        $total_af2                 = $kas2 + $bank2 + $piutang2 + $pes_barang2 + $per_produksi2 + $per_kantor2;
        $bangunan1                 = $this->input->post('bangunan1');
        $bangunan2                 = $this->input->post('bangunan2');
        $tanah1                    = $this->input->post('tanah1');
        $tanah2                    = $this->input->post('tanah2');
        $lain1                     = $this->input->post('lain1');
        $lain2                     = $this->input->post('lain2');
        $total_akv1                = $bangunan1 + $tanah1 + $lain1;
        $total_akv2                = $bangunan2 + $tanah2 + $lain2;
        $htnb1                     = $this->input->post('htnb1');
        $htnb2                     = $this->input->post('htnb2');
        $hutang_dagang1            = $this->input->post('hutang_dagang1');
        $hutang_dagang2            = $this->input->post('hutang_dagang2');
        $hlain1                    = $this->input->post('hlain1');
        $hlain2                    = $this->input->post('hlain2');
        $modal1                    = $this->input->post('modal1');
        $modal2                    = $this->input->post('modal2');
        $laba_ditahan1             = $this->input->post('laba_ditahan1');
        $laba_ditahan2             = $this->input->post('laba_ditahan2');
        $total_pasiva1             = $htnb1 + $hutang_dagang1 + $hlain1 + $modal1 + $laba_ditahan1;
        $total_pasiva2             = $htnb2 + $hutang_dagang2 + $hlain2 + $modal2 + $laba_ditahan2;
        $nama_bank                 = $this->input->post('nama_bank');
        $pok_pinjaman              = $this->input->post('pok_pinjaman');
        $besar_Bunga               = $this->input->post('besar_Bunga');
        $prosentasi_bunga          = $this->input->post('prosentasi_bunga');
        $sisa_pinjaman             = $this->input->post('sisa_pinjaman');
        $sisa_kali_ansur           = $this->input->post('sisa_kali_ansur');
        $jml_angsuran              = $this->input->post('jml_angsuran');
        $nama_perusahaan_d         = $this->input->post('nama_perusahaan_d');
        $pokok_pinjaman_dagang     = $this->input->post('pokok_pinjaman_dagang');
        $Besar_bunga_dagang        = $this->input->post('Besar_bunga_dagang');
        $prosentase_bunga_dagang   = $this->input->post('prosentase_bunga_dagang');
        $sisa_pinjaman_dagang      = $this->input->post('sisa_pinjaman_dagang');
        $sisa_angsuran_dagang      = $this->input->post('sisa_angsuran_dagang');
        $jml_angsuran_dagang       = $this->input->post('jml_angsuran_dagang');
        $nama_bumn                 = $this->input->post('nama_bumn');
        $pokok_pinjaman_bumn       = $this->input->post('pokok_pinjaman_bumn');
        $besar_bunga_bumn          = $this->input->post('besar_bunga_bumn');
        $prosentase_bunga_bumn     = $this->input->post('prosentase_bunga_bumn');
        $sisa_pinjaman_bumn        = $this->input->post('sisa_pinjaman_bumn');
        $sisa_angsuran_bumn        = $this->input->post('sisa_angsuran_bumn');
        $jml_angsuran_bumn         = $this->input->post('jml_angsuran_bumn');
        $nama_badan                = $this->input->post('nama_badan');
        $pokok_pinjaman_badan      = $this->input->post('pokok_pinjaman_badan');
        $besar_bunga_badan         = $this->input->post('besar_bunga_badan');
        $prosentase_bunga_badan    = $this->input->post('prosentase_bunga_badan');
        $sisa_pinjaman_badan       = $this->input->post('sisa_pinjaman_badan');
        $sisa_angsuran_badan       = $this->input->post('sisa_angsuran_badan');
        $jml_angsuran_badan        = $this->input->post('jml_angsuran_badan');

         $data = array(
            'idperusahaan'              => $perusahaan,
            'thn1'                      => $thn1,
            'thn2'                      => $thn2,
            'kas1'                      => $kas1,
            'kas2'                      => $kas2,
            'bank1'                     => $bank1,
            'bank2'                     => $bank2,
            'piutang1'                  => $piutang1,
            'piutang2'                  => $piutang2,
            'pes_barang1'               => $pes_barang1,
            'pes_barang2'               => $pes_barang2,
            'per_produksi1'             => $per_produksi1,
            'per_produksi2'             => $per_produksi2,
            'per_kantor1'               => $per_kantor1,
            'per_kantor2'               => $per_kantor2,
            'total_af1'                 => $total_af1,
            'total_af2'                 => $total_af2,
            'bangunan1'                 => $bangunan1,
            'bangunan2'                 => $bangunan2,
            'tanah1'                    => $tanah1,
            'tanah2'                    => $tanah2,
            'lain1'                     => $lain1,
            'lain2'                     => $lain2,
            'total_akv1'                => $total_akv1,
            'total_akv2'                => $total_akv2,
            'htnb1'                     => $htnb1,
            'htnb2'                     => $htnb2,
            'hutang_dagang1'            => $hutang_dagang1,
            'hutang_dagang2'            => $hutang_dagang2,
            'hlain1'                    => $hlain1,
            'hlain2'                    => $hlain2,
            'modal1'                    => $modal1,
            'modal2'                    => $modal2,
            'laba_ditahan1'             => $laba_ditahan1,
            'laba_ditahan2'             => $laba_ditahan2,
            'total_pasiva1'             => $total_pasiva1,
            'total_pasiva2'             => $total_pasiva2,
            'nama_bank'                 => $nama_bank,
            'pok_pinjaman'              => $pok_pinjaman,
            'besar_Bunga'               => $besar_Bunga,
            'prosentasi_bunga'          => $prosentasi_bunga,
            'sisa_pinjaman'             => $sisa_pinjaman,
            'sisa_kali_ansur'           => $sisa_kali_ansur,
            'jml_angsuran'              => $jml_angsuran,
            'nama_perusahaan_d'         => $nama_perusahaan_d,
            'pokok_pinjaman_dagang'     => $pokok_pinjaman_dagang,
            'Besar_bunga_dagang'        => $Besar_bunga_dagang,
            'prosentase_bunga_dagang'   => $prosentase_bunga_dagang,
            'sisa_pinjaman_dagang'      => $sisa_pinjaman_dagang,
            'sisa_angsuran_dagang'      => $sisa_angsuran_dagang,
            'jml_angsuran_dagang'       => $jml_angsuran_dagang,
            'nama_bumn'                 => $nama_bumn,
            'pokok_pinjaman_bumn'       => $pokok_pinjaman_bumn,
            'besar_bunga_bumn'          => $besar_bunga_bumn,
            'prosentase_bunga_bumn'     => $prosentase_bunga_bumn,
            'sisa_pinjaman_bumn'        => $sisa_pinjaman_bumn,
            'sisa_angsuran_bumn'        => $sisa_angsuran_bumn,
            'jml_angsuran_bumn'         => $jml_angsuran_bumn,
            'nama_badan'                => $nama_badan,
            'pokok_pinjaman_badan'      => $pokok_pinjaman_badan,
            'besar_bunga_badan'         => $besar_bunga_badan,
            'prosentase_bunga_badan'    => $prosentase_bunga_badan,
            'sisa_pinjaman_badan'       => $sisa_pinjaman_badan,
            'sisa_angsuran_badan'       => $sisa_angsuran_badan,
            'jml_angsuran_badan'        => $jml_angsuran_badan
        );

        $where = array('idkeuangan' => $idkeuangan);

        $this->m_keuangan->update_data($where, $data, 'keuangan');
        redirect('pendapatan/index');
    }

}
