<?php
class M_approve extends CI_Model {
	
	

	function tampil(){
       return $this->db->get('p_pkbl');
	}
    function edit_data(){		
		$query = $this->db->query('select *from biodata b join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                        join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)order by idkegitanusaha DESC limit 1');
       return $query ;
	}
	  function edit(){	
               $query = $this->db->query('select *from penilaian p join survei1 s1 on( p.idpenilaian=s1.idpenilaian)
                                 join survei2 s2 on (s1.idsurvei1=s2.idsurvei1) join survei3 s3 on (s2.idsurvei2=s3.idsurvei2)  order by s3.idsurvei2 desc limit 1 ');
       return $query ;
	}
	function data($where){	
               $query = $this->db->query('select * from biodata b join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan) 
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
                                        join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
                                         join survei1 s1 on(pes.idpenilaian=s1.idpenilaian) join survei2 sr on (s1.idsurvei1=sr.idsurvei1)
                                         join survei3 s3 on (sr.idsurvei2=s3.idsurvei2)  where pes.idpenilaian='.$where.'
           order by s3.idsurvei3 desc  ');
       return $query ;
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function update_data($data,$table)
	{
		$query = $this->db->query('select pes.idpenilaian, pes.status, pes.catatan, pes.idkegiatanusaha from penilaian pes join evaluasi e on (pes.idpenilaian=e.idpenilaian) order by pes.idpenilaian LIMIT 1');

		//  foreach ($query->result() as $data) {

		//  $penilaian= $data->idpenilaian;

		//  }
		foreach ($query->result() as $k) {
        	$coba=$k->idpenilaian;
        }
		$this->db->where('idpenilaian',$coba);
		return $this->db->update($table,$data);
	}	

}
