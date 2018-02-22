<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_perusahaan extends CI_Model{
	function tampil_data(){
		return $this->db->get('perusahaan');
	}

	// function get_data(){
	// 	$this->db->from('perusahaan');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
	function data(){
		$this->db->from('perusahaan');
		$query = $this->db->get();
		return $query->result();
	}
	function datap(){
		$this->db->from('biodata');
		$this->db->order_by('idresi', 'DESC');
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

	function update_data($where,$data,$table){
		$this->db->where($where);
		return $this->db->update($table,$data);
	}	
}
 
	
?>