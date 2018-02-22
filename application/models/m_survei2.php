<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_survei2 extends CI_Model{
	function tampil_data(){
		return $this->db->get('survei2');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function data(){
       $query = $this->db->query('select *from penilaian p join survei1 s1 on(p.idpenilaian=s1.idpenilaian) order by s1.idsurvei1 desc limit 1');
       return $query ;
    
	}
	function gets(){
		$tgl= $this->db->query(' Select date_format(curdate(), "%Y") AS tgl');
		foreach ($tgl->result() as  $s) {
		 	$tgls = $s->tgl;
		}
		return $tgls;
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