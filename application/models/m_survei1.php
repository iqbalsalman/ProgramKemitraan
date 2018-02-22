<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_survei1 extends CI_Model{
	function tampil_data(){
		return $this->db->get('survei1');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function data(){
       $query = $this->db->query('select *from biodata b join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                        join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)order by idkegitanusaha DESC limit 1');
       return $query ;
    
	}
    function surveip($where){
	$cekbiodata = $this->db->query('select *from biodata b 
		 	                        join perusahaan p on  (b.idresi=p.idresi)
                                    join keuangan k on(p.idperusahaan=k.idperusahaan)
                                    join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                    join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                    join evaluasi ve on (kg.idkegitanusaha=ve.idkegitanusaha)
                                    JOIN penilaian pes on (ve.idevaluasi=pes.idevaluasi)
                                    where pes.idpenilaian='.$where.'
                                    order by ve.idevaluasi');
	return $cekbiodata;

}
   function datan(){	
               $query = $this->db->query('select * from biodata b 
                                        join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan) 
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
                                        join evaluasi ev on (kg.idkegitanusaha=ev.idkegitanusaha)
                                        join survei1 s1 on (ev.idevaluasi=s1.idevaluasi)
                                        join survei2 s2 on (s1.idsurvei1=s2.idsurvei1)
                                        JOIN survei3 s3 on (s2.idsurvei2=s2.idsurvei2)
                                        join penilaian pes on (s3.idsurvei3=pes.idsurvei3)');
       return $query ;
	}

	function survei3()
	{
		$query = $this->db->query('select *from biodata b 
		 	                        join perusahaan p on  (b.idresi=p.idresi)
                                    join keuangan k on(p.idperusahaan=k.idperusahaan)
                                    join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                    join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                    join evaluasi ve on (kg.idkegitanusaha=ve.idkegitanusaha)
                                    JOIN penilaian pes on (ve.idevaluasi=pes.idevaluasi)');
		return $query;

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