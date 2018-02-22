<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_evaluasi extends CI_Model{
	function data_admis(){
		 $query = $this->db->query('select *from biodata b 
		 	                        join perusahaan p on  (b.idresi=p.idresi)
                                    join keuangan k on(p.idperusahaan=k.idperusahaan)
                                    join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                    join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                    JOIN penilaian pes on(kg.idkegitanusaha=pes.idkegiatanusaha)
                                    ');
       return $query;
	}
  function Pram_Nilai()
  {
  	$query = $this->db->query('select *from biodata b 
		 	                        join perusahaan p on  (b.idresi=p.idresi)
                                    join keuangan k on(p.idperusahaan=k.idperusahaan)
                                    join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                    join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                    join penilaian po on (po.idkegiatanusaha=kg.idkegitanusaha)
                                    join evaluasi ve on (ve.idevaluasi=po.idevaluasi)
                                 
                                    ');
  	return $query->result();
  }
  function Ambil_nilai($where) 
  {
  $query = $this->db->query('select *from biodata b 
		 	                        join perusahaan p on  (b.idresi=p.idresi)
                                    join keuangan k on(p.idperusahaan=k.idperusahaan)
                                    join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                    join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                    join penilaian po on (po.idkegiatanusaha=kg.idkegitanusaha)
                                    WHERE po.idkegiatanusaha='.$where.'
                                    ORDER by po.idkegiatanusaha
                                    ');
  	return $query;	
  }
   
	function data($where){
       $query = $this->db->query(' select DISTINCT p.name as provinsi,r.name 
       	                           as kabupaten,d.name as kecamatan,v.name as kelurahan,per.alamat_perusahaan,per.nama_perusahaan 
       	                           as namap,per.p_binaan_pk,per.tpemilik_koprasi,per.bidang_usaha,per.kd_binaan,per.kd_binaan,per.stt_usaha,per.notlp_perusahaan,per.berdiri_tahun,per.jml_karyawan,per.jml_pengurus,k.total_af1,pe.laba_bersih2,per.npwp,kg.m_manajemen,kg.keuangan,
                                   kg.m_produksi,kg.pemasaran_produk,kg.idkegitanusaha,kg.penjuplan,kg.m_lain,kg.jml_bantuan_pinajaman,kg.konsumen
                                   from villages v join districts d on (v.district_id=d.id)
                        join regencies r on (d.regency_id=r.id)
						join provinces p on (r.province_id=p.id)
						join biodata   b on (p.id=b.provinsi)
						join perusahaan per on (b.idresi=per.idresi)
						join keuangan k on(per.idperusahaan=k.idperusahaan)
                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
						where kg.idkegitanusaha='.$where.'
                        ORDER BY kg.idkegitanusaha limit 1
						');
       return $query ;
    
	}

function data_evaluasi_cmb()
{

$query = $this->db->query('select *from villages 
	                      join districts d on (v.district_id=d.id)
	                      join regencies r on (d.regency_id=r.id)
						  join provinces p on (r.province_id=p.id)
						  join biodata   b on (p.id=b.provinsi)
						  join perusahaan per on (b.idresi=per.idresi)
						  join keuangan k on(per.idperusahaan=k.idperusahaan)
                          join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                          join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)');
return $query;
}

	function datan(){
		$this->db->from('penilaian');
		$this->db->order_by('idpenilaian', 'DESC');
        $this->db->limit(1);
	    $query = $this->db->get();
		return $query;
	}

  // untuk user
	function mitra(){
       $query = $this->db->query('select *from login l 
       	                                join biodata b on(l.id=b.id) 
       	                                join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                        join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
                                        where l.username="'.$this->session->userdata('username').'"
                                        order by kg.idkegitanusaha DESC');
       return $query ;
    
	}

	function datapenolak(){
       $query = $this->db->query('select *from biodata b join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                        join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
                                        join evaluasi ev on (pes.idpenilaian=ev.idpenilaian)
                                        where status in ("Tidak Layak Survei")
                                        order by ev.idpenilaian DESC limit 1');
       return $query ;
   }
       function datape(){
       $query = $this->db->query('select *from biodata b 
		 	                        join perusahaan p on  (b.idresi=p.idresi)
                                    join keuangan k on(p.idperusahaan=k.idperusahaan)
                                    join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                    join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                    join evaluasi ve on (kg.idkegitanusaha=ve.idkegitanusaha)
                                    JOIN penilaian pes on (ve.idevaluasi=pes.idevaluasi)
                                    order by ve.idevaluasi');
       return $query ;
    
    
	}

       function datasi(){
       
       $query=$this->db->query('select *from evaluasi order by idevaluasi');
       return $query;

       }
	function cetak($where){
		 $query = $this->db->query('select *from biodata b 
		 	                        join perusahaan p on  (b.idresi=p.idresi)
                                    join keuangan k on(p.idperusahaan=k.idperusahaan)
                                    join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                    join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                    JOIN evaluasi ev on (kg.idkegitanusaha=ev.idkegitanusaha)
                                    join penilaian pes on (ev.idevaluasi=pes.idevaluasi)
                                    WHERE ev.idevaluasi ='.$where.'
                                  
                                    ');
       return $query;
    
    }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}


	function insert($data,$table){
		$this->db->insert($table,$data);
	}

	function ubah(){		
	  $query=$this->db->query('select *from penilaian p join evaluasi e on (p.idpenilaian=e.idpenilaian) where status in ("Tidak Layak Survei") 
	  	order by p.idpenilaian desc
	  limit 1  ');
	  return $query;
	}

	function getkodeunik($table) { 
        $q = $this->db->query('SELECT MAX(RIGHT(nopenolakn,15)) AS idmax FROM '.$table);
        $kd = ''; //kode awal
        if($q->num_rows()>0){ //jika data ada
            foreach($q->result() as $k){
                $nextnoreg = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
                 $kd =sprintf('%04s',$nextnoreg);  //kode ambil 4 karakter terakhir
            }
        }else{ //jika data kosong diset ke kode awal
            $kd = '0001';
        }
        $qs = $this->db->query(' Select date_format(curdate(), "%Y") AS tgl');
        foreach ($qs->result() as $k) {
        	$coba=$k->tgl;
        }
        $kar = '/PKBL/PK/'.$coba; 
        return $kd.$kar;
   } 
   function data_biodata($where){
   	$query = $this->db->query('select b.idresi,b.nama,b.upload_ktp,ta_lahir,tgl_l,
                               b.jenis_kelamin,b.status_kawin,b.jml_anak,b.pekerjaan,
                               b.nmkerja,b.alamat_rumah,p.name as "Provinsi",r.name as "Kabupaten",
                               d.name as "Kecamatan", v.name as "Kelurahan",b.kode_pos,b.tlpr,b.No_kk,
                               b.upload_kk,b.bsd,b.status_tinggal,b.pendidikan_f,b.plt_k,b.proposalk,
                               b.lembaga,b.idproposal
                                   from villages v
	                           join districts d on (v.district_id=d.id)
	                           join regencies r on (d.regency_id=r.id)
		                       join provinces p on (r.province_id=p.id)
			                   join biodata   b on (p.id=b.provinsi)
			                   join perusahaan per on (b.idresi=per.idresi)
			                   join keuangan k on(per.idperusahaan=k.idperusahaan)
                              join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                              join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
                              WHERE kg.idkegitanusaha= '.$where.' and b.provinsi=p.id and b.ktkb=r.id AND b.kcamatan=d.id and b.klurah=v.id
                              order by p.id,r.id,d.id,v.id, kg.idkegitanusaha desc limit 1');
   	return $query;
   }


   function data_perusahaan($where){
   	$query = $this->db->query('select per.idperusahaan,per.nama_perusahaan,per.tpemilik_koprasi,
   		                              per.p_binaan_pk,per.kd_binaan,per.bidang_usaha,per.jenis_usaha,
                                      per.alamat_perusahaan,p.name as "provinsi",r.name as "kabupaten",
                                      d.name as "kecamatan", v.name as "kelurahan",
                                      per.kode_pos_p,per.notlp_perusahaan,per.upload_struk_organisasi,
                                      per.stt_usaha,per.thn_sttusaha,per.siup,per.tdp,per.ho,
                                      per.situ,per.sku,per.npwp,per.nmpgang_hak,per.lokasi_tanah,
                                      per.luas_tanah,per.srs_tansi,per.berdiri_tahun,
                                      per.jml_karyawan,per.jml_teng_ahli,per.jml_pengurus,
                                      per.rekening_koran,per.nama_bank_koran, per.alamat_bank_koran,
                                      per.nomer_buku_tabungan,per.nama_bank,per.alamat_tabungan,
                                      per.bantuan_l,per.idresi,per.no_tanah,per.bdn_hukum
                              from villages v
	                                 join districts d on (v.district_id=d.id)
	                                 join regencies r on (d.regency_id=r.id)
		                             join provinces p on (r.province_id=p.id)
		                             join perusahaan per on (p.id=per.provinsi_p)
			                         join keuangan k on(per.idperusahaan=k.idperusahaan)
                                     join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                     join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
                             WHERE kg.idkegitanusaha='.$where.'
                             and per.provinsi_p=p.id and 
                             per.kota_perusahaan=r.id and per.kecamatan_perusahaan=d.id and per.kelurahan_perusahaan=v.id
			     order by p.id,r.id,d.id,v.id, kg.idkegitanusaha desc
			     limit 1
');
   	return $query;
   }
   function datakes1($where){
		$query = $this->db->query('select *from villages v
	                      join districts d on (v.district_id=d.id)
	                      join regencies r on (d.regency_id=r.id)
						  join provinces p on (r.province_id=p.id)
						  join biodata   b on (p.id=b.provinsi)
						  join perusahaan per on (b.idresi=per.idresi)
						  join keuangan k on(per.idperusahaan=k.idperusahaan)
                          join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                          join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
                        WHERE kg.idkegitanusaha= '.$where.'
                        ORDER by kg.idkegitanusaha limit 1');
       return $query ;
	}
	//Belum pasti
   // function tampilsurat()
   // {
   // 	$query = $this->db->query('select *from surat_tolak');
   // 	return $query;
   // }
   function cetakk($where,$table){
        $this->db->where($where);
       $query= $this->db->get($table);
        
        return $query->result();
    }

	function dana($where){
	 $q=$this->db->query('select (round(laba_bersih1/12)) as laba from pendapatan where idpendapatan = '.$where.' order by idpendapatan');
	 foreach ($q->result() as $b){
		 $laba_bersih= $b->laba;
	 }
       if (33000 >= $laba_bersih ){

       $perkiraan_dana=1000000;

	}elseif (49500 >= $laba_bersih ) {

		$perkiraan_dana=1500000;

	}elseif( 66000 >= $laba_bersih ){

		$perkiraan_dana = 2000000;

	}elseif (82500 >= $laba_bersih){

		$perkiraan_dana = 2500000;

	}elseif (99000  >= $laba_bersih ) {
		# code...
		$perkiraan_dana = 3000000;

	}elseif (115500 >=  $laba_bersih ) {
		
		$perkiraan_dana = 3500000;

	}elseif (132000 >= $laba_bersih  ) {
		
		$perkiraan_dana = 4000000;

	}elseif (147500  >=  $laba_bersih) {

		$perkiraan_dana = 4500000;

	}elseif (164000 >=  $laba_bersih  ) {
		
		$perkiraan_dana = 5000000;

	}elseif (180500   >= $laba_bersih ) {
		
		$perkiraan_dana = 5500000;

	} elseif (197000  >= $laba_bersih ) {
		
		$perkiraan_dana = 6000000;

	} elseif ( 213500  >= $laba_bersih ) {
		
		$perkiraan_dana = 6500000;

	} elseif ( 230000  >= $laba_bersih ) {
		
		$perkiraan_dana = 7000000;

	} elseif (246500   >= $laba_bersih) {
		
		$perkiraan_dana = 7500000;

	} elseif (263000   >= $laba_bersih ) {
		
		$perkiraan_dana = 8000000;

	} elseif (279500   >= $laba_bersih ) {
		
		$perkiraan_dana = 8500000;

	} elseif (295000  >= $laba_bersih ) {
		
		$perkiraan_dana = 9000000;

	} elseif (311500  >= $laba_bersih ) {
		
		$perkiraan_dana = 9500000;

	} elseif (328000  >= $laba_bersih) {
		
		$perkiraan_dana = 10000000;

	} elseif (344500 >=  $laba_bersih) {
		
		$perkiraan_dana = 10500000;

	} elseif (361000  >= $laba_bersih ) {
		
		$perkiraan_dana = 11000000;

	} elseif (377500 >= $laba_bersih ) {
		
		$perkiraan_dana = 11500000;

	} elseif (394000  >= $laba_bersih  ) {
		
		$perkiraan_dana = 12000000;

	} elseif (410500  >= $laba_bersih ) {
		
		$perkiraan_dana = 12500000;

	} elseif (427000  >= $laba_bersih  ) {
		
		$perkiraan_dana = 13000000;

	} elseif (442500  >= $laba_bersih  ) {
		
		$perkiraan_dana = 13500000;

	} elseif (459000 >=  $laba_bersih ) {
		
		$perkiraan_dana = 14000000;

	} elseif (475500   >= $laba_bersih ) {
		
		$perkiraan_dana = 14500000;

	} elseif(492000 >=  $laba_bersih){

       $perkiraan_dana = 15000000;

	}elseif(508500 >= $laba_bersih){

		$perkiraan_dana = 15500000;

	}elseif(525000 >= $laba_bersih){

		$perkiraan_dana = 16000000;

	}elseif(541500 >=$laba_bersih   ){

		$perkiraan_dana =16500000;

	}elseif(558000  >= $laba_bersih  ){

		$perkiraan_dana = 17000000;

	}elseif (574500  >= $laba_bersih) {
		
		$perkiraan_dana = 17500000;

	}elseif (590000 >= $laba_bersih ){

		$perkiraan_dana = 18000000;

	}elseif(606500  >= $laba_bersih ){

		$perkiraan_dana = 18500000;

	}elseif(623000  >= $laba_bersih ){

		$perkiraan_dana = 19000000;

	}elseif(639500  >= $laba_bersih  ){

		$perkiraan_dana = 19500000;
		
	}elseif(656000  >= $laba_bersih  ) {

		$perkiraan_dana = 20000000;

	}elseif(672500  >= $laba_bersih ){

		$perkiraan_dana = 20500000;

	}elseif(689000 >= $laba_bersih ){

		$perkiraan_dana = 21000000;

	}elseif(705500  >= $laba_bersih ){

		$perkiraan_dana = 21500000;

	}elseif (722000  >= $laba_bersih) {

		$perkiraan_dana = 22000000;

	}elseif(737500  >= $laba_bersih ){

		$perkiraan_dana = 22500000;

	}elseif(754000 >= $laba_bersih  ){

		$perkiraan_dana = 23000000;

	}elseif(770500  >= $laba_bersih){

		$perkiraan_dana = 23500000;

	}elseif(787000  >= $laba_bersih ){

		$perkiraan_dana = 24000000;

	}elseif(803500  >= $laba_bersih ){

		$perkiraan_dana = 24500000;

	}elseif(820000  >= $laba_bersih ){

		$perkiraan_dana = 25000000;

	}elseif(836500  >=  $laba_bersih ){

		$perkiraan_dana = 25500000;

	}elseif(853000  >= $laba_bersih ){

		$perkiraan_dana = 26000000;

	}elseif(869500  >=  $laba_bersih){

		$perkiraan_dana = 26500000;

	}elseif(885000  >= $laba_bersih ){

		$perkiraan_dana = 27000000;

	}elseif(901500  >= $laba_bersih ){

		$perkiraan_dana =27500000;

	}elseif(918000  >= $laba_bersih ){

		$perkiraan_dana = 28000000;

	}elseif(934500  >= $laba_bersih ){

		$perkiraan_dana =28500000;

	}elseif(951000  >= $laba_bersih ){

		$perkiraan_dana = 29000000;

	} elseif(967500  >= $laba_bersih  ){

		$perkiraan_dana = 29500000;

	}elseif(984000  >= $laba_bersih  ){

		$perkiraan_dana = 30000000;

	}elseif(1000500  >= $laba_bersih  ){

		$perkiraan_dana = 30500000;

	}elseif( 1017000 >= $laba_bersih ){

		$perkiraan_dana = 31000000;

	}elseif(1032500  >=  $laba_bersih){

		$perkiraan_dana = 31500000;

	}elseif(1049000 >= $laba_bersih  ){

		$perkiraan_dana = 32000000;

	}elseif(1065500  >=  $laba_bersih ){

		$perkiraan_dana = 32500000;

	}elseif(1082000 >=  $laba_bersih ){

		$perkiraan_dana = 33000000;

	}elseif(1098500  >= $laba_bersih ){

		$perkiraan_dana = 33500000;

	}elseif(1115000  >= $laba_bersih ){

		$perkiraan_dana = 34000000;

	}elseif(1131500  >= $laba_bersih ){

		$perkiraan_dana = 34500000;

	}elseif(1148000  >= $laba_bersih  ){

		$perkiraan_dana = 35000000;

	}elseif(1164500   >=  $laba_bersih){

		$perkiraan_dana = 35500000;

	}elseif(1180000  >= $laba_bersih ){

		$perkiraan_dana = 36000000;

	}elseif(1196500  >= $laba_bersih){

		$perkiraan_dana = 36500000;

	}elseif(1213000  >= $laba_bersih){

		$perkiraan_dana = 37000000;

	}elseif(1229500  >= $laba_bersih  ){

		$perkiraan_dana = 37500000;

	}elseif(1246000  >=  $laba_bersih ){

		$perkiraan_dana = 38000000;

	}elseif(1262500   >= $laba_bersih){

		$perkiraan_dana = 38500000;

	}elseif(1279000  >= $laba_bersih ){

		$perkiraan_dana = 39000000;

	}elseif(1295500  >= $laba_bersih ){

		$perkiraan_dana = 39500000;

	}elseif(1312000 >=  $laba_bersih  ){

		$perkiraan_dana = 40000000;

	}elseif(1327500  >= $laba_bersih  ){

		$perkiraan_dana = 40500000;

	}elseif(1344000   >=  $laba_bersih){

		$perkiraan_dana = 41000000;

	}elseif(1360500  >= $laba_bersih  ){

		$perkiraan_dana = 41500000;

	}elseif(1377000  >= $laba_bersih ){

		$perkiraan_dana = 42000000;

	}elseif(1393500  >= $laba_bersih ){

		$perkiraan_dana = 42500000;

	}elseif(1410000 >= $laba_bersih  ){

		$perkiraan_dana = 43000000;

	}elseif(1426500  >= $laba_bersih ){

		$perkiraan_dana = 43500000;

	}elseif(1443000  >= $laba_bersih  ){

		$perkiraan_dana = 44000000;

	}elseif(1459500   >= $laba_bersih ){

		$perkiraan_dana = 44500000;

	}elseif(1475000   >= $laba_bersih ){

		$perkiraan_dana = 45000000;

	}elseif(1491500  >= $laba_bersih ){

		$perkiraan_dana = 45500000;

	}elseif( 1508000 >= $laba_bersih ){

		$perkiraan_dana = 46000000;

	}elseif(1524500  >= $laba_bersih ){

		$perkiraan_dana =46500000;

	}elseif( 1541000 >= $laba_bersih ){

		$perkiraan_dana = 47000000;

	}elseif(1557500  >= $laba_bersih ){

		$perkiraan_dana = 47500000;

	}elseif(1574000  >= $laba_bersih ){

		$perkiraan_dana = 48000000;

	}elseif(1590500   >= $laba_bersih ){

		$perkiraan_dana = 48500000;

	}elseif(1607000  >= $laba_bersih  ){

		$perkiraan_dana = 49000000;

	}elseif(1622500  >= $laba_bersih ){

		$perkiraan_dana = 49500000;

	}elseif(1639000  >= $laba_bersih  ){

		$perkiraan_dana = 50000000;

	}elseif(1655500 >= $laba_bersih   ){

		$perkiraan_dana = 50500000;

	}elseif(1672000  >= $laba_bersih){

		$perkiraan_dana = 51000000;

	}elseif(1688500  >=  $laba_bersih){

		$perkiraan_dana = 51500000;

	}elseif(1705000  >= $laba_bersih  ){

		$perkiraan_dana = 52000000;

	}elseif(1721500  >= $laba_bersih  ){

		$perkiraan_dana = 52500000;

	}elseif(1738000  >= $laba_bersih ){

		$perkiraan_dana = 53000000;

	}elseif(1754500 >= $laba_bersih ){

		$perkiraan_dana = 53500000;

	}elseif(1770000  >= $laba_bersih ){

		$perkiraan_dana = 54000000;

	}elseif(1786500   >= $laba_bersih ){

		$perkiraan_dana = 54500000;

	}elseif(1803000  >= $laba_bersih  ){

		$perkiraan_dana = 55000000;

	}elseif(1819500  >=  $laba_bersih ){

		$perkiraan_dana = 55500000;

	}elseif(1836000  >= $laba_bersih  ){

		$laba_bersih = 56000000;

	}elseif(1852500  >= $laba_bersih ){

		$laba_bersih = 56500000;

	}elseif(1869000  >= $laba_bersih ){

		$laba_bersih = 57000000;

	}elseif(1885500  >= $laba_bersih ){

		$laba_bersih = 57500000;

	}elseif(1902000  >=  $laba_bersih ){

		$laba_bersih = 58000000;

	}elseif(1917500  >= $laba_bersih ){

		$laba_bersih = 58500000;

	}elseif(1934000 >= $laba_bersih  ){

		$perkiraan_dana = 59000000;

	}elseif(1950500  >= $laba_bersih){

		$perkiraan_dana  =59500000;

	}elseif(1967000  >= $laba_bersih  ){

		$perkiraan_dana = 60000000;

	}elseif(1983500  >= $laba_bersih  ){

		$perkiraan_dana = 60500000;

	}elseif(2000000  >= $laba_bersih  ){

		$perkiraan_dana = 61000000;

	}elseif(2016500  >= $laba_bersih ){

		$perkiraan_dana = 61500000;

	}elseif(2033000  >= $laba_bersih ){

		$perkiraan_dana = 62000000;

	}elseif(2049500  >= $laba_bersih  ){

		$perkiraan_dana = 62500000;

	}elseif(2065000  >=  $laba_bersih ){

		$perkiraan_dana = 63000000;

	}elseif(2081500  >= $laba_bersih ){

		$perkiraan_dana = 63500000;

	}elseif (2098000  >= $laba_bersih  ) {
		
		$perkiraan_dana = 64000000;

	}elseif(2114500  >= $laba_bersih ){

		$perkiraan_dana = 64500000;

	}elseif(2131000   >=  $laba_bersih){

		$perkiraan_dana = 65000000;

	}elseif(2147500   >= $laba_bersih ){

		$perkiraan_dana = 65500000;

	}elseif(2164000  >= $laba_bersih  ){

		$perkiraan_dana = 66000000;

	}elseif(2180500  >= $laba_bersih ){

		$perkiraan_dana = 66500000;

	}elseif(2197000  >= $laba_bersih ){

		$perkiraan_dana = 67000000;

	}elseif(2212500  >= $laba_bersih){

		$perkiraan_dana = 67500000;

	}elseif(2229000  >=  $laba_bersih){

		$perkiraan_dana = 68000000;

	}elseif(2245500  >= $laba_bersih  ){

		$perkiraan_dana = 68500000;

	}elseif(2262000 >= $laba_bersih  ){

		$perkiraan_dana = 69000000;

	}elseif(2278500 >= $laba_bersih  ){

		$perkiraan_dana = 69500000;

	}elseif(2295000  >=  $laba_bersih ){

		$perkiraan_dana = 70000000;

	}elseif(2311500  >= $laba_bersih ){

		$perkiraan_dana = 70500000;

	}elseif(2328000  >= $laba_bersih ){

		$perkiraan_dana = 71000000;

	}elseif(2344500 >= $laba_bersih ){

		$perkiraan_dana = 71500000;

	}elseif(2360000  >= $laba_bersih ){

		$perkiraan_dana = 72000000;

	}elseif(2376500  >= $laba_bersih ){

		$perkiraan_dana = 72500000;

	}elseif(2393000  >= $laba_bersih  ){

		$perkiraan_dana = 73000000;

	}elseif(2409500  >= $laba_bersih  ){

		$perkiraan_dana = 73500000;

	}elseif(2426000  >= $laba_bersih  ){

		$perkiraan_dana = 74000000;

	}elseif(2442500  >= $laba_bersih ){

		$perkiraan_dana = 74500000;

	}else{

		$perkiraan_dana = 75000000;

	}
	return $perkiraan_dana;	
}
	function data_evaluasi_p(){
       $query = $this->db->query('select *from  proposal_masuk pro
       	                                join biodata b on(pro.idproposal=b.idproposal)
       	                                join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                        join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
                                        order by kg.idkegitanusaha DESC');
       return $query ;
    
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		return $this->db->update($table,$data);
	}	

	// function getkodeunik($table) { 
 //        $q = $this->db->query("SELECT MAX(RIGHT(idresi,1)) AS idmax FROM ".$table);
 //        $kd = ""; //kode awal
 //        if($q->num_rows()>0){ //jika data ada
 //            foreach($q->result() as $k){
 //                $tmp = ((int)$k->idmax)+1; //string kode diset ke integer dan ditambahkan 1 dari kode terakhir
 //                $kd = sprintf("s", $tmp); //kode ambil 4 karakter terakhir
 //            }
 //        }else{ //jika data kosong diset ke kode awal
 //            $kd = "0001";
 //        }
 //        $kar = "PEL."; //karakter depan kodenya
 //        //gabungkan string dengan kode yang telah dibuat tadi
 //        return $kar.$kd;
 //   } 
}
 
	
?>