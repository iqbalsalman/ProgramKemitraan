<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendapatan extends CI_Controller {

    var $limit=10;
	var $offset=10;

    public function __construct() {
        parent::__construct();
        $this->load->model('m_pendapatan'); 
        $this->load->model('m_keuangan');
        $this->load->helper('url'); 

    }

	public function index()
	{        
        $data['query'] = $this->m_keuangan->tampil_data()->result(); 
        $data['qry']   = $this->db->order_by('idkeuangan desc')->limit(1)->get('keuangan')->row();
        $this->load->view('Pendapatan',$data); 
    }

    function login(){
        $this->load->view('login2');
    }
    public function insert()
    {
    	            $cekbiodata                     =  $this->m_pendapatan->datap();
	                $keuangan                       = $cekbiodata->row()->idkeuangan;
					$thn_pendapatan1                = $this->input->post('thn_pendapatan1');
		            $thn_pendapatan2                = $this->input->post('thn_pendapatan2');
		            $penjualanr_s1                  = $this->input->post('penjualanr_s1');
		            $penjualanr_s2                  = $this->input->post('penjualanr_s2');
		            $penjualan_s1                   = $this->input->post('penjualan_s1');
		            $penjualan_s2                   = $this->input->post('penjualan_s2');
					$h_pendapatan1                  = $penjualanr_s1+ $penjualan_s1;
					$h_pendapatan2                  = $penjualanr_s2+ $penjualan_s2;
					$bahan_baku1                    = $this->input->post('bahan_baku1');
		            $bahan_baku2                    = $this->input->post('bahan_baku2');
		            $bahan_penolong1                = $this->input->post('bahan_penolong1');
					$bahan_penolong2                = $this->input->post('bahan_penolong2');
		            $hplain_lain1                   = $this->input->post('hplain_lain1');
		            $hplain_lain2                   = $this->input->post('hplain_lain2');
					$total_hpp1                     = $bahan_baku1+$bahan_penolong1+$hplain_lain1;
					$total_hpp2                     = $bahan_baku2+$bahan_penolong2+$hplain_lain2;
					$laba_rugi1                     = $h_pendapatan1 - $total_hpp1;
		            $laba_rugi2                     = $h_pendapatan2 -  $total_hpp2; 
					$adminis_atk1                   = $this->input->post('adminis_atk1');
		            $adminis_atk2                   = $this->input->post('adminis_atk2');
		            $biaya_penjualan1               = $this->input->post('biaya_penjualan1');
					$biaya_penjualan2               = $this->input->post('biaya_penjualan2');
		            $telepon1                       = $this->input->post('telepon1');
		            $telepon2                       = $this->input->post('telepon2');
					$air1                           = $this->input->post('air1');
		            $air2                           = $this->input->post('air2');
		            $listrik1                       = $this->input->post('listrik1');
					$listrik2                       = $this->input->post('listrik2');
		            $biaya_penyusutan1              = $this->input->post('biaya_penyusutan1');
		            $biaya_penyusutan2              = $this->input->post('biaya_penyusutan2');
					$biaya_gaji1                    = $this->input->post('biaya_gaji1');
		            $biaya_gaji2                    = $this->input->post('biaya_gaji2');
		            $Biaya_tenaga_kerja1            = $this->input->post('Biaya_tenaga_kerja1');
					$Biaya_tenaga_kerja2            = $this->input->post('Biaya_tenaga_kerja2');
		            $biaya_kesehatan1               = $this->input->post('biaya_kesehatan1');
		            $biaya_kesehatan2               = $this->input->post('biaya_kesehatan2');
					$biaya_transportasi1            = $this->input->post('biaya_transportasi1');
		            $biaya_transportasi2            = $this->input->post('biaya_transportasi2');
		            $biaya_pendidikan1              = $this->input->post('biaya_pendidikan1');
					$biaya_pendidikan2              = $this->input->post('biaya_pendidikan2');
		            $biaya_promosi1                 = $this->input->post('biaya_promosi1');
		            $biaya_promosi2                 = $this->input->post('biaya_promosi2');
					$biaya_rumah_tangga1            = $this->input->post('biaya_rumah_tangga1');
		            $biaya_rumah_tangga2            = $this->input->post('biaya_rumah_tangga2');
		            $biaya_sekolah1                 = $this->input->post('biaya_sekolah1');
					$biaya_sekolah2                 = $this->input->post('biaya_sekolah2');
					$total_adm_umum1                = $adminis_atk1+$biaya_penjualan1+$telepon1+$air1+                              $listrik1+$biaya_penyusutan1+$biaya_gaji1+                              $Biaya_tenaga_kerja1+$biaya_kesehatan1+                              $biaya_transportasi1+ $biaya_pendidikan1+                              $biaya_promosi1+$biaya_rumah_tangga1+
					                                  $biaya_sekolah1;
                    $total_adm_umum2                = $adminis_atk2+$biaya_penjualan2+$telepon2+$air2+                              $listrik2+$biaya_penyusutan2+$biaya_gaji2+                              $Biaya_tenaga_kerja2+$biaya_kesehatan2+                              $biaya_transportasi2+ $biaya_pendidikan2+                              $biaya_promosi2+$biaya_rumah_tangga2+                              $biaya_sekolah2;					
		            $laba_bersih1                   = $laba_rugi1 - $total_adm_umum1;
		            $laba_bersih2                   = $laba_rugi2  - $total_adm_umum2;
                 
				 $data = array(
				  'idkeuangan'          =>  $keuangan,
                  'thn_pendapatan1'     =>  $thn_pendapatan1,
				  'thn_pendapatan2'     =>  $thn_pendapatan2,
				  'penjualanr_s1'       =>  $penjualanr_s1,
				  'penjualanr_s2'       =>  $penjualanr_s2,
				  'penjualan_s1'        =>  $penjualan_s1 ,
				  'penjualan_s2'        =>  $penjualan_s2,
				  'h_pendapatan1'       =>  $h_pendapatan1,
				  'h_pendapatan2'       =>  $h_pendapatan2,
				  'bahan_baku1'         =>  $bahan_baku1,
				  'bahan_baku2'         =>  $bahan_baku2,
				  'bahan_penolong1'     =>  $bahan_penolong1,
				  'bahan_penolong2'     =>  $bahan_penolong2,
				  'hplain_lain1'        =>  $hplain_lain1,
				  'hplain_lain2'        =>  $hplain_lain2,
				  'total_hpp1'          =>  $total_hpp1,
				  'total_hpp2'          =>  $total_hpp2,
				  'laba_rugi1'          =>  $laba_rugi1,
				  'laba_rugi2'          =>  $laba_rugi2,
				  'adminis_atk1'        =>  $adminis_atk1,
				  'adminis_atk2'        =>  $adminis_atk2,
				  'biaya_penjualan1'    =>  $biaya_penjualan1,
				  'biaya_penjualan2 '   =>  $biaya_penjualan2 ,
				  'telepon1'            =>  $telepon1,
				  'telepon2'            =>  $telepon2,
				  'air1'                =>  $air1,
				  'air2'                =>  $air2 ,
				  'listrik1'            =>  $listrik1,
				  'listrik2'            =>  $listrik2,
				  'biaya_penyusutan1'   =>  $biaya_penyusutan1,
				  'biaya_penyusutan2'   =>  $biaya_penyusutan2,
				  'biaya_gaji1'         =>  $biaya_gaji1,
				  'biaya_gaji2'         =>  $biaya_gaji2 ,
				  'Biaya_tenaga_kerja1' =>  $Biaya_tenaga_kerja1,
				  'Biaya_tenaga_kerja2 '=>  $Biaya_tenaga_kerja2 ,
				  'biaya_kesehatan1'    =>  $biaya_kesehatan1,
				  'biaya_kesehatan2'    =>  $biaya_kesehatan2 ,
				  'biaya_transportasi1' =>  $biaya_transportasi1 ,
				  'biaya_transportasi2' =>  $biaya_transportasi2,
				  'biaya_pendidikan1'   =>  $biaya_pendidikan1,
				  'biaya_pendidikan2'   =>  $biaya_pendidikan2,
				  'biaya_promosi1 '     =>  $biaya_promosi1,
				  'biaya_promosi2'      =>  $biaya_promosi2,
				  'biaya_rumah_tangga1' =>  $biaya_rumah_tangga1,
				  'biaya_rumah_tangga2' =>  $biaya_rumah_tangga2,
				  'biaya_sekolah1 '     =>  $biaya_sekolah1,
				  'biaya_sekolah2'      =>  $biaya_sekolah2,
				  'total_adm_umum1'     =>  $total_adm_umum1,
				  'total_adm_umum2'     =>  $total_adm_umum2,
				  'laba_bersih1 '       =>  $laba_bersih1,
				  'laba_bersih2 '       =>  $laba_bersih2 
                );

                $this->m_pendapatan->input_data($data,'pendapatan'); //akses model untuk menyimpan ke database
                redirect('usaha/index'); //jika berhasil maka akan ditampilkan view upload
			 			 
		
	}
	function data_id(){
		$where['query']=$this->m_keuangan->data();
		$this->load->view('Pendapatan',$where);
	}
	function hapus($idpendapatan){
		$where = array('idpendapatan' => $idpendapatan);
		$this->m_pendapatan->hapus_data($where,'pendapatan');
		redirect('pendapatan/index');
	}
 
	function edit($idpendapatan){
		$where = array('idpendapatan' => $idpendapatan);
		$data['query'] = $this->m_pendapatan
							  ->edit_data($where,'pendapatan')
							  ->result();
		$data['qry'] = $this->db
							->order_by('idkeuangan desc')
							->limit(1)
							->get('keuangan')
							->row();
		$this->load->view('edit_pendapatan',$data);
	}
	/**
	 * 
	 */

	function update(){ 
    	            $cekbiodata                     =  $this->m_pendapatan->datap();
	                $keuangan                       = $cekbiodata->row()->idkeuangan;
					$thn_pendapatan1                = $this->input->post('thn_pendapatan1');
		            $thn_pendapatan2                = $this->input->post('thn_pendapatan2');
		            $penjualanr_s1                  = $this->input->post('penjualanr_s1');
		            $penjualanr_s2                  = $this->input->post('penjualanr_s2');
		            $penjualan_s1                   = $this->input->post('penjualan_s1');
		            $penjualan_s2                   = $this->input->post('penjualan_s2');
					$h_pendapatan1                  = $penjualanr_s1+ $penjualan_s1;
					$h_pendapatan2                  = $penjualanr_s2+ $penjualan_s2;
					$bahan_baku1                    = $this->input->post('bahan_baku1');
		            $bahan_baku2                    = $this->input->post('bahan_baku2');
		            $bahan_penolong1                = $this->input->post('bahan_penolong1');
					$bahan_penolong2                = $this->input->post('bahan_penolong2');
		            $hplain_lain1                   = $this->input->post('hplain_lain1');
		            $hplain_lain2                   = $this->input->post('hplain_lain2');
					$total_hpp1                     = $bahan_baku1+$bahan_penolong1+$hplain_lain1;
					$total_hpp2                     = $bahan_baku2+$bahan_penolong2+$hplain_lain2;
					$laba_rugi1                     = $h_pendapatan1 - $total_hpp1;
		            $laba_rugi2                     = $h_pendapatan2 -  $total_hpp2; 
					$adminis_atk1                   = $this->input->post('adminis_atk1');
		            $adminis_atk2                   = $this->input->post('adminis_atk2');
		            $biaya_penjualan1               = $this->input->post('biaya_penjualan1');
					$biaya_penjualan2               = $this->input->post('biaya_penjualan2');
		            $telepon1                       = $this->input->post('telepon1');
		            $telepon2                       = $this->input->post('telepon2');
					$air1                           = $this->input->post('air1');
		            $air2                           = $this->input->post('air2');
		            $listrik1                       = $this->input->post('listrik1');
					$listrik2                       = $this->input->post('listrik2');
		            $biaya_penyusutan1              = $this->input->post('biaya_penyusutan1');
		            $biaya_penyusutan2              = $this->input->post('biaya_penyusutan2');
					$biaya_gaji1                    = $this->input->post('biaya_gaji1');
		            $biaya_gaji2                    = $this->input->post('biaya_gaji2');
		            $Biaya_tenaga_kerja1            = $this->input->post('Biaya_tenaga_kerja1');
					$Biaya_tenaga_kerja2            = $this->input->post('Biaya_tenaga_kerja2');
		            $biaya_kesehatan1               = $this->input->post('biaya_kesehatan1');
		            $biaya_kesehatan2               = $this->input->post('biaya_kesehatan2');
					$biaya_transportasi1            = $this->input->post('biaya_transportasi1');
		            $biaya_transportasi2            = $this->input->post('biaya_transportasi2');
		            $biaya_pendidikan1              = $this->input->post('biaya_pendidikan1');
					$biaya_pendidikan2              = $this->input->post('biaya_pendidikan2');
		            $biaya_promosi1                 = $this->input->post('biaya_promosi1');
		            $biaya_promosi2                 = $this->input->post('biaya_promosi2');
					$biaya_rumah_tangga1            = $this->input->post('biaya_rumah_tangga1');
		            $biaya_rumah_tangga2            = $this->input->post('biaya_rumah_tangga2');
		            $biaya_sekolah1                 = $this->input->post('biaya_sekolah1');
					$biaya_sekolah2                 = $this->input->post('biaya_sekolah2');
					$total_adm_umum1                = $adminis_atk1+$biaya_penjualan1+$telepon1+$air1+                              $listrik1+$biaya_penyusutan1+$biaya_gaji1+                              $Biaya_tenaga_kerja1+$biaya_kesehatan1+                              $biaya_transportasi1+ $biaya_pendidikan1+                              $biaya_promosi1+$biaya_rumah_tangga1+
					                                  $biaya_sekolah1;
                    $total_adm_umum2                = $adminis_atk2+$biaya_penjualan2+$telepon2+$air2+                              $listrik2+$biaya_penyusutan2+$biaya_gaji2+                              $Biaya_tenaga_kerja2+$biaya_kesehatan2+                              $biaya_transportasi2+ $biaya_pendidikan2+                              $biaya_promosi2+$biaya_rumah_tangga2+                              $biaya_sekolah2;					
		            $laba_bersih1                   = $laba_rugi1 - $total_adm_umum1;
		            $laba_bersih2                   = $laba_rugi2  - $total_adm_umum2;
                 
				 $data = array(
				  'idkeuangan'          =>  $keuangan,
                  'thn_pendapatan1'     =>  $thn_pendapatan1,
				  'thn_pendapatan2'     =>  $thn_pendapatan2,
				  'penjualanr_s1'       =>  $penjualanr_s1,
				  'penjualanr_s2'       =>  $penjualanr_s2,
				  'penjualan_s1'        =>  $penjualan_s1 ,
				  'penjualan_s2'        =>  $penjualan_s2,
				  'h_pendapatan1'       =>  $h_pendapatan1,
				  'h_pendapatan2'       =>  $h_pendapatan2,
				  'bahan_baku1'         =>  $bahan_baku1,
				  'bahan_baku2'         =>  $bahan_baku2,
				  'bahan_penolong1'     =>  $bahan_penolong1,
				  'bahan_penolong2'     =>  $bahan_penolong2,
				  'hplain_lain1'        =>  $hplain_lain1,
				  'hplain_lain2'        =>  $hplain_lain2,
				  'total_hpp1'          =>  $total_hpp1,
				  'total_hpp2'          =>  $total_hpp2,
				  'laba_rugi1'          =>  $laba_rugi1,
				  'laba_rugi2'          =>  $laba_rugi2,
				  'adminis_atk1'        =>  $adminis_atk1,
				  'adminis_atk2'        =>  $adminis_atk2,
				  'biaya_penjualan1'    =>  $biaya_penjualan1,
				  'biaya_penjualan2 '   =>  $biaya_penjualan2 ,
				  'telepon1'            =>  $telepon1,
				  'telepon2'            =>  $telepon2,
				  'air1'                =>  $air1,
				  'air2'                =>  $air2 ,
				  'listrik1'            =>  $listrik1,
				  'listrik2'            =>  $listrik2,
				  'biaya_penyusutan1'   =>  $biaya_penyusutan1,
				  'biaya_penyusutan2'   =>  $biaya_penyusutan2,
				  'biaya_gaji1'         =>  $biaya_gaji1,
				  'biaya_gaji2'         =>  $biaya_gaji2 ,
				  'Biaya_tenaga_kerja1' =>  $Biaya_tenaga_kerja1,
				  'Biaya_tenaga_kerja2 '=>  $Biaya_tenaga_kerja2 ,
				  'biaya_kesehatan1'    =>  $biaya_kesehatan1,
				  'biaya_kesehatan2'    =>  $biaya_kesehatan2 ,
				  'biaya_transportasi1' =>  $biaya_transportasi1 ,
				  'biaya_transportasi2' =>  $biaya_transportasi2,
				  'biaya_pendidikan1'   =>  $biaya_pendidikan1,
				  'biaya_pendidikan2'   =>  $biaya_pendidikan2,
				  'biaya_promosi1 '     =>  $biaya_promosi1,
				  'biaya_promosi2'      =>  $biaya_promosi2,
				  'biaya_rumah_tangga1' =>  $biaya_rumah_tangga1,
				  'biaya_rumah_tangga2' =>  $biaya_rumah_tangga2,
				  'biaya_sekolah1 '     =>  $biaya_sekolah1,
				  'biaya_sekolah2'      =>  $biaya_sekolah2,
				  'total_adm_umum1'     =>  $total_adm_umum1,
				  'total_adm_umum2'     =>  $total_adm_umum2,
				  'laba_bersih1 '       =>  $laba_bersih1,
				  'laba_bersih2 '       =>  $laba_bersih2 
                );
              
                 $where =  array('idpendapatan' => $idpendapatan );
				 $this->m_pendapatan->update_data($where,$data,'pendapatan');
				 redirect('usaha/index');

				}
			}
		
			