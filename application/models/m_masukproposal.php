<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_masukproposal extends CI_Model{
	  private $primary="nik";
	  private $pro="idproposal";


   //tampil data_prposal masuk user biasa
	function tampil_data()
  {
		$query = $this->db->query('select * from login lo join biodata b on (lo.id=b.id) 
			                         join perusahaan p on (b.idresi=p.idresi)
                               join keuangan k on(p.idperusahaan=k.idperusahaan)
                               join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                               join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                               JOIN proposal_masuk pm on (kg.idkegitanusaha=pm.idkegitanusaha)');
		return $query;
	}
    function datap()
    {
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

    //tampil data proposal_masuk petugas

    function  tampil_proposal_m_p(){
        $query = $this->db->query('select *from login2 lg join proposal_masuk p 
                                 on (lg.idakun=p.idakun) where jenis_akses="sekertariat" ');
        return $query->result();
    }

	function data(){
		$this->db->from('proposal_masuk');
		$query = $this->db->get();
		return $query->result();
	}

    // function tampj(){
    //     $query=	$this->db->query('select * from biodata b join perusahaan p on (b.idresi=p.idresi)
    //                                     join keuangan k on(p.idperusahaan=k.idperusahaan)
    //                                     join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
    //                                     join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) order by idkegitanusaha DESC limit 1');
    //      return $query;

  //}
	function input_data($table,$data){
		 $this->db->insert($table, $data); 
	}
	 function cek($nik){
        $this->db->where($this->primary,$nik);
        $query=$this->db->get('proposal_masuk');
        
        return $query;
    }
     function cetak($where){
       $query = $this->db->query('select *from login2 lg join proposal_masuk p 
                                 on (lg.idakun=p.idakun)
                                 where p.idproposal='.$where.'');
		return $query->result();
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
    
    function data_proposal(){

        $query=$this->db->query("select * from login2 l join proposal_masuk p 
          on (l.idakun=p.idakun) where jenis_akses='sekertariat' ");

        return $query;
    }

   //generet idakun untuk relasi table proposal_masuk dan akun petugas
    function relasi_akun_proposal(){
       $query=$this->db->query("select *from login2 where jenis_akses='sekertariat' ");

        return $query;
    }
	function getkodeunik($table) { 
        $q = $this->db->query('SELECT MAX(RIGHT(resi_p,15)) AS idmax FROM '.$table);
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
        $kar = '/PKBL/II/'.$coba; 
        return $kd.$kar;
   } 

}
 
	
?>