
<?php
class M_kegiatanusaha extends CI_Model{
    function tampil_data(){
        return $this->db->get('kegiatan_usaha');
    }

    function insert_data($table){
                    $jenis_produksi                = $this->input->post('jenis_produksi');
                    $kapasitas                      = $this->input->post('kapasitas');
                    $bahan_baku_produksi            = $this->input->post('bahan_baku_produksi');
                    $alat_produksi                  = $this->input->post('alat_produksi');
                    $pengunaan_teknologi            = $this->input->post('pengunaan_teknologi');
                    $desaint                        = $this->input->post('desaint');
                    $kualitas                       = $this->input->post('kualitas');
                    $bahan_baku_penolong            = $this->input->post('bahan_baku_penolong');
                    $smb_bahan_baku                 = $this->input->post('smb_bahan_baku');
                    $kebutuhan_bahan_baku           = $this->input->post('kebutuhan_bahan_baku');
                    $omset                          = $this->input->post('omset');
                    $usaha_non_produksi             = $this->input->post('usaha_non_produksi');
                    $omset_non_produksi             = $this->input->post('omset_non_produksi');
                    $ttl_nomproduksi                = $usaha_non_produksi+$omset_non_produksi;
                    $jml_tenaga_kerja               = $this->input->post('jml_tenaga_kerja');
                    $pendidikan                     = $this->input->post('pendidikan');
                    $jml_tng_ahli                   = $this->input->post('jml_tng_ahli');
                    $kursus                         = $this->input->post('kursus');
                    $jama_kerja                     = $this->input->post('jama_kerja');
                    $upah_rata                      = $this->input->post('upah_rata');
                    $upah_lembur                    = $this->input->post('upah_lembur');
                    $terdaftar_jamsostek            = $this->input->post('terdaftar_jamsostek');
                    $konsumen                       = $this->input->post('konsumen');
                    $lokal_s                        = $this->input->post('lokal_s');
                    $regions                        = $this->input->post('regions');
                    $nasional_p                     = $this->input->post('nasional_p');
                    $ekspor_i                       = $this->input->post('ekspor_i');
                    $distribusi                     = $this->input->post('distribusi');
                    $sistem_pembayaran              = $this->input->post('sistem_pembayaran');
                    $tahun_usaha1                   = $this->input->post('tahun_usaha1');
                    $tahun_usaha2                   = $this->input->post('tahun_usaha2');
                    $tenaga_kerja1                  = $this->input->post('tenaga_kerja1');
                    $tenaga_kerja2                  = $this->input->post('tenaga_kerja2');
                    $produksi1                      = $this->input->post('produksi1');
                    $produksi2                      = $this->input->post('produksi2');
                    $omset_rata1                    = $this->input->post('omset_rata1');
                    $omset_rata2                    = $this->input->post('omset_rata2');
                    $tabungan1                      = $this->input->post('tabungan1');
                    $tabungan2                      = $this->input->post('tabungan2');
                    $m_manajemen                    = $this->input->post('m_manajemen');
                    $m_produksi                     = $this->input->post('m_produksi');
                    $pemasaran_produk               = $this->input->post('pemasaran_produk');
                    $penjuplan                      = $this->input->post('penjuplan');
                    $keuangan                       = $this->input->post('keuangan');
                    $m_lain                         = $this->input->post('m_lain');
                    $jml_bantuan_pinajaman          = $this->input->post('jml_bantuan_pinajaman');
                    $modal_kerja                    = $this->input->post('modal_kerja');
                    $investasi                      = $this->input->post('investasi');
                    $dana_tersedia                  = $this->input->post('dana_tersedia');
                    $prospek_dana                   = $this->input->post('prospek_dana');
                    $kasanggupan_angsuran           = $this->input->post('kasanggupan_angsuran');
                    $idpendapatan                   = $this->input->post('idpendapatan');
                 
                         $data = array(
                          'jenis_produksi'      =>  $jenis_produksi,
                          'kapasitas'           =>  $kapasitas,
                          'bahan_baku_produksi' =>  $bahan_baku_produksi,
                          'alat_produksi'       =>  $alat_produksi,
                          'pengunaan_teknologi' =>  $pengunaan_teknologi,
                          'desaint '            =>  $desaint,
                          'kualitas'            =>  $kualitas,
                          'bahan_baku_penolong '=>  $bahan_baku_penolong,
                          'smb_bahan_baku'      =>  $smb_bahan_baku,
                          'kebutuhan_bahan_baku'=>  $kebutuhan_bahan_baku,
                          'omset '              =>  $omset,
                          'usaha_non_produksi'  =>  $usaha_non_produksi,
                          'omset_non_produksi'  =>  $omset_non_produksi,
                          'ttl_nomproduksi'     =>  $ttl_nomproduksi,
                          'jml_tenaga_kerja'    =>  $jml_tenaga_kerja,
                          'pendidikan'          =>  $pendidikan,
                          'jml_tng_ahli'        =>  $jml_tng_ahli,
                          'kursus'              =>  $kursus,
                          'jama_kerja '         =>  $jama_kerja ,
                          'upah_rata'           =>  $upah_rata,
                          'upah_lembur'         =>  $upah_lembur,
                          'terdaftar_jamsostek '=>  $terdaftar_jamsostek ,
                          'konsumen'            =>  $konsumen,
                          'lokal_s'             =>  $lokal_s,
                          'regions'             =>  $regions,
                          'nasional_p '         =>  $nasional_p ,
                          'ekspor_i'            =>  $ekspor_i,
                          'distribusi'          =>  $distribusi,
                          'sistem_pembayaran'   =>  $sistem_pembayaran,
                          'tahun_usaha1'        =>  $tahun_usaha1,
                          'tahun_usaha2'        =>  $tahun_usaha2,
                          'tenaga_kerja1'       =>  $tenaga_kerja1,
                          'tenaga_kerja2 '      =>  $tenaga_kerja2 ,
                          'produksi1'           =>  $produksi1,
                          'produksi2 '          =>  $produksi2 ,
                          'omset_rata1'         =>  $omset_rata1,
                          'omset_rata2 '        =>  $omset_rata2,
                          'tabungan1'           =>  $tabungan1,
                          'tabungan2'           =>  $tabungan2,
                          'm_manajemen'         =>  $m_manajemen,
                          'm_produksi'          =>  $m_produksi,
                          'pemasaran_produk'    =>  $pemasaran_produk,
                          'penjuplan'           =>  $penjuplan,
                          'keuangan'            =>  $keuangan,
                          'm_lain'              =>  $m_lain,
                          'jml_bantuan_pinajaman'=>  $jml_bantuan_pinajaman,
                          'modal_kerja'         =>  $modal_kerja,
                          'investasi'           =>  $investasi,
                          'dana_tersedia'       =>  $dana_tersedia,
                          'prospek_dana'        =>  $prospek_dana,
                          'kasanggupan_angsuran'=>  $kasanggupan_angsuran,
                          'idpendapatan'        =>  $idpendapatan
                        );
        $this->db->insert($table,$data);
        $cekbiodata = $this->db->query('select * from biodata b join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) order by idkegitanusaha DESC limit 1');
        if ($cekbiodata->num_rows() > 0) {
            if ($cekbiodata->row()->upload_ktp != null && $cekbiodata->row()->upload_kk != null && $cekbiodata->row()->npwp != 0 && $cekbiodata->row()->nmpgang_hak != null && $cekbiodata->row()->lokasi_tanah != null && $cekbiodata->row()->luas_tanah != null
               && $cekbiodata->row()->srs_tansi != null  && $cekbiodata->row()->no_tanah != null) {
                $status = 'Lolos Administrasi Proposal';
                $catatan = 'Telah Memenuhi Persyaratan';
                $idkegitanusaha = $cekbiodata->row()->idkegitanusaha;
            }else{
                $status = 'Tidak Lolos Administrasi Proposal';
                $catatan = 'Proposal Tidak Valid';
                $idkegitanusaha = $cekbiodata->row()->idkegitanusaha;
            }
            $data1 = array(
                'status'    => $status,
                'catatan'   => $catatan,
                'idkegiatanusaha' => $idkegitanusaha
            );
            $this->db->insert('penilaian', $data1);
        }
    }

    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function cekdatap(){
       $cekbiodata = $this->db->query('select b.nama, b.alamat_rumah,p.alamat_perusahaan,pes.status ,pes.catatan from biodata b join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha)');
       return $cekbiodata;
    }
    function cekdata(){
       $cekbiodata = $this->db->query('select b.nama, b.alamat_rumah,p.alamat_perusahaan,pes.status ,pes.catatan from biodata b join perusahaan p on (b.idresi=p.idresi)
                                        join keuangan k on(p.idperusahaan=k.idperusahaan)
                                        join pendapatan pe on (k.idkeuangan=pe.idkeuangan)
                                        join kegiatan_usaha kg on (pe.idpendapatan=kg.idpendapatan) join penilaian pes on (kg.idkegitanusaha=pes.idkegiatanusaha) order by kg.idkegitanusaha asc'); 
       return $cekbiodata;
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