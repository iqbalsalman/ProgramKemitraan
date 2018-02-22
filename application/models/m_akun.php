<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akun extends CI_Model{


		function __construct()
		{
			parent::__construct();
		}
		
		function add_account($data)
		{
            
	         $this->db->insert('login',$data);
			
			 $query=$this->db->insert_id();
			 return $query;
		}
		
		function changeActiveState($key)
		{
			$data = array(
               'active' => 1
            );

			$this->db->where('md5(id)', $key);
			$this->db->update('login', $data);

			return true;
		}

 	function tampil_data(){
		return $this->db->get('login');
	}

	function insert($data,$table){
		$this->db->insert($table,$data);
	}
	function tambah(){
		$this->db->from('login');
		$this->db->order_by('id', 'DESC');
        $this->db->limit(1);
		$query = $this->db->get();
		return $query;
	}

	function akun_petugas(){
		$query = $this->db->query('select *from login2');
		return $query;
	}

	function tams(){
		// $this->db->from('login');
		// $this->db->order_by('id', 'DESC');
  //       $this->db->limit(1);
		// $query = $this->db->get();
		  $query = $this->db->query('select *from login  where username ="'.$this->session->userdata('username').'" ');
  		  return $query;
	}
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

	function tugas(){
		$this->db->select('username');
		$this->db->from('login');
		$this->db->where('jenis_akses','evaluator');
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get();
		return $query;
	}
	function data(){
		$this->db->from('biodata');
		$query = $this->db->get();
		return $query->result();
	}


	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function hapus_akun($where,$table){
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

}
 
	
?>