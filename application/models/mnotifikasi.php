<?php
class Mnotifikasi extends CI_Model {

    var $tabel = 't_nitifikasifb';

    function __construct() {
        parent::__construct();
    }
	function notif_count() {
       $query = $this->db->query("select * from t_nitifikasifb where nopesan in('01','05' )order by nopesan desc");
        // $query = $this->db->get();
        return $query->num_rows();
	}

    function getnotifikasi() {
        $query = $this->db->query("select * from t_nitifikasifb where nopesan in('01','05') order by nopesan desc");
        // $query = $this->db->get();
        return $query->result();
    }
    function notif_count4() {
        $this->db->from($this->tabel);
        $this->db->where('nopesan','04','05');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->num_rows();
    }

    function getnotifikasi4() {
        $this->db->from($this->tabel);
        $this->db->where('nopesan','04','05');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(5);
        $query = $this->db->get();

        if ($query->num_rows() >0) {
            return $query->result();
        }
    }
        function notif_count1() {
         $query = $this->db->query("select * from t_nitifikasifb where nopesan in('02','07','05')");
        return $query->num_rows();

        
}
    function getnotifikasi1() {
       $query = $this->db->query("select * from t_nitifikasifb where nopesan in('02','07','05')");

        // $query = $this->db->query("select * from t_nitifikasifb t join login l on (t.id=l.id) where l.username='".$this->session->userdata('username')."' and t.nopesan='02'");
        // $this->db->select('*');
        // $this->db->from('t_nitifikasifb');
        // $this->db->join('login','t_nitifikasifb.id=login.id');
        // $this->db->where('login.username',$this->session->userdata('username'));
        // $this->db->where('t_nitifikasifb.nopesan','02');
        // $this->db->order_by('t_nitifikasifb.id', 'DESC');
        // $query=$this->db->get();
        return $query->result();
    }

     function notif_count2() {
       $query = $this->db->query("select * from t_nitifikasifb t join login l on (t.id=l.id) where l.username='".$this->session->userdata('username')."' and t.nopesan in('03','04','06')");
        // $query = $this->db->get();
        return $query->num_rows();
    }

 function getnotifikasi2() {
       $query = $this->db->query("select * from t_nitifikasifb t join login l on (t.id=l.id) where l.username='".$this->session->userdata('username')."' and t.nopesan in('03','04','06')    ");
       return $query->result();
    }
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }


}
?>
