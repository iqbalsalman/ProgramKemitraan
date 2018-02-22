<!DOCTYPE html>
<?php
 if(!$this->session->userdata('username')){
            echo '<script type="text/javascript">window.alert("Maaf anda harus Login Terlebih dahulu!")
            window.location.href="login";</script>';
        }
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Program Kemitraan PKBL Perum Peruri</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/dist/css/skins/_all-skins.min.css">
   <script src="<?php echo base_url(); ?>asset/lib/jquery.min.js"></script>
   <script src="<?php echo base_url(); ?>asset/lib/zebra_datepicker.js"></script>
  <script src="<?php echo base_url(); ?>asset/jquery/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/lib/css/default.css">
  <script type="text/javascript">
     $(document).ready(function(){
        $('#p_binaan_pk').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });
     $(document).ready(function(){
        $('#tahun_usaha1').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });
   $(document).ready(function(){
        $('#tahun_usaha2').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });
  </script>
  <script type="text/javascript">
       $(document).ready(function() {
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });

       $("#form").validate({
        
            rules: {
          
        pengunaan_teknologi:{ 
             required: true,
          },
        desaint:{ 
             required: true,
          },
        kualitas : {
            required : true,
          },

        bahan_baku_penolong : {
            required : true,
          },
        smb_bahan_baku : {
            required : true,
          },
        terdaftar_jamsostek: {
            required : true,
          },
        konsumen : {
          required : true,
        }
      },
        // messages: {
         
        // nama:{ 
        //      required: "Nama Lengkap (sesuai KTP) wajib diisi",
        //   },
        // ta_lahir:{ 
        //      required: "Tempat wajib diisi",
        //   },
        //   tgl_l : {
        //     required : "Tanggal Lahir wajib diisi",
        //   },

        //   jenis_kelamin : {
        //     required : "Jenis kelamin wajib diisi",
        //   },
        //   status_kawin : {
        //     required : "Status perkawinan wajib diisi",
        //   },
        //   pekerjaan : {
        //     required : "Pekerjaan wajib diisi",
        //   },
        // pendidikan_f : {
        //   required : "Pendidikan formal wajib diisi",
        //     }

        // }
     });
    })($);
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>K</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Program</b>Kemitraan</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="#">Lihat Semua Notifikasi</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username'); ?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo site_url('dashboard/logout'); ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="treeview">
          <a href="<?php echo base_url()."index.php/dashboard/evaluator"; ?>">
            <i class=" fa fa-dashboard "></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Permohonan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/biodata/proposal"; ?>"><i class="fa fa-circle-o"></i>Permohonan cmb</a></li>

          </ul>
        </li>
             <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Data UKM</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/evaluasi/dataukm"; ?>"><i class="fa fa-circle-o"></i>Data UKM</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Evaluasi Proposal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/evaluasi/evaluasi"; ?>"><i class="fa fa-circle-o"></i>Evaluasi Proposal</a></li>

          </ul>
           <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/evaluasi/data"; ?>"><i class="fa fa-circle-o"></i>Data Evaluasi Proposal</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Scores</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/evaluasi/proposal_score"; ?>"><i class="fa fa-circle-o"></i>Data Proposal</a></li>

          </ul>
           <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/evaluasi/evaluasi_score"; ?>"><i class="fa fa-circle-o"></i>Data Evaluasi Proposal</a></li>

          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b> V Kegitan Usaha </b></h3>
               <h5><p> <font color="red"> Wajib*</font></p></h5>
            </div>
       <div class="box-body">
        <?=$this->session->flashdata('pesan')?>
          
          
        <form class="form-horizontal"  id="form" action="<?php echo site_url('usaha/insert'); ?>" method="post" enctype="multipart/form-data">
         <ol type="1">
         <div class="form-group">
          <label class="col-lg-3 control-label"><li><b><dt>Produksi</b></dt></li></label>
          </div>
           <ol type="a">
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jenis Produksi</li></label>
        <div class="col-lg-4">
        <?php    foreach($query as $u){  ?>
            <input type="hidden" name="idpendapatan" class="form-control" value="<?php echo $u->idpendapatan ?>" >
          <?php } ?>
            <input type="text" name="jenis_produksi"  class="form-control">
        </div>
    </div>
   
    <div class="form-group">
        <label class="col-lg-3 control-label" ><li>Kapasitas/jumlah Produksi</li></label>
        <div class="col-lg-4">
            <input type="text" name="kapasitas"  id="kapasitas" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Bahan Baku yang digunakan </li></label>
     <div class="col-lg-3">
            <input type="text" name="bahan_baku_produksi"  id="bahan_baku_produksi" class="form-control">
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Alat Produksi yang dipakaia </li></label>
        <div class="col-lg-3">
            <input type="text" name="alat_produksi" placeholder="Bahan Baku yang digunakan" id="bahan_baku_produksi" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Penggunaan Teknologi<font color="red">*</font> </li></label>
     <div class="col-lg-3">
            <select name="pengunaan_teknologi" class="form-control" id="pengunaan_teknologi">
          <option value="" >Jenis teknologi</option>
          <option value="otomatis">Otomatis</option>
          <option value="semi otomatis">semi otomatis</option>
           <option value="tradisional">tradisionil</option>
            </select>
        </div>
        <div style="color: red;" id="invalid-pengunaan_teknologi" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Desaint<font color="red">*</font> </li></label>
     <div class="col-lg-2">
            <select name="desaint" class="form-control" id="desaint">
        <option value="">Desaint</option>
        <option value="selera sendiri">selera sendiri</option>
        <option value="pasar">pasar</option>
        <option value="keduanya">keduanya</option>
            </select>
        </div>
        <div style="color: red;" id="invalid-desaint" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kualita<font color="red">*</font> </li></label>
     <div class="col-lg-2">
            <select name="kualitas" class="form-control" id="kualitas">
          <option value="">Kualitas</option>
          <option value="lokal">lokal</option>
          <option value="nasional">nasional</option>
           <option value="ekspor">ekspor</option>
            </select>
        </div>
        <div style="color: red;" id="invalid-kualitas" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Bahan baku / penolong<font color="red">*</font></li></label>
     <div class="col-lg-3">
            <select name="bahan_baku_penolong" class="form-control" id="bahan_baku_penolong">
        <option value="">Bahan Baku</option>
        <option value="mudah">mudah</option>
        <option value="sulit didapat">sulit didapat</option>
            </select>
        </div>
      <div style="color: red;" id="invalid-bahan_baku_penolong" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Sumber Bahan Baku<font color="red">*</font></li></label>
     <div class="col-lg-3">
            <select name="smb_bahan_baku" class="form-control" id="smb_bahan_baku">
        <option value="">Sumber Bahan Baku</option>
        <option value="lokal">lokal</option>
        <option value="import">import</option>
            </select>
        </div>
        <div style="color: red;" id="invalid-smb_bahan_baku" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kebutuhan bahan baku/bln </li></label>
        <div class="col-lg-3">
            <input type="text" name="kebutuhan_bahan_baku" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Omset / bln </li></label>
        <div class="col-lg-3">
            <input type="text" name="omset" class="form-control">
        </div>
    </div>
    </ol>
     <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Non Produksi</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jenis Usaha</li></label>
        <div class="col-lg-3">
            <input type="text" name="usaha_non_produksi" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>omset / bln</li></label>
        <div class="col-lg-2">
            <input type="text" name="omset_non_produksi" class="form-control">
        </div>
    </div>
    </ol>
     <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Tenaga kerja (saat ini)</b></li></label>
          </div>
           <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jumlah tenaga kerja</li></label>
        <div class="col-lg-2">
            <input type="text" name="jml_tenaga_kerja" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pendidikan</li></label>
     <div class="col-lg-3">
            <select name="pendidikan" class="form-control">
                <option selected="selected" >Pendidikan Terakhir</option>
          <option value="Sarjana">Sarjana</option>
          <option value="SLTA">SLTA</option>
          <option value="SLTP">SLTP</option>
          <option value="SD">SD</option>
            </select>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jumlah tenaga ahli bidang perbengkelan</li></label>
       <div class="col-lg-3">
            <input type="text" name="jml_tng_ahli" class="form-control">
        </div> 
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pendidikan / kursus/ pelatihan yang diikuti oleh karyawan</li></label>
         <div class="col-lg-3">
            <input type="text" name="kursus" class="form-control">
        </div> 
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jam kerja karyawan / hari</li></label>
        <div class="col-lg-2">
            <input type="text" name="jama_kerja" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Upah rata-rata/hari (diluar lembur)</li> </label>
    <div class="col-lg-3">
            <input type="text" name="upah_rata" class="form-control">
        </div>
     </div>

  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Upah lembur / hari</li></label>
        <div class="col-lg-3">
            <input type="text" name="upah_lembur" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Terdaftar pada jam sostek<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <select name="terdaftar_jamsostek" class="form-control" id="terdaftar_jamsostek">
           <option value="" >Daftar Jamsostek</option>
          <option value="Sudah">Sudah</option>
          <option value="Belum">Belum</option>
            </select>
        </div>
        <div style="color: red;" id="invalid-terdaftar_jamsostek" class="error_msg"></div>
    </div>
    </ol>

    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Pemasaran (saat ini)</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Konsumen<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <select name="konsumen" class="form-control" id="konsumen">
          <option value="" >Konsumen</option>
          <option value="anggota">anggota</option>
          <option value="umum">umum</option>
           <option value="perusahaan">perusahaan</option>
            </select>
        </div>
        <div style="color: red;" id="invalid-konsumen" class="error_msg"></div>
    </div>
    <div class="form-group">
    <label class="col-lg-3 control-label"><li>Daerah Pemasaran Ke<li></label>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Lokal (setempat)</li></label>
        <div class="col-lg-3">
            <input type="text" name="lokal_s" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Region (antar Kota/Kab)</li></label>
        <div class="col-lg-3">
            <input type="text" name="regions" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nasional (antar Provinsi)</li></label>
        <div class="col-lg-3">
            <input type="text" name="nasional_p" placeholder="Nasional (antar Provinsi)" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Ekspor (internasional)</li></label>
       <div class="col-lg-3">
            <input type="text" name="ekspor_i" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Distribusi<font color="red">*</font></li></label>
    <div class="col-lg-3">
            <select name="distribusi" class="form-control">
                      <option selected="selected" >Distribusi</option>
            <option value="Langsung">Langsung</option>
            <option value="Dengan perantara">Dengan perantara</option>
            </select>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Sistim Pembayaran</li></label>
    <div class="col-lg-3">
            <select name="sistem_pembayaran" class="form-control">
             <option selected="selected" >Sistim Pembayaran</option>
        <option value="Tunai">Tunai</option>
        <option value="Kredit">Kredit</option>
        <option value="Cek Mundur">Cek Mundur</option>
        <option value="Lain-lain">Lain-lain</option>
            </select>
        </div>
    </div>
    </ol>
    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Perkembangan usaha 2 tahun terakhir</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Perkembangan Usaha 2 Tahun terakhir</li></label>
       <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="tahun_usaha1" name="tahun_usaha1" >
                </div>
        </div>  
    <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="tahun_usaha2" name="tahun_usaha2" >
                </div>
        </div>  
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Tenaga Kerja</li></label>
       <div class="col-lg-2">
            <input type="text" name="tenaga_kerja1" class="form-control">
        </div>
    <div class="col-lg-2">
            <input type="text" name="tenaga_kerja2" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Produksi / bulan </li></label>
       <div class="col-lg-3">
            <input type="text" name="produksi1" class="form-control">
        </div>
    <div class="col-lg-3">
            <input type="text" name="produksi2" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Omset rata-rata / bulan</li></label>
       <div class="col-lg-3">
            <input type="text" name="omset_rata1" class="form-control">
        </div>
    <div class="col-lg-3">
            <input type="text" name="omset_rata2" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Tabungan / bulan</li></label>
       <div class="col-lg-3">
            <input type="text" name="tabungan1" class="form-control">
        </div>
    <div class="col-lg-3">
            <input type="text" name="tabungan2" class="form-control">
        </div>
    </div>
    </ol>
    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Masalah yang dihadapi</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Manajemen</li></label>
       <div class="col-lg-4">
            <input type="text" name="m_manajemen" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Produksi</li></label>
       <div class="col-lg-4">
            <input type="text" name="m_produksi" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pemasaran Produk</li></label>
       <div class="col-lg-4">
            <input type="text" name="pemasaran_produk" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Penjualan</li></label>
       <div class="col-lg-4">
            <input type="text" name="penjuplan" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Keuangan</li></label>
       <div class="col-lg-4">
            <input type="text" name="keuangan" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Lain-lain</li></label>
       <div class="col-lg-4">
            <input type="text" name="m_lain" class="form-control">
        </div>
    </div>
    </ol>
    <div class="form-group">
          <label class="col-lg-3 control-label"><h4 class="box-title"><b>VI. Bantuan Pinjaman</b></h4></label>
          </div>
           <ol type="1">
             <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Kebutuhan</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jumlah bantuan pinjaman yang dimohon</li></label>
       <div class="col-lg-4">
            <input type="text" name="jml_bantuan_pinajaman" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Modal Kerja</li></label>
       <div class="col-lg-4">
            <input type="text" name="modal_kerja" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Investasi</li></label>
       <div class="col-lg-4">
            <input type="text" name="investasi" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Dana yang tersedia</li></label>
       <div class="col-lg-4">
            <input type="text" name="dana_tersedia" class="form-control">
        </div>
    </div>
    </ol>
      <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Prospek usaha bila telah mendapatkan bantuan</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Prospek usaha</li></label>
       <div class="col-lg-4">
            <input type="text" name="prospek_dana" class="form-control">
        </div>
    </div>
    </ol>
    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Kesanggupan membayar pinjaman</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kesanggupan Mengangsur</li></label>
       <div class="col-lg-4">
            <input type="text" name="kasanggupan_angsuran" class="form-control">
        </div>
    </div>
    </ol>
    </ol>
   <div class="form-group well">
     <label class="col-lg-2 control-label"></label>
     <div class="col-lg-5">
        <input type="submit" class="btn btn-success" value="Selanjutnya">  
    </div>
  <div class="col-lg-5">
    <?php echo anchor('pendapatan/edit/'.$qry->idpendapatan,'<input type="button" class="btn btn-success" value="Sebelumnya">'); ?>
    </div>
    </div>
</form>
          </div>
          <!-- /.box -->

          <!-- /.box -->
         
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    

    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
</body>
</html>
