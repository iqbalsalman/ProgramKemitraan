<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('biodata');
	}
	function data(){
		$this->db->from('biodata');
		$query = $this->db->get();
		return $query->result();
	}
	function datap(){
		$this->db->from('biodata');
		$this->db->order_by('biodata.idresi', 'DESC');
        $this->db->limit(1);
	    $query = $this->db->get();
		return $query;
	}
	
	function dapro(){
		$this->db->from('login');
		$this->db->order_by('id', 'DESC');
        $this->db->limit(1);
	    $query = $this->db->get();
		return $query;
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
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

	function datakes(){
		$query = $this->db->query('select *from login l 
       	                                join biodata b on(l.id=b.id) 
       	                                join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                        join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
                                        where l.username="'.$this->session->userdata('username').'"
                                        order by kg.idkegitanusaha DESC');
       return $query->result() ;
	}
// 		function data($where){
//        $query = $this->db->query(' select DISTINCT p.name as provinsi,r.name as kabupaten,d.name as kecamatan,v.name as kelurahan,per.alamat_perusahaan,per.nama_perusahaan as namap,per.p_binaan_pk,per.tpemilik_koprasi,per.bidang_usaha,per.kd_binaan,per.kd_binaan,per.stt_usaha,per.notlp_perusahaan,per.berdiri_tahun,per.jml_karyawan,per.jml_pengurus,k.total_af1,pe.laba_bersih2,per.npwp,kg.m_manajemen,kg.keuangan,
// kg.m_produksi,kg.pemasaran_produk,kg.penjuplan,kg.m_lain,kg.jml_bantuan_pinajaman,kg.konsumen,pes.idpenilaian
//  from villages v join districts d on (v.district_id=d.id)
//                         join regencies r on (d.regency_id=r.id)
// 						join provinces p on (r.province_id=p.id)
// 						join biodata   b on (p.id=b.provinsi)
// 						join perusahaan per on (b.idresi=per.idresi)
// 						join keuangan k on(per.idperusahaan=k.idperusahaan)
//                         join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
//                         join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
//                         join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
// 						where kg.idkegitanusaha='.$where.'
// 						order by kg.idkegitanusaha desc limit 1
// 						');
//        return $query ;
    
	

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