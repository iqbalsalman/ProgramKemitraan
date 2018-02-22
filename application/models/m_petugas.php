<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model{
	function tampil_data(){
		return $this->db->get('pegawai');
	}
	function data(){
		$query = $this->db->query('select * FROM penjadwalan pe join pegawai pg on (pe.idpegawai=pg.idpegawai)');
        return $query;
	}
	function data1($where){
		$query = $this->db->query('select * FROM penjadwalan pe join pegawai pg on (pe.idpegawai=pg.idpegawai)
            where pg.idpegawai='.$where.'
			');
        return $query;
	}

	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
		 
	}

function edata($where){		
		// $this->db->get_where($table,$where);
		
		//  $query= $this->db->get();
	$query=$this->db->query('select *from pegawai where idpegawai='.$where.'
						order by idpegawai desc limit 1
						');
		 return $query;
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
	function getPetugas(){
		$query=$this->db->query('select *from pegawai');
		return $query; 
	}
	function getPetugas2(){
		$query=$this->db->query('select *from login2');
		return $query; 
	}
	function getPetugas1(){
		$query=$this->db->query('select *from pegawai p JOIN penjadwalan j on (p.idpegawai=j.idpegawai)');
		return $query; 
	}
		function datauser(){
		$query=$this->db->query('select *from proposal_masuk pro 
             JOIN biodata b on (pro.idproposal=b.idproposal)
             join perusahaan p on (p.idresi=b.idresi)
             join keuangan k on (k.idperusahaan=p.idperusahaan)
             join pendapatan pen on (k.idkeuangan=pen.idkeuangan)
             join kegiatan_usaha kg on (pen.idpendapatan=kg.idpendapatan)
             JOIN penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
             JOIN evaluasi ev on (pes.idkegiatanusaha=ev.idkegitanusaha)
             where pes.status="Layak Survei"');
		return $query; 
	}
}
 
	
?>