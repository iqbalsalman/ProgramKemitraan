<?php
class M_hasil extends CI_Model {
	
	
	function cek(){

		$query=$this->db->query('select e.upload_ktp, e.upload_kk from biodata e join perusahaan p on (e.idresi=p.idresi)
			where p.idresi=2');
		return $query->result();
	}

	function tampil(){
       return $this->db->get('penilaian');
	}
    function edit_data(){		
		$query = $this->db->query('select * from biodata b join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan) 
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
                                        join evaluasi ev on(ev.idevaluasi=kg.idkegitanusaha)
                                        join penilaian pes on (pes.idkegiatanusaha=ev.idkegitanusaha)
                                          order by ev.idkegitanusaha limit 1
                                         ');
		return $query;
	}
	  function edit($where){	
               $query = $this->db->query('select * from biodata b 
                                        join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan) 
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
                                        join evaluasi ev on (kg.idkegitanusaha=ev.idkegitanusaha)
                                        join survei1 s1 on(ev.idevaluasi=s1.idevaluasi)
                                        join survei2 s2 on (s1.idsurvei1=s2.idsurvei2)
                                        join survei3 s3 on (s2.idsurvei2=s3.idsurvei3) WHERE s3.idsurvei3='.$where.' ');
       return $query ;
	}

	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	function update_data($where,$data,$table)
	{
		
		$this->db->where($where);
		return $this->db->update($table,$data);
	}	

 function detail_penilaian(){
        $query = $this->db->query('select *from biodata b 
                                    join perusahaan p on  (b.idresi=p.idresi)
                                    join keuangan k on(p.idperusahaan=k.idperusahaan)
                                    join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                    join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                    join evaluasi ev on (kg.idkegitanusaha=ev.idkegitanusaha)
                                    join penilaian pes on (pes.idkegiatanusaha=ev.idkegitanusaha)
                                    ORDER by pes.idkegiatanusaha DESC ');

       
        

   return $query->result();
  }
   function detail_penilaian1(){
        $cekbiodata = $this->db->query('select * from login l join
        	biodata b  on(l.id=b.id) 
        	join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                        join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
                                        join evaluasi ev on (pes.idpenilaian=ev.idpenilaian)
                                        where l.username="'.$this->session->userdata('username').'"
                                        order by pes.idpenilaian DESC ');

       
        

   return $cekbiodata->result();
  }
   function detail_penilaian2(){
        $cekbiodata = $this->db->query('select * from login l join
        	biodata b  on(l.id=b.id) 
        	join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                        join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
                                        join survei1 s1 on (pes.idpenilaian=s1.idpenilaian)
                                        join survei2 s2 on (s1.idsurvei1=s2.idsurvei2)
                                        join survei3 s3 on (s2.idsurvei2=s3.idsurvei3)
                                        where l.username="'.$this->session->userdata('username').'"
                                        order by pes.idpenilaian DESC ');

       
        

   return $cekbiodata->result();
  }
  
//   function detail_penilaian2(){
//         $cekbiodata = $this->db->query('select * from login l join
//         	biodata b  on(l.id=b.id) 
//         	join perusahaan p on (b.idresi=p.idresi)
//                                         join keuangan k on(p.idperusahaan=k.idperusahaan)
//                                         join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
//                                         join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
//                                         join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
//                                         join survei1 s1 on(pes.idpenilaian=s1.idpenilaian)
// 						                join survei2 sr on (s1.idsurvei1=sr.idsurvei1)
// 						                join survei3 s3 on (sr.idsurvei2=s3.idsurvei2)
//                                         where l.username="'.$this->session->userdata('username').'"
//                                         order by pes.idpenilaian DESC ');

       
        

//    return $cekbiodata->result();

// }
  // }
  // function detail_penilaian2(){
  //       $cekbiodata = $this->db->query('select * from login l join
  //       	biodata b  on(l.id=b.id) 
  //       	join perusahaan p on (b.idresi=p.idresi)
  //                                       join keuangan k on(p.idperusahaan=k.idperusahaan)
  //                                       join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
  //                                       join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
  //                                       join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)
  //                                       join evaluasi ev on (pes.idpenilaian=ev.idpenilaian)
  //                                       where l.username="'.$this->session->userdata('username').'"
  //                                       order by pes.idpenilaian DESC ');

       
        

  //  return $cekbiodata->result();
  // }

   function datad(){
        $qey = $this->db->query('select * from biodata b join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on 
                                        (pe.idpendapatan=kg.idpendapatan) 
                                        join penilaian pes on 
                                        (kg.idkegitanusaha=pes.idkegiatanusaha)
                                        order by pes.idpenilaian DESC 
                                        ');

       
        

   return $qey;
  }

  function hitungr(){
  	$query = $this->db->query('select *from biodata b join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)');


  	foreach ($query->result() as $a) {
  		$aktiva= $a->total_akv1/$a->total_pasiva1;
  	;
  	}
  	
    if($aktiva>=1000000){
    	$rasio="Baik";
    }else{
    	$rasio="Tidak Baik";
    }
  	return$rasio;
  }
}
