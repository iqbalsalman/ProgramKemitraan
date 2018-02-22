<?php
class M_pendapatan extends CI_Model{
    function tampil_data(){
        return $this->db->get('pendapatan');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function data(){
        $this->db->from('pendapatan');
        $query = $this->db->get();
        return $query->result();
    }
function datap(){
        
        $query=$this->db->query('select *from  keuangan 
                                                 order by idkeuangan DESC limit 1');
        return $query;
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