<?php

 
class Perusahaan extends CI_Controller{
 
	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_perusahaan');
		$this->load->model('m_data');
		$this->load->model('m_select');
		$this->load->helper('url');

	}
 
	function index()
	{
		$data['qry']       = $this->db->order_by('idresi desc')->limit(1)->get('biodata')->row();
		$data['provinsi']  = $this->m_select->provinsi();
		$this->load->view('Data_perusahaan',$data);		
	}
	function login(){
        $this->load->view('login2');
    }

	function insert()
	{
		$this->load->library('upload');
        $nmfile                  = "file_".time(); //nama file + fungsi time
        $config['upload_path']   = './asset/img/perusahaan'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size']      = '3072'; //maksimum besar file 3M
        $config['max_width']     = '5000'; //lebar maksimum 5000 px
        $config['max_height']    = '5000'; //tinggi maksimu 5000 px
		
		 $this->upload->initialize($config);
         $this->upload->do_upload('upload_struk_organisasi');
         $gbr = $this->upload->file_name;  
         $this->upload->do_upload('srs_tansi');
         $gbr2 = $this->upload->file_name; 	
          
		
        $nama_perusahaan        = $this->input->post('nama_perusahaan');
		$tpemilik_koprasi       = $this->input->post('tpemilik_koprasi');
		$p_binaan_pk            = $this->input->post('p_binaan_pk');
		$kd_binaan              = $this->input->post('kd_binaan');
		$bidang_usaha           = $this->input->post('bidang_usaha');
		$jenis_usaha            = $this->input->post('jenis_usaha');
		$alamat_perusahaan      = $this->input->post('alamat_perusahaan');
		$kelurahan_perusahaan   = $this->input->post('kelurahan_perusahaan');
		$kecamatan_perusahaan   = $this->input->post('kecamatan_perusahaan');
		$kota_perusahaan        = $this->input->post('kota_perusahaan');
		$provinsi_p             = $this->input->post('provinsi_p');
		$kode_pos_p             = $this->input->post('kode_pos_p');
		$notlp_perusahaan       = $this->input->post('notlp_perusahaan');
		$stt_usaha              = $this->input->post('stt_usaha');
		$thn_sttusaha           = $this->input->post('thn_sttusaha');
		$siup                   = $this->input->post('siup');
		$tdp                    = $this->input->post('tdp');
		$ho                     = $this->input->post('ho');
		$situ                   = $this->input->post('situ');
		$sku                    = $this->input->post('sku');
		$bdn_hukum              = $this->input->post('bdn_hukum');
		$npwp                   = $this->input->post('npwp');
		$nmpgang_hak            = $this->input->post('nmpgang_hak');
		$lokasi_tanah           = $this->input->post('lokasi_tanah');
		$luas_tanah             = $this->input->post('luas_tanah');
		$no_tanah               = $this->input->post('no_tanah');
		$berdiri_tahun          = $this->input->post('berdiri_tahun');
		$jml_karyawan           = $this->input->post('jml_karyawan');
		$jml_teng_ahli          = $this->input->post('jml_teng_ahli');
		$jml_pengurus           = $this->input->post('jml_pengurus');
		$rekening_koran         = $this->input->post('rekening_koran');
		$nama_bank_koran        = $this->input->post('nama_bank_koran');
		$alamat_bank_koran      = $this->input->post('alamat_bank_koran');
		$nomer_buku_tabungan    = $this->input->post('nomer_buku_tabungan');
		$nama_bank              = $this->input->post('nama_bank');
		$alamat_tabungan        = $this->input->post('alamat_tabungan');
		$bantuan_l              = $this->input->post('bantuan_l');
		$cekbiodata             = $this->m_perusahaan->datap();
	    $resi                   = $cekbiodata->row()->idresi;
        
		$data = array(
			'nama_perusahaan'        => $nama_perusahaan,
			'tpemilik_koprasi'       => $tpemilik_koprasi,
			'p_binaan_pk'            => $p_binaan_pk,
			'kd_binaan'              => $kd_binaan,
			'bidang_usaha'           => $bidang_usaha,
			'jenis_usaha'            => $jenis_usaha,
			'alamat_perusahaan'      => $alamat_perusahaan,
			'kelurahan_perusahaan'   => $kelurahan_perusahaan,
			'kecamatan_perusahaan'   => $kecamatan_perusahaan,
			'kota_perusahaan'        => $kota_perusahaan,
			'provinsi_p'             => $provinsi_p,
			'kode_pos_p'             => $kode_pos_p,
			'notlp_perusahaan'       => $notlp_perusahaan,
			'upload_struk_organisasi'=> $gbr,
			'stt_usaha'              => $stt_usaha,
			'thn_sttusaha'           => $thn_sttusaha,
			'siup'                   => $siup,
			'tdp'                    => $tdp,
			'ho'                     => $ho,
			'situ'                   => $situ,
			'sku'                    => $sku,
			'bdn_hukum'              => $bdn_hukum,
			'npwp'                   => $npwp,
			'nmpgang_hak'            => $nmpgang_hak,
			'lokasi_tanah'           => $lokasi_tanah,
			'luas_tanah'             => $luas_tanah,
			'no_tanah'               => $no_tanah,
			'srs_tansi'              => $gbr2,
			'berdiri_tahun'          => $berdiri_tahun,
			'jml_karyawan'           => $jml_karyawan,
			'jml_teng_ahli'          => $jml_teng_ahli,
			'jml_pengurus'           => $jml_pengurus,
			'rekening_koran'         => $rekening_koran,
			'nama_bank_koran'        => $nama_bank_koran,
			'alamat_bank_koran'      => $alamat_bank_koran,
			'nomer_buku_tabungan'    => $nomer_buku_tabungan,
			'nama_bank'              => $nama_bank,
			'alamat_tabungan'        => $alamat_tabungan,
			'bantuan_l'              => $bantuan_l,
			'idresi'                 => $resi
			);

		$this->m_perusahaan->input_data($data,'perusahaan');
		redirect('keuangan/index');
	}
	function data_id(){
		$where['query'] = $this->m_data->data();
		$this->load->view('Data_perusahaan',$where);
	}
	function hapus($idperusahaan){
		$where = array('idperusahaan' => $idperusahaan);
		$this->m_perusahaan->hapus_data($where,'perusahaan');
		redirect('perusahaan/index');
	}
 
	function edit($idperusahaan){
		$where = array('idperusahaan' => $idperusahaan);
		$data['query']   = $this->m_perusahaan->edit_data($where,'perusahaan')->result();
		$data['qry']     = $this->db->order_by('idresi desc')->limit(1)->get('biodata')->row();
		$data['provinsi']= $this->m_select->provinsi();
		$this->load->view('edit_perusahaan',$data);
	}
	function update(){

		$idperusahaan = $this->input->post('idperusahaan');
		
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file + fungsi time
        $config['upload_path'] = './asset/img/perusahaan'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
		
		 $this->upload->initialize($config);
         $this->upload->do_upload('upload_struk_organisasi');

         $gbr  = $this->upload->file_name;  

         $this->upload->do_upload('srs_tansi');
         
         $gbr2 = $this->upload->file_name; 	
          
		
        $nama_perusahaan        = $this->input->post('nama_perusahaan');
		$tpemilik_koprasi       = $this->input->post('tpemilik_koprasi');
		$p_binaan_pk            = $this->input->post('p_binaan_pk');
		$kd_binaan              = $this->input->post('kd_binaan');
		$bidang_usaha           = $this->input->post('bidang_usaha');
		$jenis_usaha            = $this->input->post('jenis_usaha');
		$alamat_perusahaan      = $this->input->post('alamat_perusahaan');
		$kelurahan_perusahaan   = $this->input->post('kelurahan_perusahaan');
		$kecamatan_perusahaan   = $this->input->post('kecamatan_perusahaan');
		$kota_perusahaan        = $this->input->post('kota_perusahaan');
		$provinsi_p             = $this->input->post('provinsi_p');
		$kode_pos_p             = $this->input->post('kode_pos_p');
		$notlp_perusahaan       = $this->input->post('notlp_perusahaan');
		$stt_usaha              = $this->input->post('stt_usaha');
		$thn_sttusaha           = $this->input->post('thn_sttusaha');
		$siup                   = $this->input->post('siup');
		$tdp                    = $this->input->post('tdp');
		$ho                     = $this->input->post('ho');
		$situ                   = $this->input->post('situ');
		$sku                    = $this->input->post('sku');
		$bdn_hukum              = $this->input->post('bdn_hukum');
		$npwp                   = $this->input->post('npwp');
		$nmpgang_hak            = $this->input->post('nmpgang_hak');
		$lokasi_tanah           = $this->input->post('lokasi_tanah');
		$luas_tanah             = $this->input->post('luas_tanah');
		$no_tanah               = $this->input->post('no_tanah');
		$berdiri_tahun          = $this->input->post('berdiri_tahun');
		$jml_karyawan           = $this->input->post('jml_karyawan');
		$jml_teng_ahli          = $this->input->post('jml_teng_ahli');
		$jml_pengurus           = $this->input->post('jml_pengurus');
		$rekening_koran         = $this->input->post('rekening_koran');
		$nama_bank_koran        = $this->input->post('nama_bank_koran');
		$alamat_bank_koran      = $this->input->post('alamat_bank_koran');
		$nomer_buku_tabungan    = $this->input->post('nomer_buku_tabungan');
		$nama_bank              = $this->input->post('nama_bank');
		$alamat_tabungan        = $this->input->post('alamat_tabungan');
		$bantuan_l              = $this->input->post('bantuan_l');
		$cekbiodata             = $this->m_perusahaan->datap();
	    $resi                   = $cekbiodata->row()->idresi;
        
		$data = array(
			'nama_perusahaan'        => $nama_perusahaan,
			'tpemilik_koprasi'       => $tpemilik_koprasi,
			'p_binaan_pk'            => $p_binaan_pk,
			'kd_binaan'              => $kd_binaan,
			'bidang_usaha'           => $bidang_usaha,
			'jenis_usaha'            => $jenis_usaha,
			'alamat_perusahaan'      => $alamat_perusahaan,
			'kelurahan_perusahaan'   => $kelurahan_perusahaan,
			'kecamatan_perusahaan'   => $kecamatan_perusahaan,
			'kota_perusahaan'        => $kota_perusahaan,
			'provinsi_p'             => $provinsi_p,
			'kode_pos_p'             => $kode_pos_p,
			'notlp_perusahaan'       => $notlp_perusahaan,
			'upload_struk_organisasi'=> $gbr,
			'stt_usaha'              => $stt_usaha,
			'thn_sttusaha'           => $thn_sttusaha,
			'siup'                   => $siup,
			'tdp'                    => $tdp,
			'ho'                     => $ho,
			'situ'                   => $situ,
			'sku'                    => $sku,
			'bdn_hukum'              => $bdn_hukum,
			'npwp'                   => $npwp,
			'nmpgang_hak'            => $nmpgang_hak,
			'lokasi_tanah'           => $lokasi_tanah,
			'luas_tanah'             => $luas_tanah,
			'no_tanah'               => $no_tanah,
			'srs_tansi'              => $gbr2,
			'berdiri_tahun'          => $berdiri_tahun,
			'jml_karyawan'           => $jml_karyawan,
			'jml_teng_ahli'          => $jml_teng_ahli,
			'jml_pengurus'           => $jml_pengurus,
			'rekening_koran'         => $rekening_koran,
			'nama_bank_koran'        => $nama_bank_koran,
			'alamat_bank_koran'      => $alamat_bank_koran,
			'nomer_buku_tabungan'    => $nomer_buku_tabungan,
			'nama_bank'              => $nama_bank,
			'alamat_tabungan'        => $alamat_tabungan,
			'bantuan_l'              => $bantuan_l,
			'idresi'                 => $resi
			);

	$where = array(
		'idperusahaan' => $idperusahaan
	);
 
 
    $this->m_perusahaan->update_data($where,$data,'perusahaan');
    redirect('keuangan/index');
	
 
    }
    function ambil_data()
    {

      $modul = $this->input->post('modul');
      $id    = $this->input->post('id');

		if($modul=="kabupaten"){
		echo $this->m_select->kabupaten($id);
		}
		else if($modul=="kecamatan"){
		echo $this->m_select->kecamatan($id);

		}
		else if($modul=="kelurahan"){
		    echo $this->m_select->kelurahan($id);
		   }

      }
}

?>