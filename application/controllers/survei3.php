<?php

 
class Survei3 extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		
		$this->load->model('m_select');
		$this->load->library('m_pdf');
		$this->load->model('m_evaluasi');
		$this->load->model('m_survei1');
		$this->load->model('m_survei3');
		$this->load->helper('url');

	}
	function login(){
        $this->load->view('login2');
    }

	function index(){
		$data['provinsi']=$this->m_select->provinsi();
	    $data['query'] = $this->m_survei3->survei()->result();
		$data['qry'] = $this->db->order_by('idsurvei2 desc')->limit(1)->get('survei2')->row();
		$this->load->view('survei3',$data);
	}
	function datasurvei(){
		$data['qry']= $this->m_survei3->data()->result();
		$this->load->view('datasurvei',$data);
	}

	function surveilapangan(){
    	
    	$data['qey'] = $this->m_survei3->surveiuk()->result();
    	$this->load->view('dataes',$data);

    }

    function parameter()
    {
      $data['ceklis'] = $this->m_survei3->data()->result();
      $this->load->view('detailnilai/nilai_survei1',$data);
    }

	private function _gen_pdf($html,$paper='Legal')
    {
     ob_end_clean();
     $pdf = $this->m_pdf->load();
     $pdf->AddPage('L');
     $pdf->WriteHTML($html);
     $pdf->Output();
     }
    /////////////////////////////////////////////////////////
    public function doprint($idkegiatanusaha)
    {
     $where = array('idkegiatanusaha' => $idkegiatanusaha);
     $data['query'] = $this->m_evaluasi->data_biodata($idkegiatanusaha)->result();
     $data['qry'] = $this->m_evaluasi->data_perusahaan($idkegiatanusaha)->result();
     $data['pros'] = $this->m_survei3->data()->result();
     $output = $this->load->view('printlaporansurvei',$data, TRUE);
     return $this->_gen_pdf($output);
    }
    public function print_t(){
    	$this->load->view('printlaporansurvei1');
    }
    function nilaisurveis(){
			// $data['query'] = $this->m_evaluasi->tampil_data()->result();
	  //       $this->load->view('dataevaluasi',$data);
		 redirect('penilaian/survei'.$qry->idpenilaian);
	}

	function insert(){
		$idsurvei2         =   $this->input->post('idsurvei2');
		$bank1             =   $this->input->post('bank1');
		$no_rek            =   $this->input->post('no_rek');
		$t_tinggal         =   $this->input->post('t_tinggal');
		$lama_tinggal      =   $this->input->post('lama_tinggal');
		$jml_mohon         =   $this->input->post('jml_mohon');
		$penggunaan1       =   $this->input->post('penggunaan1');
        $penggunaan2       =   $this->input->post('penggunaan2');
        $syarat_minimun    =   $this->input->post('syarat_minimun');
        $nama_waris        =   $this->input->post('nama_waris');
        $hubungan          =   $this->input->post('hubungan');
        $nama_p_tanah      =   $this->input->post('nama_p_tanah');
        $no_shm            =   $this->input->post('no_shm');
        $klurah            =   $this->input->post('klurah');
        $kcamatan          =   $this->input->post('kcamatan');
        $ktkb              =   $this->input->post('ktkb');
        $provinsi          =   $this->input->post('provinsi');
        $l_tanah           =   $this->input->post('l_tanah');
        $n_bangunan        =   $this->input->post('n_bangunan');
        $t_usaha           =   $this->input->post('t_usaha');
        $lama_tinggal_usaha=   $this->input->post('lama_tinggal_usaha');
        
        $idsurvei2         =   $this->input->post('idsurvei2');

		$data = array(              
	    'bank1'            =>  $bank1,                
		'no_rek'           =>  $no_rek,               
		't_tinggal'        =>  $t_tinggal,          
		'lama_tinggal'     =>  $lama_tinggal,       
		'jml_mohon'        =>  $jml_mohon,            
		'penggunaan1'      =>  $penggunaan1,
        'penggunaan2'      =>  $penggunaan2,         
        'syarat_minimun'   =>  $syarat_minimun,      
        'nama_waris'       =>  $nama_waris,         
        'hubungan'         =>  $hubungan,           
        'nama_p_tanah'     =>  $nama_p_tanah,      
        'no_shm'           =>  $no_shm,           
        'klurah'           =>  $klurah,              
        'kcamatan'         =>  $kcamatan,           
        'ktkb'             =>  $ktkb,                 
        'provinsi'         =>  $provinsi,          
        'l_tanah'          =>  $l_tanah,           
        'n_bangunan'       =>  $n_bangunan,
        'n_bangunan'       =>  $n_bangunan,
        'idsurvei2'       =>   $idsurvei2           
			);
		$this->m_survei3->input_data($data,'survei3');
		$q['qry']= $this->db->order_by('idpenilaian desc')->limit(1)->get('penilaian')->row();
		redirect('Survei3/parameter');
	}
	// function data_id(){
	// 	$where['query']=$this->m_data->data();
	// 	$this->load->view('Data_perusahaan',$where);
	// }
	// function hapus($idperusahaan){
	// 	$where = array('idperusahaan' => $idperusahaan);
	// 	$this->m_perusahaan->hapus_data($where,'perusahaan');
	// 	redirect('perusahaan/index');
	// }
 
	function edit($idsurvei3){
		$where = array('idsurvei3' => $idsurvei3);
		$data['query'] = $this->m_survei3->edit_data($where,'survei3')->result();
		$data['qry'] = $this->db->order_by('idsurvei2 desc')->limit(1)->get('survei2')->row();
		$this->load->view('edit_survei3',$data);
	}
	function update(){

		$idperusahaan = $this->input->post('idperusahaan');
		
		$this->load->library('upload');
        $nmfile = "file_".time(); //nama file + fungsi time
        $config['upload_path'] = './asset/img/'; //Folder untuk menyimpan hasil upload
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
		
		 $this->upload->initialize($config);
         $this->upload->do_upload('upload_struk_organisasi');
         $gbr = $this->upload->file_name;  
         $this->upload->do_upload('srs_tansi');
         $gbr2 = $this->upload->file_name; 	
          
		
		$nama_perusahaan = $this->input->post('nama_perusahaan');
		$tpemilik_koprasi= $this->input->post('tpemilik_koprasi');
		$p_binaan_pk = $this->input->post('p_binaan_pk');
		$kd_binaan = $this->input->post('kd_binaan');
		$bidang_usaha = $this->input->post('bidang_usaha');
		$jenis_usaha= $this->input->post('jenis_usaha');
		$alamat_perusahaan = $this->input->post('alamat_perusahaan');
		$kelurahan_perusahaan = $this->input->post('kelurahan_perusahaan');
		$kecamatan_perusahaan = $this->input->post('kecamatan_perusahaan');
		$kota_perusahaan = $this->input->post('kota_perusahaan');
		$provinsi_p = $this->input->post('provinsi_p');
		$kode_pos_p = $this->input->post('kode_pos_p');
		$notlp_perusahaan= $this->input->post('notlp_perusahaan');
		$stt_usaha= $this->input->post('stt_usaha');
		$thn_sttusaha = $this->input->post('thn_sttusaha');
		$siup = $this->input->post('siup');
		$tdp = $this->input->post('tdp');
		$ho = $this->input->post('ho');
		$situ = $this->input->post('situ');
		$sku = $this->input->post('sku');
		$npwp= $this->input->post('npwp');
		$nmpgang_hak= $this->input->post('nmpgang_hak');
		$lokasi_tanah= $this->input->post('lokasi_tanah');
		$luas_tanah= $this->input->post('luas_tanah');
		$no_tanah= $this->input->post('no_tanah');
		$berdiri_tahun = $this->input->post('berdiri_tahun');
		$jml_karyawan = $this->input->post('jml_karyawan');
		$jml_teng_ahli = $this->input->post('jml_teng_ahli');
		$jml_pengurus = $this->input->post('jml_pengurus');
		$rekening_koran = $this->input->post('rekening_koran');
		$nama_bank_koran = $this->input->post('nama_bank_koran');
		$alamat_bank_koran = $this->input->post('alamat_bank_koran');
		$nomer_buku_tabungan = $this->input->post('nomer_buku_tabungan');
		$nama_bank = $this->input->post('nama_bank');
		$alamat_tabungan = $this->input->post('alamat_tabungan');
		$bantuan_l = $this->input->post('bantuan_l');
		$idresi=$this->input->post('idresi');
        
       

		$data = array(
			'nama_perusahaan' => $nama_perusahaan,
			'tpemilik_koprasi' => $tpemilik_koprasi,
			'p_binaan_pk' =>$p_binaan_pk,
			'kd_binaan' => $kd_binaan,
			'bidang_usaha' => $bidang_usaha,
			'jenis_usaha' =>$jenis_usaha,
			'alamat_perusahaan' => $alamat_perusahaan,
			'kelurahan_perusahaan' => $kelurahan_perusahaan,
			'kecamatan_perusahaan' => $kecamatan_perusahaan,
			'kota_perusahaan' =>$kota_perusahaan,
			'provinsi_p' => $provinsi_p,
			'kode_pos_p' => $kode_pos_p,
			'notlp_perusahaan' =>$notlp_perusahaan,
			'upload_struk_organisasi' => $gbr,
			'stt_usaha' =>$stt_usaha,
			'thn_sttusaha' => $thn_sttusaha,
			'siup' => $siup,
			'tdp' => $tdp,
			'ho' => $ho,
			'situ' => $situ,
			'sku' => $sku,
			'npwp' => $npwp,
			'nmpgang_hak' => $nmpgang_hak,
			'lokasi_tanah' => $lokasi_tanah,
			'luas_tanah' => $luas_tanah,
			'no_tanah' => $no_tanah,
			'srs_tansi' => $gbr2,
			'berdiri_tahun' =>$berdiri_tahun,
			'jml_karyawan' => $jml_karyawan,
			'jml_teng_ahli' => $jml_teng_ahli,
			'jml_pengurus' =>$jml_pengurus,
			'rekening_koran' => $rekening_koran,
			'nama_bank_koran' =>$nama_bank_koran,
			'alamat_bank_koran' => $alamat_bank_koran,
			'nomer_buku_tabungan' => $nomer_buku_tabungan,
			'nama_bank' =>$nama_bank,
			'alamat_tabungan' => $alamat_tabungan,
			'bantuan_l' =>$bantuan_l,
			'idresi' =>$idresi
			);

	$where = array(
		'idperusahaan' => $idperusahaan
	);
 
 
$this->m_perusahaan->update_data($where,$data,'perusahaan');
		redirect('keuangan/index');
	
 
    }
    function ambil_data(){

$modul=$this->input->post('modul');
$id=$this->input->post('id');

if($modul=="kabupaten"){
echo $this->m_select->kabupaten($id);
}
else if($modul=="kecamatan"){
echo $this->m_select->kecamatan($id);

}
else if($modul=="kelurahan"){
    echo $this->m_select->kelurahan($id);
   }

}
}

?>