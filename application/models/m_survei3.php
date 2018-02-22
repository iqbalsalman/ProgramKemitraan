<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_survei3 extends CI_Model{
	function tampil_data(){
		return $this->db->get('survei3');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function datap1(){
       $query = $this->db->query('select *from penilaian p join survei1 s1 on(p.idpenilaian=s1.idpenilaian) join survei2 sr on (s1.idsurvei1=sr.idsurvei1)
           where p.status not in ("Mitra Binaan") order by sr.idsurvei1 desc');
       return $query ;
    
	}

	function surveiuk(){

		$qey = $this->db->query('select *from biodata b 
		 	                        join perusahaan p on  (b.idresi=p.idresi)
                                    join keuangan k on(p.idperusahaan=k.idperusahaan)
                                    join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                    join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                    join evaluasi ve on (kg.idkegitanusaha=ve.idkegitanusaha)
                                    JOIN penilaian pes on (ve.idevaluasi=pes.idevaluasi)
                                        where pes.status="Layak Survei" 
                                        order by pes.idpenilaian DESC 
                                        ');
		return $qey;
	}

	function survei()
	{
		$query = $this->db->query('select *from biodata b 
		 	                        join perusahaan p on  (b.idresi=p.idresi)
                                    join keuangan k on(p.idperusahaan=k.idperusahaan)
                                    join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                    join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) 
                                    join evaluasi ve on (kg.idkegitanusaha=ve.idkegitanusaha)
                                    JOIN penilaian pes on (ve.idevaluasi=pes.idevaluasi)');
		return $query;

	}
	function cetak($where){
		$query = $this->db->query('select p.name as provinsi,p.name ,r.name as kabupaten,d.name as kecamatan,v.name as kelurahan,per.alamat_perusahaan,per.nama_perusahaan as namap,per.p_binaan_pk,per.tpemilik_koprasi,per.bidang_usaha,per.kd_binaan,per.kd_binaan,per.stt_usaha,per.notlp_perusahaan,per.berdiri_tahun,per.siup,
per.jml_karyawan,per.jml_pengurus,b.nama,b.tlpr,
k.total_af1,pe.laba_bersih1,per.npwp,kg.m_manajemen,kg.keuangan,
kg.m_produksi,kg.pemasaran_produk,kg.penjuplan,kg.m_lain,kg.jml_bantuan_pinajaman,kg.konsumen,s1.n_ktp,format(s1.jml_asset,0) as assets,format(s1.jml_bulanan,0) as omset,sr.jml_pegawai,s3.nama_p_tanah,s3.klurah,s3.kcamatan,s3.ktkb,s3
.provinsi,s3.l_tanah,s3.no_shm,format(s3.n_bangunan,0) as n_jual,sr.keuangan,format(s3.jml_mohon,0) as mohon,s1.tgl_anggaran,sr.w_pasaran,format(s1.laba_bersih_e,0) as laba,format(sr.upah_tinggi,0) as upah,pn.catatan,pn.status,format(s1.perkiraan_dana,0) as perkiraan
 from villages v join districts d on (v.district_id=d.id)
                        join regencies r on (d.regency_id=r.id)
						join provinces p on (r.province_id=p.id)
						join biodata   b on (p.id=b.provinsi)
						join perusahaan per on (b.idresi=per.idresi)
						join keuangan k on(per.idperusahaan=k.idperusahaan)
                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
						join penilaian pn on (kg.idkegitanusaha=pn.idkegiatanusaha)
						join survei1 s1 on(pn.idpenilaian=s1.idpenilaian)
						join survei2 sr on (s1.idsurvei1=sr.idsurvei1)
						join survei3 s3 on (sr.idsurvei2=s3.idsurvei2)
						where per.provinsi_p=p.id and per.kota_perusahaan=r.id and per.kecamatan_perusahaan=d.id and per.kelurahan_perusahaan=v.id
						order by p.id,r.id,d.id,v.id, s3.idsurvei3  desc limit 1 ');
       return $query->result() ;
       
    }

    function datapes(){
       $query = $this->db->query('select p.name as provinsi,r.name as kabupaten,d.name as kecamatan,v.name as kelurahan,per.alamat_perusahaan,per.nama_perusahaan as namap,per.p_binaan_pk,per.tpemilik_koprasi,per.bidang_usaha,per.kd_binaan,per.kd_binaan,per.stt_usaha,per.notlp_perusahaan,per.berdiri_tahun,
per.jml_karyawan,per.jml_pengurus,k.total_af1,pe.laba_bersih1,per.npwp,kg.m_manajemen,kg.keuangan,
kg.m_produksi,kg.pemasaran_produk,kg.penjuplan,kg.m_lain,kg.jml_bantuan_pinajaman,kg.konsumen
 from villages v join districts d on (v.district_id=d.id)
                        join regencies r on (d.regency_id=r.id)
						join provinces p on (r.province_id=p.id)
						join biodata   b on (p.id=b.provinsi)
						join perusahaan per on (b.idresi=per.idresi)
						join keuangan k on(per.idperusahaan=k.idperusahaan)
                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
						where per.provinsi_p=p.id and per.kota_perusahaan=r.id and per.kecamatan_perusahaan=d.id and per.kelurahan_perusahaan=v.id
						order by p.id,r.id,d.id,v.id, kg.idkegitanusaha desc
						limit 1
						');
       return $query ;
    
	}


	function data(){	
               $query = $this->db->query('select * from biodata b 
                                        join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan) 
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan)
                                        join evaluasi ev on (kg.idkegitanusaha=ev.idkegitanusaha)
                                        join survei1 s1 on (ev.idevaluasi=s1.idevaluasi)
                                        join survei2 s2 on (s1.idsurvei1=s2.idsurvei1)
                                        JOIN survei3 s3 on (s2.idsurvei2=s2.idsurvei2)
                                        join penilaian pes on (s3.idsurvei3=pes.idsurvei3)');
       return $query ;
	}
	function nilai(){
       $query = $this->db->query('select *from penilaian p join survei1 s1 on(p.idpenilaian=s1.idpenilaian) join survei2 sr on (s1.idsurvei1=sr.idsurvei1) order by sr.idsurvei1 desc');
       return $query ;
    
	}

	function biodatas(){
		$query=$this->db->query('select p.name as provinsi_b,r.name as kabupaten_b,d.name as kecamatan_b,v.name as kelurahan_b,b.alamat_rumah	
from villages v join districts d on (v.district_id=d.id)
                        join regencies r on (d.regency_id=r.id)
						join provinces p on (r.province_id=p.id)
						join biodata   b on (p.id=b.provinsi)
where b.provinsi=p.id and b.ktkb=r.id and b.kcamatan=d.id and b.klurah=v.id	
order by p.id,r.id,d.id,v.id, b.idresi desc	');
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