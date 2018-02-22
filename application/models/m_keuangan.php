<?php

class M_keuangan extends CI_Model{
    function tampil_data(){
        return $this->db->get('keuangan');
    }

    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function data(){
        $this->db->from('keuangan');
        $query = $this->db->get();
        return $query->result();
    }
    function datap(){
        // $this->db->from('biodata');
        // $this->db->join('perusahaan',' biodata.idresi=perusahaan.idresi');
        // $this->db->join('keuangan',' perusahaan.idperusahaan=keuangan.idperusahaan');
        // $this->db->order_by('perusahaan.idperusahaan','DESC');
        // $this->db->limit(1);
        // $query = $this->db->get();
        $query=$this->db->query('select *from perusahaan 
                                                 order by idperusahaan DESC limit 1');
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