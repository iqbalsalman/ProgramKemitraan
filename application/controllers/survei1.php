<?php

 
class Survei1 extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_survei1');
		$this->load->model('m_select');
		$this->load->model('mnotifikasi');
		$this->load->helper('url');

	}
 
	// function index(){
	// 	$data['query'] = $this->m_data->tampil_data()->result();
	// 	$data['qry'] = $this->db->order_by('idresi desc')->limit(1)->get('perusahaan')->row();
	// 	$data['provinsi']=$this->m_select->provinsi();
	// 	$this->load->view('Data_perusahaan',$data);		
	// }
	function survei($idpenilaian){
        $where = array('idpenilaian' => $idpenilaian);
        $data['query'] = $this->m_survei1->surveip($idpenilaian)->result();
		$data['provinsi']=$this->m_select->provinsi();
		$this->load->view('survei1',$data);
	}


	function nilai_proposal(){
	    $data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count1(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi1(); //menampilkan isi postingan
		$data['ceklis']  = $this->m_survei1->datan()->result();
		$this->load->view('detailnilai/nilai_proposal_s',$data);
		$tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
	}
	function nilai_survei(){
	    $data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count1(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi1(); //menampilkan isi postingan
		$data['ceklis']  = $this->m_survei1->datan()->result();
		$this->load->view('detailnilai/nilai_survei_s',$data);
		$tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }

	}
	function login(){
        $this->load->view('login2');
    }
	function nilai_evaluasi(){
	    $data['title'] = 'Notifikasi seperti difacebook CodeIgniter'; //judul title
        $data['jlhnotif'] = $this->mnotifikasi->notif_count1(); //menghitung jumlah post
        $data['notifikasi'] = $this->mnotifikasi->getnotifikasi1(); //menampilkan isi postingan
		$data['ceklis']  = $this->m_survei1->datan()->result();
		$this->load->view('detailnilai/nilai_evaluasi1_s',$data);
		$tgldv = time();

        //$que=$this->db->query("SELECT id,tgl FROM t_nitifikasifb WHERE tgl < $tgldv")->result();
        $que = $this->db->query("SELECT id,tgl, FROM_UNIXTIME(tgl,'%Y%m%d') AS tglbru , CURDATE()-4 AS newtgl FROM t_nitifikasifb WHERE FROM_UNIXTIME(tgl,'%Y%m%d') < CURDATE()-2")->result();

        foreach ($que as $newque) {
            $id = $newque->id;
            $this->db->query("DELETE FROM t_nitifikasifb WHERE id='$id'");
            //menghapus otomatis
        }
	}

	function insert(){
	    $tgl_anggaran      =   $this->m_survei1->gets();
		$nm_pemilik        =   $this->input->post('nm_pemilik');
		$n_ktp             =   $this->input->post('n_ktp');
		$tgl_berlaku       =   $this->input->post('tgl_berlaku');
		$n_usaha           =   $this->input->post('n_usaha');
		$sektor_usaha      =   $this->input->post('sektor_usaha');
		$alamat_usaha      =   $this->input->post('alamat_usaha');
        $provinsi_e        =   $this->input->post('provinsi_e');
        $kota_kab          =   $this->input->post('kota_kab');
        $kecamatan         =   $this->input->post('kecamatan');
        $kelurahan_e       =   $this->input->post('kelurahan_e');
        $pembinaan         =   $this->input->post('pembinaan');
        $tahap             =   $this->input->post('tahap');
        $thn_binaan        =   $this->input->post('thn_binaan');
        $no_binaan         =   $this->input->post('no_binaan');
        $nm_bumn_lain      =   $this->input->post('nm_bumn_lain');
        $sls_bina          =   $this->input->post('sls_bina');
        $kas_t             =   $this->input->post('kas_t');
        $bank              =   $this->input->post('bank');
        $piutang           =   $this->input->post('piutang');
        $bhn_baku          =   $this->input->post('bhn_baku');
        $p_produksi        =   $this->input->post('p_produksi');
        $p_kantor          =   $this->input->post('p_kantor');
        $jml_asset         =   $kas_t+$bank+$piutang+$bhn_baku+$p_produksi+$p_kantor;
        $bangunan          =   $this->input->post('bangunan');
        $tanah             =   $this->input->post('tanah');
        $jml_assettetap    = $bangunan+$tanah;
        $total_asset       =   $jml_asset+$jml_assettetap;
        $h_barang          =   $this->input->post('h_barang');
        $jml_bln           =   $this->input->post('jml_bln');
        $jml_bulanan       =   $h_barang+$jml_bln;
        $jml_tahunan       =   $jml_bulanan*12;
        $h_pokokpenjualan   =   $this->input->post('h_pokokpenjualan');
        $b_operasional     =   $this->input->post('b_operasional');
        $jml_hpp           =   $h_pokokpenjualan+$b_operasional;
        $laba_bersih_e       =   $jml_bulanan-$jml_hpp;
        $pb_hutang         =   $this->input->post('pb_hutang');
        $sisa_hutang       =   $this->input->post('sisa_hutang');
        $angsuran_bln      =   $this->input->post('angsuran_bln');
        $sisa_angsuran     =   $this->input->post('h_barang');
        $idevaluasi = $this->input->post('idevaluasi');
        if (33000 >= $laba_bersih_e){

       $perkiraan_dana=1000000;

	}elseif (49500 >= $laba_bersih_e) {

		$perkiraan_dana=1500000;

	}elseif( 66000 >= $laba_bersih_e){

		$perkiraan_dana = 2000000;

	}elseif (82500 >= $laba_bersih_e){

		$perkiraan_dana = 2500000;

	}elseif (99000  >= $laba_bersih_e) {
		# code...
		$perkiraan_dana = 3000000;

	}elseif (115500 >=  $laba_bersih_e) {
		
		$perkiraan_dana = 3500000;

	}elseif (132000 >= $laba_bersih_e ) {
		
		$perkiraan_dana = 4000000;

	}elseif (147500  >=  $laba_bersih_e) {

		$perkiraan_dana = 4500000;

	}elseif (164000 >=  $laba_bersih_e ) {
		
		$perkiraan_dana = 5000000;

	}elseif (180500   >= $laba_bersih_e) {
		
		$perkiraan_dana = 5500000;

	} elseif (197000  >= $laba_bersih_e) {
		
		$perkiraan_dana = 6000000;

	} elseif ( 213500  >= $laba_bersih_e) {
		
		$perkiraan_dana = 6500000;

	} elseif ( 230000  >= $laba_bersih_e) {
		
		$perkiraan_dana = 7000000;

	} elseif (246500   >= $laba_bersih_e) {
		
		$perkiraan_dana = 7500000;

	} elseif (263000   >= $laba_bersih_e) {
		
		$perkiraan_dana = 8000000;

	} elseif (279500   >= $laba_bersih_e) {
		
		$perkiraan_dana = 8500000;

	} elseif (295000  >= $laba_bersih_e) {
		
		$perkiraan_dana = 9000000;

	} elseif (311500  >= $laba_bersih_e) {
		
		$perkiraan_dana = 9500000;

	} elseif (328000  >= $laba_bersih_e) {
		
		$perkiraan_dana = 10000000;

	} elseif (344500 >=  $laba_bersih_e) {
		
		$perkiraan_dana = 10500000;

	} elseif (361000  >= $laba_bersih_e) {
		
		$perkiraan_dana = 11000000;

	} elseif (377500 >= $laba_bersih_e) {
		
		$perkiraan_dana = 11500000;

	} elseif (394000  >= $laba_bersih_e ) {
		
		$perkiraan_dana = 12000000;

	} elseif (410500  >= $laba_bersih_e) {
		
		$perkiraan_dana = 12500000;

	} elseif (427000  >= $laba_bersih_e ) {
		
		$perkiraan_dana = 13000000;

	} elseif (442500  >= $laba_bersih_e ) {
		
		$perkiraan_dana = 13500000;

	} elseif (459000 >=  $laba_bersih_e) {
		
		$perkiraan_dana = 14000000;

	} elseif (475500   >= $laba_bersih_e) {
		
		$perkiraan_dana = 14500000;

	} elseif(492000 >=  $laba_bersih_e){

       $perkiraan_dana = 15000000;

	}elseif(508500 >= $laba_bersih_e){

		$perkiraan_dana = 15500000;

	}elseif(525000 >= $laba_bersih_e){

		$perkiraan_dana = 16000000;

	}elseif(541500 >=$laba_bersih_e  ){

		$perkiraan_dana =16500000;

	}elseif(558000  >= $laba_bersih_e ){

		$perkiraan_dana = 17000000;

	}elseif (574500  >= $laba_bersih_e) {
		
		$perkiraan_dana = 17500000;

	}elseif (590000 >= $laba_bersih_e){

		$perkiraan_dana = 18000000;

	}elseif(606500  >= $laba_bersih_e){

		$perkiraan_dana = 18500000;

	}elseif(623000  >= $laba_bersih_e){

		$perkiraan_dana = 19000000;

	}elseif(639500  >= $laba_bersih_e ){

		$perkiraan_dana = 19500000;
		
	}elseif(656000  >= $laba_bersih_e ) {

		$perkiraan_dana = 20000000;

	}elseif(672500  >= $laba_bersih_e){

		$perkiraan_dana = 20500000;

	}elseif(689000 >= $laba_bersih_e){

		$perkiraan_dana = 21000000;

	}elseif(705500  >= $laba_bersih_e){

		$perkiraan_dana = 21500000;

	}elseif (722000  >= $laba_bersih_e) {

		$perkiraan_dana = 22000000;

	}elseif(737500  >= $laba_bersih_e){

		$perkiraan_dana = 22500000;

	}elseif(754000 >= $laba_bersih_e ){

		$perkiraan_dana = 23000000;

	}elseif(770500  >= $laba_bersih_e){

		$perkiraan_dana = 23500000;

	}elseif(787000  >= $laba_bersih_e){

		$perkiraan_dana = 24000000;

	}elseif(803500  >= $laba_bersih_e){

		$perkiraan_dana = 24500000;

	}elseif(820000  >= $laba_bersih_e){

		$perkiraan_dana = 25000000;

	}elseif(836500  >=  $laba_bersih_e){

		$perkiraan_dana = 25500000;

	}elseif(853000  >= $laba_bersih_e){

		$perkiraan_dana = 26000000;

	}elseif(869500  >=  $laba_bersih_e){

		$perkiraan_dana = 26500000;

	}elseif(885000  >= $laba_bersih_e){

		$perkiraan_dana = 27000000;

	}elseif(901500  >= $laba_bersih_e){

		$perkiraan_dana =27500000;

	}elseif(918000  >= $laba_bersih_e){

		$perkiraan_dana = 28000000;

	}elseif(934500  >= $laba_bersih_e){

		$perkiraan_dana =28500000;

	}elseif(951000  >= $laba_bersih_e){

		$perkiraan_dana = 29000000;

	} elseif(967500  >= $laba_bersih_e ){

		$perkiraan_dana = 29500000;

	}elseif(984000  >= $laba_bersih_e ){

		$perkiraan_dana = 30000000;

	}elseif(1000500  >= $laba_bersih_e ){

		$perkiraan_dana = 30500000;

	}elseif( 1017000 >= $laba_bersih_e){

		$perkiraan_dana = 31000000;

	}elseif(1032500  >=  $laba_bersih_e){

		$perkiraan_dana = 31500000;

	}elseif(1049000 >= $laba_bersih_e ){

		$perkiraan_dana = 32000000;

	}elseif(1065500  >=  $laba_bersih_e){

		$perkiraan_dana = 32500000;

	}elseif(1082000 >=  $laba_bersih_e){

		$perkiraan_dana = 33000000;

	}elseif(1098500  >= $laba_bersih_e){

		$perkiraan_dana = 33500000;

	}elseif(1115000  >= $laba_bersih_e){

		$perkiraan_dana = 34000000;

	}elseif(1131500  >= $laba_bersih_e){

		$perkiraan_dana = 34500000;

	}elseif(1148000  >= $laba_bersih_e ){

		$perkiraan_dana = 35000000;

	}elseif(1164500   >=  $laba_bersih_e){

		$perkiraan_dana = 35500000;

	}elseif(1180000  >= $laba_bersih_e){

		$perkiraan_dana = 36000000;

	}elseif(1196500  >= $laba_bersih_e){

		$perkiraan_dana = 36500000;

	}elseif(1213000  >= $laba_bersih_e){

		$perkiraan_dana = 37000000;

	}elseif(1229500  >= $laba_bersih_e ){

		$perkiraan_dana = 37500000;

	}elseif(1246000  >=  $laba_bersih_e){

		$perkiraan_dana = 38000000;

	}elseif(1262500   >= $laba_bersih_e){

		$perkiraan_dana = 38500000;

	}elseif(1279000  >= $laba_bersih_e){

		$perkiraan_dana = 39000000;

	}elseif(1295500  >= $laba_bersih_e){

		$perkiraan_dana = 39500000;

	}elseif(1312000 >=  $laba_bersih_e ){

		$perkiraan_dana = 40000000;

	}elseif(1327500  >= $laba_bersih_e ){

		$perkiraan_dana = 40500000;

	}elseif(1344000   >=  $laba_bersih_e){

		$perkiraan_dana = 41000000;

	}elseif(1360500  >= $laba_bersih_e ){

		$perkiraan_dana = 41500000;

	}elseif(1377000  >= $laba_bersih_e){

		$perkiraan_dana = 42000000;

	}elseif(1393500  >= $laba_bersih_e){

		$perkiraan_dana = 42500000;

	}elseif(1410000 >= $laba_bersih_e ){

		$perkiraan_dana = 43000000;

	}elseif(1426500  >= $laba_bersih_e){

		$perkiraan_dana = 43500000;

	}elseif(1443000  >= $laba_bersih_e ){

		$perkiraan_dana = 44000000;

	}elseif(1459500   >= $laba_bersih_e){

		$perkiraan_dana = 44500000;

	}elseif(1475000   >= $laba_bersih_e){

		$perkiraan_dana = 45000000;

	}elseif(1491500  >= $laba_bersih_e){

		$perkiraan_dana = 45500000;

	}elseif( 1508000 >= $laba_bersih_e){

		$perkiraan_dana = 46000000;

	}elseif(1524500  >= $laba_bersih_e){

		$perkiraan_dana =46500000;

	}elseif( 1541000 >= $laba_bersih_e){

		$perkiraan_dana = 47000000;

	}elseif(1557500  >= $laba_bersih_e){

		$perkiraan_dana = 47500000;

	}elseif(1574000  >= $laba_bersih_e){

		$perkiraan_dana = 48000000;

	}elseif(1590500   >= $laba_bersih_e){

		$perkiraan_dana = 48500000;

	}elseif(1607000  >= $laba_bersih_e ){

		$perkiraan_dana = 49000000;

	}elseif(1622500  >= $laba_bersih_e){

		$perkiraan_dana = 49500000;

	}elseif(1639000  >= $laba_bersih_e ){

		$perkiraan_dana = 50000000;

	}elseif(1655500 >= $laba_bersih_e  ){

		$perkiraan_dana = 50500000;

	}elseif(1672000  >= $laba_bersih_e){

		$perkiraan_dana = 51000000;

	}elseif(1688500  >=  $laba_bersih_e){

		$perkiraan_dana = 51500000;

	}elseif(1705000  >= $laba_bersih_e ){

		$perkiraan_dana = 52000000;

	}elseif(1721500  >= $laba_bersih_e ){

		$perkiraan_dana = 52500000;

	}elseif(1738000  >= $laba_bersih_e){

		$perkiraan_dana = 53000000;

	}elseif(1754500 >= $laba_bersih_e){

		$perkiraan_dana = 53500000;

	}elseif(1770000  >= $laba_bersih_e){

		$perkiraan_dana = 54000000;

	}elseif(1786500   >= $laba_bersih_e){

		$perkiraan_dana = 54500000;

	}elseif(1803000  >= $laba_bersih_e ){

		$perkiraan_dana = 55000000;

	}elseif(1819500  >=  $laba_bersih_e){

		$perkiraan_dana = 55500000;

	}elseif(1836000  >= $laba_bersih_e ){

		$perkiraan_dana = 56000000;

	}elseif(1852500  >= $laba_bersih_e){

		$perkiraan_dana = 56500000;

	}elseif(1869000  >= $laba_bersih_e){

		$perkiraan_dana = 57000000;

	}elseif(1885500  >= $laba_bersih_e){

		$perkiraan_dana = 57500000;

	}elseif(1902000  >=  $laba_bersih_e){

		$perkiraan_dana = 58000000;

	}elseif(1917500  >= $laba_bersih_e){

		$perkiraan_dana = 58500000;

	}elseif(1934000 >= $laba_bersih_e ){

		$perkiraan_dana = 59000000;

	}elseif(1950500  >= $laba_bersih_e){

		$perkiraan_dana  =59500000;

	}elseif(1967000  >= $laba_bersih_e ){

		$perkiraan_dana = 60000000;

	}elseif(1983500  >= $laba_bersih_e ){

		$perkiraan_dana = 60500000;

	}elseif(2000000  >= $laba_bersih_e ){

		$perkiraan_dana = 61000000;

	}elseif(2016500  >= $laba_bersih_e){

		$perkiraan_dana = 61500000;

	}elseif(2033000  >= $laba_bersih_e){

		$perkiraan_dana = 62000000;

	}elseif(2049500  >= $laba_bersih_e ){

		$perkiraan_dana = 62500000;

	}elseif(2065000  >=  $laba_bersih_e){

		$perkiraan_dana = 63000000;

	}elseif(2081500  >= $laba_bersih_e){

		$perkiraan_dana = 63500000;

	}elseif (2098000  >= $laba_bersih_e ) {
		
		$perkiraan_dana = 64000000;

	}elseif(2114500  >= $laba_bersih_e){

		$perkiraan_dana = 64500000;

	}elseif(2131000   >=  $laba_bersih){

		$perkiraan_dana = 65000000;

	}elseif(2147500   >= $laba_bersih_e){

		$perkiraan_dana = 65500000;

	}elseif(2164000  >= $laba_bersih_e ){

		$perkiraan_dana = 66000000;

	}elseif(2180500  >= $laba_bersih_e){

		$perkiraan_dana = 66500000;

	}elseif(2197000  >= $laba_bersih_e){

		$perkiraan_dana = 67000000;

	}elseif(2212500  >= $laba_bersih_e){

		$perkiraan_dana = 67500000;

	}elseif(2229000  >=  $laba_bersih_e){

		$perkiraan_dana = 68000000;

	}elseif(2245500  >= $laba_bersih_e ){

		$perkiraan_dana = 68500000;

	}elseif(2262000 >= $laba_bersih_e ){

		$perkiraan_dana = 69000000;

	}elseif(2278500 >= $laba_bersih_e ){

		$perkiraan_dana = 69500000;

	}elseif(2295000  >=  $laba_bersih_e){

		$perkiraan_dana = 70000000;

	}elseif(2311500  >= $laba_bersih_e){

		$perkiraan_dana = 70500000;

	}elseif(2328000  >= $laba_bersih_e){

		$perkiraan_dana = 71000000;

	}elseif(2344500 >= $laba_bersih_e){

		$perkiraan_dana = 71500000;

	}elseif(2360000  >= $laba_bersih_e){

		$perkiraan_dana = 72000000;

	}elseif(2376500  >= $laba_bersih_e){

		$perkiraan_dana = 72500000;

	}elseif(2393000  >= $laba_bersih_e ){

		$perkiraan_dana = 73000000;

	}elseif(2409500  >= $laba_bersih_e ){

		$perkiraan_dana = 73500000;

	}elseif(2426000  >= $laba_bersih_e ){

		$perkiraan_dana = 74000000;

	}elseif(2442500  >= $laba_bersih_e){

		$perkiraan_dana = 74500000;

	}else{

		$perkiraan_dana = 75000000;

	}
		$data = array(
			'tgl_anggaran'          => $tgl_anggaran,
			'nm_pemilik'            => $nm_pemilik,
			'n_ktp'                 => $n_ktp,
			'tgl_berlaku'           => $tgl_berlaku,
			'n_usaha'               => $n_usaha,
			'sektor_usaha'          => $sektor_usaha,
			'alamat_usaha'          => $alamat_usaha,
			'provinsi_e'            => $provinsi_e,
			'kota_kab'              => $kota_kab,
			'kecamatan'             => $kecamatan,
			'kelurahan_e'           => $kelurahan_e,
			'pembinaan'             => $pembinaan,
			'tahap'                 => $tahap,
			'thn_binaan'            => $thn_binaan,
			'no_binaan'             => $no_binaan,
			'nm_bumn_lain'          => $nm_bumn_lain,
			'sls_bina'              => $sls_bina,
			'kas_t'                 => $kas_t,
			'bank'                  => $bank,
			'piutang'               => $piutang,
			'bhn_baku'              => $bhn_baku,
			'p_produksi'            => $p_produksi,
			'p_kantor'              => $p_kantor,
			'jml_asset'             => $jml_asset,
			'bangunan'              => $bangunan,
			'tanah'                 => $tanah,
			'jml_assettetap'        => $jml_assettetap,
			'total_asset'           => $total_asset,
			'h_barang'              => $h_barang,
			'jml_bln'               => $jml_bln,
			'jml_bulanan'           => $jml_bulanan,
			'jml_tahunan'           => $jml_tahunan,
			'h_pokokpenjualan'      => $h_pokokpenjualan,
			'b_operasional'         => $b_operasional,
			'jml_hpp'               => $jml_hpp,
			'laba_bersih_e'         => $laba_bersih_e,
			'pb_hutang'             => $pb_hutang,
			'sisa_hutang'           => $sisa_hutang,
			'idevaluasi'           => $idevaluasi,
			'perkiraan_dana'        => $perkiraan_dana
			);
		$this->m_survei1->input_data($data,'survei1');
		redirect('survei2/index');
	  }

	// function data_id(){
	// 	$where['query']=$this->m_data->data();
	// 	$this->load->view('Data_perusahaan',$where);
	// }
	// function hapus($idperusahaan){
	// 	$where = array('idperusahaan' => $idperusahaan);
	// 	$this->m_perusahaan->hapus_data($where,'perusahaan');
	// 	redirect('perusahaan/index');
	// }
 
	function edit($idsurvei1){
		$where = array('idsurvei1' => $idsurvei1);
		$data['query'] = $this->m_survei1->edit_data($where,'survei1')->result();
		$this->load->view('edit_survei1',$data);
	}
	// function update(){

	// 	$idperusahaan = $this->input->post('idperusahaan');
		
	// 	$this->load->library('upload');
 //        $nmfile = "file_".time(); //nama file + fungsi time
 //        $config['upload_path'] = './asset/img/'; //Folder untuk menyimpan hasil upload
 //        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
 //        $config['max_size'] = '3072'; //maksimum besar file 3M
 //        $config['max_width']  = '5000'; //lebar maksimum 5000 px
 //        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
		
	// 	 $this->upload->initialize($config);
 //         $this->upload->do_upload('upload_struk_organisasi');
 //         $gbr = $this->upload->file_name;  
 //         $this->upload->do_upload('srs_tansi');
 //         $gbr2 = $this->upload->file_name; 	
          
		
	// 	$nama_perusahaan = $this->input->post('nama_perusahaan');
	// 	$tpemilik_koprasi= $this->input->post('tpemilik_koprasi');
	// 	$p_binaan_pk = $this->input->post('p_binaan_pk');
	// 	$kd_binaan = $this->input->post('kd_binaan');
	// 	$bidang_usaha = $this->input->post('bidang_usaha');
	// 	$jenis_usaha= $this->input->post('jenis_usaha');
	// 	$alamat_perusahaan = $this->input->post('alamat_perusahaan');
	// 	$kelurahan_perusahaan = $this->input->post('kelurahan_perusahaan');
	// 	$kecamatan_perusahaan = $this->input->post('kecamatan_perusahaan');
	// 	$kota_perusahaan = $this->input->post('kota_perusahaan');
	// 	$provinsi_p = $this->input->post('provinsi_p');
	// 	$kode_pos_p = $this->input->post('kode_pos_p');
	// 	$notlp_perusahaan= $this->input->post('notlp_perusahaan');
	// 	$stt_usaha= $this->input->post('stt_usaha');
	// 	$thn_sttusaha = $this->input->post('thn_sttusaha');
	// 	$siup = $this->input->post('siup');
	// 	$tdp = $this->input->post('tdp');
	// 	$ho = $this->input->post('ho');
	// 	$situ = $this->input->post('situ');
	// 	$sku = $this->input->post('sku');
	// 	$npwp= $this->input->post('npwp');
	// 	$nmpgang_hak= $this->input->post('nmpgang_hak');
	// 	$lokasi_tanah= $this->input->post('lokasi_tanah');
	// 	$luas_tanah= $this->input->post('luas_tanah');
	// 	$no_tanah= $this->input->post('no_tanah');
	// 	$berdiri_tahun = $this->input->post('berdiri_tahun');
	// 	$jml_karyawan = $this->input->post('jml_karyawan');
	// 	$jml_teng_ahli = $this->input->post('jml_teng_ahli');
	// 	$jml_pengurus = $this->input->post('jml_pengurus');
	// 	$rekening_koran = $this->input->post('rekening_koran');
	// 	$nama_bank_koran = $this->input->post('nama_bank_koran');
	// 	$alamat_bank_koran = $this->input->post('alamat_bank_koran');
	// 	$nomer_buku_tabungan = $this->input->post('nomer_buku_tabungan');
	// 	$nama_bank = $this->input->post('nama_bank');
	// 	$alamat_tabungan = $this->input->post('alamat_tabungan');
	// 	$bantuan_l = $this->input->post('bantuan_l');
        
       

	// 	$data = array(
	// 		'nama_perusahaan' => $nama_perusahaan,
	// 		'tpemilik_koprasi' => $tpemilik_koprasi,
	// 		'p_binaan_pk' =>$p_binaan_pk,
	// 		'kd_binaan' => $kd_binaan,
	// 		'bidang_usaha' => $bidang_usaha,
	// 		'jenis_usaha' =>$jenis_usaha,
	// 		'alamat_perusahaan' => $alamat_perusahaan,
	// 		'kelurahan_perusahaan' => $kelurahan_perusahaan,
	// 		'kecamatan_perusahaan' => $kecamatan_perusahaan,
	// 		'kota_perusahaan' =>$kota_perusahaan,
	// 		'provinsi_p' => $provinsi_p,
	// 		'kode_pos_p' => $kode_pos_p,
	// 		'notlp_perusahaan' =>$notlp_perusahaan,
	// 		'upload_struk_organisasi' => $gbr,
	// 		'stt_usaha' =>$stt_usaha,
	// 		'thn_sttusaha' => $thn_sttusaha,
	// 		'siup' => $siup,
	// 		'tdp' => $tdp,
	// 		'ho' => $ho,
	// 		'situ' => $situ,
	// 		'sku' => $sku,
	// 		'npwp' => $npwp,
	// 		'nmpgang_hak' => $nmpgang_hak,
	// 		'lokasi_tanah' => $lokasi_tanah,
	// 		'luas_tanah' => $luas_tanah,
	// 		'no_tanah' => $no_tanah,
	// 		'srs_tansi' => $gbr2,
	// 		'berdiri_tahun' =>$berdiri_tahun,
	// 		'jml_karyawan' => $jml_karyawan,
	// 		'jml_teng_ahli' => $jml_teng_ahli,
	// 		'jml_pengurus' =>$jml_pengurus,
	// 		'rekening_koran' => $rekening_koran,
	// 		'nama_bank_koran' =>$nama_bank_koran,
	// 		'alamat_bank_koran' => $alamat_bank_koran,
	// 		'nomer_buku_tabungan' => $nomer_buku_tabungan,
	// 		'nama_bank' =>$nama_bank,
	// 		'alamat_tabungan' => $alamat_tabungan,
	// 		'bantuan_l' =>$bantuan_l,
	// 		'idresi' =>$idresi
	// 		);

	// $where = array(
	// 	'idperusahaan' => $idperusahaan
	// );
 
 
// $this->m_perusahaan->update_data($where,$data,'perusahaan');
// 		redirect('keuangan/index');
	
 
//     }
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