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
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/lib/css/default.css">
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
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
  <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
       <div class="box-body">
        <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->
              <?php foreach ($query as $u) {  ?>
               
              
             <form class="form-horizontal" action="<?php echo site_url('usaha/update'); ?>" method="post" enctype="multipart/form-data">
         <div class="form-group">
        <label class="col-lg-3 control-label">Jenis Produksi</label>
    
        <div class="col-lg-4">
             <input   type="hidden" name="idkegitanusaha" class="form-control"  value="<?php echo $u->idkegitanusaha ?>"  >
            <input type="text" name="jenis_produksi"  class="form-control"  value="<?php echo $u->jenis_produksi  ?>" >
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" >Kapasitas/jumlah Produksi</label>
        <div class="col-lg-4">
            <input type="text" name="kapasitas" class="form-control" value="<?php echo $u->kapasitas  ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Bahan Baku yang digunakan</label>
     <div class="col-lg-3">
            <input type="text" name="bahan_baku_produksi"  id="bahan_baku_produksi" class="form-control" value="<?php echo $u->bahan_baku_produksi ?>">
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label">Alat Produksi yang dipakaia</label>
        <div class="col-lg-3">
            <input type="text" name="alat_produksi" class="form-control" value="<?php echo $u->bahan_baku_produksi ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Penggunaan Teknologi</label>
     <div class="col-lg-2">
            <select name="pengunaan_teknologi" class="form-control" value="<?php echo $u->pengunaan_teknologi?>">
                <option selected="selected" >Jenis teknologi</option>
          <option value="otomatis">Otomatis</option>
          <option value="semi otomatis">semi otomatis</option>
           <option value="tradisional">tradisionil</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Desaint</label>
     <div class="col-lg-2">
            <select name="desaint" class="form-control"  value="<?php echo $u->desaint?>">
                <option selected="selected" >Desaint</option>
        <option value="selera sendiri">selera sendiri</option>
        <option value="pasar">pasar</option>
        <option value="keduanya">keduanya</option>
            </select>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Kualita</label>
     <div class="col-lg-2">
            <select name="kualitas" class="form-control"  value="<?php echo $u->kualitas?>">
                <option selected="selected" >Kualitas</option>
          <option value="lokal">lokal</option>
          <option value="nasional">nasional</option>
           <option value="ekspor">ekspor</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Bahan baku / penolong</label>
     <div class="col-lg-2">
            <select name="bahan_baku_penolong" class="form-control"  value="<?php echo $u->bahan_baku_penolong?>">
                <option selected="selected" >Bahan baku</option>
        <option value="lokal">lokal</option>
        <option value="import">import</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Kebutuhan bahan baku/bln</label>
        <div class="col-lg-3">
            <input type="text" name="kebutuhan_bahan_baku" class="form-control" value="<?php echo $u->kebutuhan_bahan_baku?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Omset / bln</label>
        <div class="col-lg-3">
            <input type="text" name="omset" class="form-control" value="<?php echo $u->omset?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jenis Usaha</label>
        <div class="col-lg-3">
            <input type="text" name="usaha_non_produksi" class="form-control" value="<?php echo $u->usaha_non_produksi?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">omset / bln</label>
        <div class="col-lg-2">
            <input type="text" name="omset_non_produksi" class="form-control" value="<?php echo $u->omset_non_produksi?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah tenaga kerja</label>
        <div class="col-lg-2">
            <input type="text" name="jml_tenaga_kerja" class="form-control" value="<?php echo $u->jml_tenaga_kerja?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Pendidikan</label>
     <div class="col-lg-3">
            <select name="pendidikan" class="form-control" value="<?php echo $u->pendidikan?>">
                <option selected="selected" >Pendidikan Terakhir</option>
          <option value="Sarjana">Sarjana</option>
          <option value="SLTA">SLTA</option>
          <option value="SLTP">SLTP</option>
          <option value="SD">SD</option>
            </select>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah tenaga ahli bidang perbengkelan</label>
       <div class="col-lg-3">
            <input type="text" name="jml_tng_ahli" class="form-control" value="<?php echo $u->jml_tng_ahli?>">
        </div> 
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Pendidikan / kursus/ pelatihan yang diikuti oleh karyawan</label>
         <div class="col-lg-3">
            <input type="text" name="kursus" class="form-control" value="<?php echo $u->kursus?>">
        </div> 
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label">Jam kerja karyawan / hari</label>
        <div class="col-lg-2">
            <input type="text" name="jama_kerja" class="form-control" value="<?php echo $u->jama_kerja?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Upah rata-rata/hari (diluar lembur)</label>
    <div class="col-lg-3">
            <input type="text" name="upah_rata" class="form-control" value="<?php echo $u->upah_rata?>">
        </div>
     </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Upah lembur / hari</label>
        <div class="col-lg-3">
            <input type="text" name="upah_lembur" class="form-control" value="<?php echo $u->upah_lembur?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Terdaftar pada jam sostek</label>
        <div class="col-lg-3">
            <select name="terdaftar_jamsostek" class="form-control" value="<?php echo $u->terdaftar_jamsostek?>">
                  <option selected="selected" >Daftar Jamsostek</option>
          <option value="Sudah">Sudah</option>
          <option value="Belum">Belum</option>
            </select>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Konsumen</label>
        <div class="col-lg-3">
            <select name="konsumen" class="form-control" value="<?php echo $u->konsumen?>">
                   <option selected="selected" >Konsumen</option>
          <option value="anggota">anggota</option>
          <option value="umum">umum</option>
           <option value="perusahaan">perusahaan</option>
            </select>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Lokal (setempat)</label>
        <div class="col-lg-3">
            <input type="text" name="lokal_s" class="form-control" value="<?php echo $u->lokal_s?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Region (antar Kota/Kab)</label>
        <div class="col-lg-3">
            <input type="text" name="regions" class="form-control" value="<?php echo $u->regions?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Nasional (antar Provinsi)</label>
        <div class="col-lg-3">
            <input type="text" name="nasional_p" class="form-control" value="<?php echo $u->nasional_p?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Ekspor (internasional)</label>
       <div class="col-lg-3">
            <input type="text" name="ekspor_i" class="form-control" value="<?php echo $u->ekspor_i?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Distribusi</label>
    <div class="col-lg-3">
            <select name="distribusi" class="form-control" value="<?php echo $u->distribusi?>">
                      <option selected="selected" >Distribusi</option>
            <option value="Langsung">Langsung</option>
            <option value="Dengan perantara">Dengan perantara</option>
            </select>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sistim Pembayaran</label>
    <div class="col-lg-3">
            <select name="sistem_pembayaran" class="form-control" value="<?php echo $u->sistem_pembayaran?>">
             <option selected="selected" >Sistim Pembayaran</option>
        <option value="Tunai">Tunai</option>
        <option value="Kredit">Kredit</option>
        <option value="Cek Mundur">Cek Mundur</option>
        <option value="Lain-lain">Lain-lain</option>
            </select>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Perkembangan Usaha 2 Tahun terakhir</label>
       <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right" name="tahun_usaha1" id="tahun_usaha1" value="<?php echo $u->tahun_usaha1?>">
                </div>
        </div>  
    <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  name="tahun_usaha2" id="tahun_usaha2" value="<?php echo $u->tahun_usaha2?>">
                </div>
        </div>  
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Tenaga Kerja</label>
       <div class="col-lg-2">
            <input type="text" name="tenaga_kerja1" class="form-control"  value="<?php echo $u->tenaga_kerja1?>">
        </div>
    <div class="col-lg-2">
            <input type="text" name="tenaga_kerja2" class="form-control"  value="<?php echo $u->tenaga_kerja2?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Produksi / bulan </label>
       <div class="col-lg-3">
            <input type="text" name="produksi1" class="form-control" value="<?php echo $u->produksi1?>">
        </div>
    <div class="col-lg-3">
            <input type="text" name="produksi2" class="form-control" value="<?php echo $u->produksi2?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Omset rata-rata / bulan</label>
       <div class="col-lg-3">
            <input type="text" name="omset_rata1" class="form-control" value="<?php echo $u->omset_rata1?>">
        </div>
    <div class="col-lg-3">
            <input type="text" name="omset_rata2" class="form-control" value="<?php echo $u->omset_rata2?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Tabungan / bulan</label>
       <div class="col-lg-3">
            <input type="text" name="tabungan1" class="form-control" value="<?php echo $u->tabungan1?>">
        </div>
    <div class="col-lg-3">
            <input type="text" name="tabungan2" class="form-control" value="<?php echo $u->tabungan2?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Manajemen</label>
       <div class="col-lg-4">
            <input type="text" name="m_manajemen" class="form-control" value="<?php echo $u->m_manajemen?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Produksi</label>
       <div class="col-lg-4">
            <input type="text" name="m_produksi" class="form-control" value="<?php echo $u->m_produksi?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Pemasaran Produk</label>
       <div class="col-lg-4">
            <input type="text" name="pemasaran_produk" class="form-control" value="<?php echo $u->pemasaran_produk?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Penjualan</label>
       <div class="col-lg-4">
            <input type="text" name="penjuplan" class="form-control" value="<?php echo $u->penjuplan?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Keuangan</label>
       <div class="col-lg-4">
            <input type="text" name="keuangan" class="form-control" value="<?php echo $u->keuangan?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Lain-lain</label>
       <div class="col-lg-4">
            <input type="text" name="m_lain" class="form-control" value="<?php echo $u->m_lain?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah bantuan pinjaman yang dimohon</label>
       <div class="col-lg-4">
            <input type="text" name="jml_bantuan_pinajaman" class="form-control" value="<?php echo $u->jml_bantuan_pinajaman?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Modal Kerja</label>
       <div class="col-lg-4">
            <input type="text" name="modal_kerja" class="form-control" value="<?php echo $u->modal_kerja?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Investasi</label>
       <div class="col-lg-4">
            <input type="text" name="investasi" class="form-control" value="<?php echo $u->investasi?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Dana yang tersedia</label>
       <div class="col-lg-4">
            <input type="text" name="dana_tersedia" class="form-control" value="<?php echo $u->dana_tersedia?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Prospek usaha bila telah mendapatkan bantuan</label>
       <div class="col-lg-4">
            <input type="text" name="prospek_dana" class="form-control" value="<?php echo $u->prospek_dana?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Kesanggupan Mengangsur</label>
       <div class="col-lg-4">
            <input type="text" name="kasanggupan_angsuran" class="form-control" value="<?php echo $u->kasanggupan_angsuran?>">
        </div>
    </div>
    <div class="form-group well">
        <input type="submit" class="btn btn-success" value="Simpan">
    </div>
</form>
<?php } ?>
         
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

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>asset/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>asset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>asset/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>asset/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>asset/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>asset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>asset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>asset/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
<script src="<?php echo base_url(); ?>asset/lib/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>asset/lib/zebra_datepicker.js"></script>

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

  
</body>
</html>
