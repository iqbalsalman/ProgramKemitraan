<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penjadwalan extends CI_Model{
	function tampil_data(){
		
		$query= $this->db->query('select *from proposal_masuk pro 
			                      JOIN biodata b on (pro.idproposal=b.idproposal) 
			                      join perusahaan p on (p.idresi=b.idresi) 
			                      join keuangan k on (k.idperusahaan=p.idperusahaan) 
			                      join pendapatan pen on (k.idkeuangan=pen.idkeuangan) 
			                      join kegiatan_usaha kg on (pen.idpendapatan=kg.idpendapatan) 
			                      JOIN penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
			                      JOIN evaluasi ev on (pes.idkegiatanusaha=ev.idkegitanusaha) 
			                      JOIN penjadwalan jd on (ev.idevaluasi=jd.idakun)');
		return $query;
	}

	// function suratdinas(){
	// 	 $this->db->select('nip,nama_surveyor,DATE_FORMAT(tgl_tugas2,'%d')-DATE_FORMAT(tgl_tugas1,'%d') ');
	// 	 $this->db->from('penjadwalan');
	// 	$query = $this->db->get();
 //        return $query->result();
	// }
 
	// function insert($data,$table){
	// 	$this->db->insert($table,$data);
	// }

	function pegawaiu(){
		$this->db->from('penjadwalan');
		$this->db->order_by('idpenjadwalan', 'DESC');
        $this->db->limit(1);
	    $query = $this->db->get();
		return $query;
	}

function tamp(){
		$query=$this->db->query('select *from penjadwalan');
		return $query;
	}


  function cetak($where,$table){
        $this->db->from($table);
        $this->db->where($where);
       $query= $this->db->get();
        
        return $query->result();
    }
	function input($data,$table){
		$this->db->insert($table,$data);
	}
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($data,$table)
	{
		$qs = $this->db->query('select idpegawai from penjadwalan');

		// foreach ($query->result() as $data) {

		//  $penilaian= $data->idpenilaian;

	 //  }
		foreach ($qs->result() as $k) {
        	$coba=$k->idpegawai;
        }
		$this->db->where('idpegawai',$coba);
		return $this->db->update($table,$data);
	}
	function update($data,$table){
		$qs = $this->db->query('select idpenjadwalan from penjadwalan');
		foreach ($qs->result() as $k) {
        	$coba=$k->idpenjadwalan;
        }
		$this->db->where('idpenjadwalan',$coba);
		return $this->db->update($table,$data);
	}		
			// //  foreach ($query->result() as $data) {

		// //  $penilaian= $data->idpenilaian;

		// //  }
		// foreach ($query->result() as $k) {
  //       	$coba=$k->idpenilaian;
  //       }
 }
	
?>