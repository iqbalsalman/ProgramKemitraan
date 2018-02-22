<?php
class M_user2 extends CI_Model {
private $table = "login2";
function __construct() {
        parent::__construct();
  }
        function cek_login($username,$password){		
	    $this->db->where('username',$username);
		$this->db->where('password',$password);
		$query=$this->db->get($this->table);
		if($query->num_rows()>0){
			
			return $query->result_array();
			
		}
	}
	function tampil_data(){
		return $this->db->get('login2');
	}
	function tampil(){
		 $query=$this->db->query('select *from login2  where jenis_akses="evaluator" order by idakun desc');
		return $query;

	}

	function tampil1(){
		 $query=$this->db->query('select *from login2  where jenis_akses="kepala_pkbl" order by idakun desc');
		  return $query;

	}
	function tampil2(){
		 $query=$this->db->query('select *from login2  where jenis_akses="surveyor" order by idakun desc');
		  return $query;

	}



	function insert($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
