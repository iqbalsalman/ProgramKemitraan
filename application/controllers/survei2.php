<?php

 
class Survei2 extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_survei2');
		$this->load->model('m_select');
		$this->load->helper('url');

	}
 
	
	function index(){
		$data['provinsi']=$this->m_select->provinsi();
		$data['qry'] = $this->db->order_by('idsurvei1 desc')->limit(1)->get('survei1')->row();
		$this->load->view('survei2',$data);
	}
	function login(){
        $this->load->view('login2');
    }

	function insert(){
		$jb_modal          =   $this->input->post('jb_modal');
		$s_pembelian       =   $this->input->post('s_pembelian');
		$asal_pembelian    =   $this->input->post('asal_pembelian');
		$k_stok_barang     =   $this->input->post('k_stok_barang');
		$t_stok_barang     =   $this->input->post('t_stok_barang');
		$k_stok_barang_r   =   $this->input->post('k_stok_barang_r');
        $t_stok_barang_r   =   $this->input->post('t_stok_barang_r');
        $k_penjualan_r     =   $this->input->post('k_penjualan_r');
        $nilai_penjualan_r =   $this->input->post('nilai_penjualan_r');
        $p_laba_angsur     =   $this->input->post('p_laba_angsur');
        $j_baku_bibit      =   $this->input->post('j_baku_bibit');
        $s_baku            =   $this->input->post('s_baku');
        $s_bibit           =   $this->input->post('s_bibit');
        $k_butuhan_baku    =   $this->input->post('k_butuhan_baku');
        $t_butuhan_baku    =   $this->input->post('t_butuhan_baku');
        $j_bahan_penolong  =   $this->input->post('j_bahan_penolong');
        $s_bahan_penolong  =   $this->input->post('s_bahan_penolong');
        $k_bahan_penolong  =   $this->input->post('k_bahan_penolong');
        $t_bahan_penolong  =   $this->input->post('t_bahan_penolong');
        $h_peroduksi       =   $this->input->post('h_peroduksi');
        $k_peroduksi_rata  =   $this->input->post('k_peroduksi_rata');
        $k_penjualan_rata  =   $this->input->post('k_penjualan_rata');
        $n_penjualan_rata  =   $this->input->post('n_penjualan_rata');
        $k_angsur_rata     =   $this->input->post('k_angsur_rata');
        $p_pinjaman_anggota=   $this->input->post('p_pinjaman_anggota');
        $k_pemberi_pinjaman=   $this->input->post('k_pemberi_pinjaman');
        $bunga_anggota     =   $this->input->post('bunga_anggota');
        $n_bunga_anggota   =   $this->input->post('n_bunga_anggota');
        $jangka_waktu      =   $this->input->post('jangka_waktu');
        $k_yisih_laba      =   $this->input->post('k_yisih_laba');
        $pelanggan_tetap   =   $this->input->post('pelanggan_tetap');
        $c_pembayaran      =   $this->input->post('c_pembayaran');
        $bn_bayar          =   $this->input->post('bn_bayar');
        $c_pengiriman      =   $this->input->post('c_pengiriman');
        $w_pasaran         =   $this->input->post('w_pasaran');
        $kemitraan_assosiasi1=   $this->input->post('kemitraan_assosiasi1');
        $kemitraan_assosiasi2=   $this->input->post('kemitraan_assosiasi2');
        $jml_pegawai       =   $this->input->post('jml_pegawai');
        $t_ahli            =   $this->input->post('t_ahli');
        $t_sedang          =   $this->input->post('t_sedang');
        $t_kurang          =   $this->input->post('t_kurang');
        $c_orang           =   $this->input->post('c_orang');
        $jml_orang         =   $this->input->post('jml_orang');
        $upah_rendah       =   $this->input->post('upah_rendah');
        $upah_tinggi       =   $this->input->post('upah_tinggi');
        $c_memperoleh      =   $this->input->post('c_memperoleh');
        $jml_pengurus      =   $this->input->post('jml_pengurus');
        $jml_anggota       =   $this->input->post('jml_anggota');
        $manajemen_p       =   $this->input->post('manajemen_p');
        $ke_produksi       =   $this->input->post('ke_produksi');
        $pemasaran_produk  =   $this->input->post('pemasaran_produk');
        $keuangan          =   $this->input->post('keuangan');
        $pesaing           =   $this->input->post('pesaing');
        $langkah_dilakukan =   $this->input->post('langkah_dilakukan');
        $langkah_lainnya   =   $this->input->post('langkah_lainnya');
        $idsurvei1         =   $this->input->post('idsurvei1');

		$data = array(
	    'jb_modal'                  => $jb_modal,        
		's_pembelian'               => $s_pembelian,         
		'asal_pembelian'            => $asal_pembelian,      
		'k_stok_barang'             => $k_stok_barang,        
		't_stok_barang'             => $t_stok_barang,       
		'k_stok_barang_r'           => $k_stok_barang_r,      
        't_stok_barang_r'           => $t_stok_barang_r,
        'k_penjualan_r'             => $k_penjualan_r,
        'p_laba_angsur'             => $p_laba_angsur,      
        'j_baku_bibit'              => $j_baku_bibit,       
        's_baku'                    => $s_baku,              
        's_bibit'                   => $s_bibit,            
        'k_butuhan_baku'            => $k_butuhan_baku,
        't_butuhan_baku'            => $t_butuhan_baku,
        'j_bahan_penolong'          => $j_bahan_penolong,
        's_bahan_penolong'          => $s_bahan_penolong,   
        'k_bahan_penolong'          => $k_bahan_penolong,
        't_bahan_penolong'          => $t_bahan_penolong,
        'h_peroduksi'               => $h_peroduksi,         
        'k_peroduksi_rata'          => $k_peroduksi_rata,     
        'k_penjualan_rata'          => $k_penjualan_rata,     
       'n_penjualan_rata'           => $n_penjualan_rata,  
        'k_angsur_rata'             => $k_angsur_rata,     
        'p_pinjaman_anggota'        => $p_pinjaman_anggota,  
        'k_pemberi_pinjaman'        => $k_pemberi_pinjaman, 
        'bunga_anggota'             => $bunga_anggota,       
        'n_bunga_anggota'           => $n_bunga_anggota,      
        'jangka_waktu'              => $jangka_waktu,        
        'k_yisih_laba'              => $k_yisih_laba,         
        'pelanggan_tetap'           => $pelanggan_tetap,     
        'c_pembayaran'              => $c_pembayaran,         
        'bn_bayar'                  => $bn_bayar,
        'c_pengiriman'              => $c_pengiriman,       
        'w_pasaran'                 => $w_pasaran,
        'kemitraan_assosiasi1'      => $kemitraan_assosiasi1,
        'kemitraan_assosiasi2'      => $kemitraan_assosiasi2,
        'jml_pegawai'               => $jml_pegawai,         
        't_ahli'                    => $t_ahli,               
        't_sedang'                  => $t_sedang,             
        't_kurang'                  => $t_kurang,            
        'c_orang'                   => $c_orang,
        'jml_orang'                 => $jml_orang,        
        'upah_rendah'               => $upah_rendah,     
        'upah_tinggi'               => $upah_tinggi,       
        'c_memperoleh'              => $c_memperoleh,         
        'jml_pengurus'              => $jml_pengurus,       
        'jml_anggota'               => $jml_anggota,         
        'manajemen_p'               => $manajemen_p,      
        'ke_produksi'               => $ke_produksi,          
        'pemasaran_produk'          => $pemasaran_produk,     
        'keuangan'                  => $keuangan,           
        'pesaing'                   => $pesaing,              
        'langkah_dilakukan'         => $langkah_dilakukan,   
        'langkah_lainnya'           => $langkah_lainnya,
        'idsurvei1'                 => $idsurvei1     
			);
		$this->m_survei2->input_data($data,'survei2');
		redirect('survei3/index');
	}
	// function hapus($idsurvei2){
	// 	$where = array('idsurvei2' => $idsurvei2);
	// 	$this->m_perusahaan->hapus_data($where,'perusahaan');
	// 	redirect('perusahaan/index');
	// }
 
	function edit($idsurvei2){
		$where = array('idsurvei2' => $idsurvei2);
		$data['query'] = $this->m_survei2->edit_data($where,'survei2')->result();

		$this->load->view('edit_survei2',$data);
	}
	function update(){

		$idperusahaan = $this->input->post('idperusahaan');
		
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file + fungsi time
        $config['upload_path'] = './asset/img/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
		
		 $this->upload->initialize($config);
         $this->upload->do_upload('upload_struk_organisasi');
         $gbr = $this->upload->file_name;  
         $this->upload->do_upload('srs_tansi');
         $gbr2 = $this->upload->file_name; 	
          
		
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$tpemilik_koprasi= $this->input->post('tpemilik_koprasi');
		$p_binaan_pk = $this->input->post('p_binaan_pk');
		$kd_binaan = $this->input->post('kd_binaan');
		$bidang_usaha = $this->input->post('bidang_usaha');
		$jenis_usaha= $this->input->post('jenis_usaha');
		$alamat_perusahaan = $this->input->post('alamat_perusahaan');
		$kelurahan_perusahaan = $this->input->post('kelurahan_perusahaan');
		$kecamatan_perusahaan = $this->input->post('kecamatan_perusahaan');
		$kota_perusahaan = $this->input->post('kota_perusahaan');
		$provinsi_p = $this->input->post('provinsi_p');
		$kode_pos_p = $this->input->post('kode_pos_p');
		$notlp_perusahaan= $this->input->post('notlp_perusahaan');
		$stt_usaha= $this->input->post('stt_usaha');
		$thn_sttusaha = $this->input->post('thn_sttusaha');
		$siup = $this->input->post('siup');
		$tdp = $this->input->post('tdp');
		$ho = $this->input->post('ho');
		$situ = $this->input->post('situ');
		$sku = $this->input->post('sku');
		$npwp= $this->input->post('npwp');
		$nmpgang_hak= $this->input->post('nmpgang_hak');
		$lokasi_tanah= $this->input->post('lokasi_tanah');
		$luas_tanah= $this->input->post('luas_tanah');
		$no_tanah= $this->input->post('no_tanah');
		$berdiri_tahun = $this->input->post('berdiri_tahun');
		$jml_karyawan = $this->input->post('jml_karyawan');
		$jml_teng_ahli = $this->input->post('jml_teng_ahli');
		$jml_pengurus = $this->input->post('jml_pengurus');
		$rekening_koran = $this->input->post('rekening_koran');
		$nama_bank_koran = $this->input->post('nama_bank_koran');
		$alamat_bank_koran = $this->input->post('alamat_bank_koran');
		$nomer_buku_tabungan = $this->input->post('nomer_buku_tabungan');
		$nama_bank = $this->input->post('nama_bank');
		$alamat_tabungan = $this->input->post('alamat_tabungan');
		$bantuan_l = $this->input->post('bantuan_l');
		$idresi=$this->input->post('idresi');
        
       

		$data = array(
			'nama_perusahaan' => $nama_perusahaan,
			'tpemilik_koprasi' => $tpemilik_koprasi,
			'p_binaan_pk' =>$p_binaan_pk,
			'kd_binaan' => $kd_binaan,
			'bidang_usaha' => $bidang_usaha,
			'jenis_usaha' =>$jenis_usaha,
			'alamat_perusahaan' => $alamat_perusahaan,
			'kelurahan_perusahaan' => $kelurahan_perusahaan,
			'kecamatan_perusahaan' => $kecamatan_perusahaan,
			'kota_perusahaan' =>$kota_perusahaan,
			'provinsi_p' => $provinsi_p,
			'kode_pos_p' => $kode_pos_p,
			'notlp_perusahaan' =>$notlp_perusahaan,
			'upload_struk_organisasi' => $gbr,
			'stt_usaha' =>$stt_usaha,
			'thn_sttusaha' => $thn_sttusaha,
			'siup' => $siup,
			'tdp' => $tdp,
			'ho' => $ho,
			'situ' => $situ,
			'sku' => $sku,
			'npwp' => $npwp,
			'nmpgang_hak' => $nmpgang_hak,
			'lokasi_tanah' => $lokasi_tanah,
			'luas_tanah' => $luas_tanah,
			'no_tanah' => $no_tanah,
			'srs_tansi' => $gbr2,
			'berdiri_tahun' =>$berdiri_tahun,
			'jml_karyawan' => $jml_karyawan,
			'jml_teng_ahli' => $jml_teng_ahli,
			'jml_pengurus' =>$jml_pengurus,
			'rekening_koran' => $rekening_koran,
			'nama_bank_koran' =>$nama_bank_koran,
			'alamat_bank_koran' => $alamat_bank_koran,
			'nomer_buku_tabungan' => $nomer_buku_tabungan,
			'nama_bank' =>$nama_bank,
			'alamat_tabungan' => $alamat_tabungan,
			'bantuan_l' =>$bantuan_l,
			'idresi' =>$idresi
			);

	$where = array(
		'idperusahaan' => $idperusahaan
	);
 
 
$this->m_perusahaan->update_data($where,$data,'perusahaan');
		redirect('keuangan/index');
	
 
    }
    function ambil_data(){

$modul=$this->input->post('modul');
$id=$this->input->post('id');

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