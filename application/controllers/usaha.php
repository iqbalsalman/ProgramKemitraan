<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usaha extends CI_Controller {

    var $limit=10;
	var $offset=10;

    public function __construct() {
        parent::__construct();
        $this->load->model('m_kegiatanusaha'); 
        $this->load->model('m_pendapatan'); 
        $this->load->helper('url'); 

    }

	public function index()
	{        
        $data['query'] = $this->m_pendapatan->tampil_data()->result(); 
        $data['qry']   = $this->db->order_by('idpendapatan desc')->limit(1)->get('pendapatan')->row();
        
       $this->load->view('Kegiatan_usaha',$data); //tampilan awal ketika controller upload di akses
	}
  function login(){
        $this->load->view('login2');
    }
	// function kegiatan(){
	// 	$this->load->view('Kegiatan_usaha');
	// }

    public function insert(){
            $this->m_kegiatanusaha->insert_data('kegiatan_usaha'); 
             redirect('dashboard/evaluator');
			 			 
		
	}

	function data_id(){
		$where['query']=$this->m_pendapatan->data();
		$this->load->view('Kegiatan_usaha',$where);
	}
	function hapus($idkegitanusaha){
		$where = array('idkegitanusaha' => $idkegitanusaha);
		$this->m_kegiatanusaha->hapus_data($where,'kegiatan_usaha');
		redirect('usaha/index');
	}
 
	function edit($idkegitanusaha){
		$where = array('idkegitanusaha' => $idkegitanusaha);
		$data['query'] = $this->m_kegiatanusaha->edit_data($where,'kegiatan_usaha')->result();
		$this->load->view('edit_kegiatanusaha',$data);
	}

	function update(){
		                $idkegitanusaha                 = $this->input->post('idkegitanusaha');
                    $jenis_produksi                 = $this->input->post('jenis_produksi');
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

					$where = array('idkegitanusaha' => $idkegitanusaha);	
				    
				    $this->m_kegiatanusaha->update_data($where,$data,'kegiatan_usaha');
				     $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data Berhasil di Update !!</div></div>");
				    redirect('usaha/index'); 

	}
}
