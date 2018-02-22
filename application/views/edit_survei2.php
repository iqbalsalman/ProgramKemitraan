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
           <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
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
        <li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
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
    </section>
	<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Evaluasi Survei</h3>
            </div>
			 <div class="box-body">
			  <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->

         <form class="form-horizontal" action="<?php echo site_url('survei2/insert'); ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label class="col-lg-3 control-label">Jenis-Jenis barang modal</label>
        <div class="col-lg-5">
            <input type="text" name="jb_modal" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Sumber Pembelian</label>
         <div class="col-lg-2">
            <select name="s_pembelian" class="form-control">
          <option value="Lokal">Lokal</option>
          <option value="Impor">Impor</option>
            </select>
        </div>
        <div class="col-lg-3">
            <input type="text" name="asal_pembelian" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Kebutuhan stok barang/bln</label>
        <div class="col-lg-3">
            <input type="text" name="k_stok_barang" class="form-control">
        </div>
         <div class="col-lg-2">
            <select name="t_stok_barang" class="form-control">
          <option value="Tunai">Tunai</option>
          <option value="Kredit">Kredit</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Kemampuan stok barang rata2</label>
        <div class="col-lg-3">
            <input type="text" name="k_stok_barang_r" class="form-control">
        </div>
         <div class="col-lg-2">
            <select name="t_stok_barang_r" class="form-control">
          <option value="Tunai">Tunai</option>
          <option value="Kredit">Kredit</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Kemampuan penjualan rata2</label>
        <div class="col-lg-3">
            <input type="text" name="k_penjualan_r" class="form-control">
        </div>
        <div class="col-lg-3">
            <input type="text" name="nilai_penjualan_r" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Penyisihan laba mengangsur rata2</label>
        <div class="col-lg-3">
            <input type="text" name="p_laba_angsur" class="form-control">
        </div>
    </div><div class="form-group">
        <label class="col-lg-3 control-label">Jenis-jenis bahan baku/bibit</label>
        <div class="col-lg-5">
            <input type="text" name="j_baku_bibit" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Sumber bahan baku/bibit</label>
        <div class="col-lg-3">
             <select name="s_baku" class="form-control">
              <option value=" ">Pilih</option>
              <option value="Lokal">Lokal</option>
              <option value="impor">Impor</option>
            </select>
        </div>
        <div class="col-lg-3">
            <input type="text" name="s_bibit" class="form-control">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Kebutuhan bahan baku/bln</label>
        <div class="col-lg-3">
            <input type="text" name="k_butuhan_baku" class="form-control">
        </div>
        <div class="col-lg-2">
            <select name="t_butuhan_baku" class="form-control">
          <option value="">Pilih</option>
          <option value="Tunai">Tunai</option>
          <option value="Kredit">Kredit</option>
            </select>
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Jenis2 bahan penolong</label>
        <div class="col-lg-3">
            <input type="text" name="j_bahan_penolong" class="form-control">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Sumber bahan penolong</label>
        <div class="col-lg-4">
            <input type="text" name="s_bahan_penolong" class="form-control">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Kebutuhan bahan penolong</label>
        <div class="col-lg-3">
            <input type="text" name="k_bahan_penolong" class="form-control">
        </div>
        <div class="col-lg-2">
            <select name="t_bahan_penolong" class="form-control">
          <option value="Tunai">Tunai</option>
          <option value="Kredit">Kredit</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Hasil Produksi</label>
        <div class="col-lg-4">
            <input type="text" name="h_peroduksi" class="form-control">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Kemampuan Produksi rata2</label>
        <div class="col-lg-4">
            <input type="text" name="k_peroduksi_rata" class="form-control">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Kemampuan Penjualan rata2</label>
        <div class="col-lg-3">
            <input type="text" name="k_penjualan_rata" class="form-control">
        </div>
         <div class="col-lg-3">
            <input type="text" name="n_penjualan_rata" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Kemampuan menyisihkan laba untuk mengangsur rata2</label>
        <div class="col-lg-3">
            <input type="text" name="k_angsur_rata" class="form-control">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Pengajuan pinjaman anggota/bln</label>
        <div class="col-lg-4">
            <input type="text" name="p_pinjaman_anggota" class="form-control">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Kemampuan pemberi pinjaman</label>
        <div class="col-lg-4">
            <input type="text" name="k_pemberi_pinjaman" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Bunga</label>
        <div class="col-lg-2">
            <input type="text" name="bunga_anggota" class="form-control">
        </div>
        <div class="col-lg-3">
            <input type="text" name="n_bunga_anggota" class="form-control">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Jangka waktu</label>
        <div class="col-lg-2">
            <input type="text" name="jangka_waktu" class="form-control">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Kemampuan menyisihkan laba untuk mengangsur rata2</label>
        <div class="col-lg-3">
            <input type="text" name="k_yisih_laba" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Pelanggan tetap</label>
        <div class="col-lg-2">
            <select name="pelanggan_tetap" class="form-control">
          <option value="Tidak ada">Tidak ada</option>
          <option value="Ada">Ada</option>
            </select>
        </div>
        <div class="col-lg-3">
            <input type="text" name="nm_pelanggan" class="form-control">
        </div>
        </div>
        <div class="form-group">
        <label class="col-lg-3 control-label">Cara Pembayaran</label>
        <div class="col-lg-2">
            <select name="c_pembayaran" class="form-control">
          <option value="Tunai">Tunai</option>
          <option value="Kredit">Kredit</option>
            </select>
        </div>
        <div class="col-lg-2">
            <select name="bn_bayar" class="form-control">
          <option value="Perhari">Perhari</option>
          <option value="Minggu">Minggu</option>
           <option value="Bulan">Bulan</option>
            </select>
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Pengiriman produk</label>
        <div class="col-lg-2">
            <select name="c_pengiriman" class="form-control">
          <option value="Dikirim">Dikirim</option>
          <option value="diambil">diambil</option>
            </select>
        </div>
        </div>
        <div class="form-group">
        <label class="col-lg-3 control-label">Wilayah pemasaran</label>
        <div class="col-lg-3">
            <select name="w_pasaran" class="form-control">
          <option value="Lokal">Lokal</option>
          <option value="Regional">regional</option>
           <option value="Nasional">Nasional</option>
          <option value="Internasional/ekspor">Internasional/ekspor</option>
            </select>
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Kemitraan/ kerjasa,a dengan assosiasi, perusahaan, lain-lain</label>
         <div class="col-lg-3">
            <input type="text" name="kemitraan_assosiasi1" class="form-control">
        </div>
        <div class="col-lg-3">
            <input type="text" name="kemitraan_assosiasi2" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Data tenaga kerja</label>
       <div class="col-lg-3">
            <input type="text" name="jml_pegawai" class="form-control">
        </div>
        </div>
        <div class="form-group">
        <label class="col-lg-3 control-label">Tingkat Keterampilan</label>
       <div class="col-lg-2">
            <input type="text" name="t_ahli" class="form-control" placeholder="Ahli">
        </div>
          <div class="col-lg-2">
            <input type="text" name="t_sedang" class="form-control" placeholder="Sedang">
        </div>
        <div class="col-lg-2">
            <input type="text" name="t_kurang" class="form-control" placeholder="Kurang">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Usia</label>
        <div class="col-lg-3">
            <select name="c_orang" class="form-control">
          <option value="dibawah 17 tahun">dibawah 17 tahun</option>
          <option value="17-25 tahun">17-25 tahun</option>
          <option value="25 tahun keatas">25 tahun keatas</option>
            </select>
        </div>
        <div class="col-lg-3">
            <input type="text" name="jml_orang" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Upah</label>
        <div class="col-lg-3">
            <input type="text" name="upah_rendah" class="form-control" placeholder="Upah Terendah">
        </div>
         <div class="col-lg-3">
            <input type="text" name="upah_tinggi" class="form-control" placeholder="Tertinggi">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Cara memperoleh</label>
        <div class="col-lg-3">
            <select name="c_memperoleh" class="form-control">
            <option value=" ">Pilih</option>
          <option value="Masyarakat sekitar">Masyarakat sekitar</option>
          <option value="diluar wilayah usaha">diluar wilayah usaha</option>
            </select>
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah Pengurus</label>
         <div class="col-lg-2">
            <input type="text" name="jml_pengurus" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah anggota</label>
         <div class="col-lg-2">
            <input type="text" name="jml_anggota" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Manajemen</label>
         <div class="col-lg-3">
            <input type="text" name="manajemen_p" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Produksi</label>
         <div class="col-lg-3">
            <input type="text" name="ke_produksi" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Pemasaran produk</label>
         <div class="col-lg-3">
            <input type="text" name="pemasaran_produk" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Keuangan</label>
         <div class="col-lg-3">
            <input type="text" name="keuangan" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Pesaing</label>
         <div class="col-lg-3">
            <input type="text" name="pesaing" class="form-control">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Langkah2 yang telah dilakukan sebelum pengajukan pinjaman ke Perum Peruri</label>
         <div class="col-lg-4">
         <select name="langkah_dilakukan" class="form-control">
          <option value="Pinjaman kepada bank / Pihak ke III">Pinjaman kepada bank / Pihak ke III</option>
          <option value="Menggunakan modal yang ada">Menggunakan modal yang ada</option>
            </select>
        </div>
         <div class="col-lg-3">
            <input type="text" name="langkah_lainnya" class="form-control" placeholder="Lainya">
        </div>
        </div>
        <div class="form-group well">
     <label class="col-lg-2 control-label"></label>
     <div class="col-lg-5">
        <input type="submit" class="btn btn-success" value="Selanjutnya">  
    </div>
    <div class="col-lg-5">
    <?php echo anchor('survei1/edit/'.$qry->idsurvei1,'<input type="button" class="btn btn-success" value="Sebelumnya">'); ?>
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
	  </div>
      <!-- /.row (main row) -->
	  

    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>

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
        $('#tgl_anggaran').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });
		 $(document).ready(function(){
        $('#tgl_berlaku').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
				changeMonth : true,
				changeYear : true,
				minDate: +1, 
				maxDate: "+2D"
        });
    });
		 $(document).ready(function(){
        $('#thn_binaan').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
				changeMonth : true,
				changeYear : true,
				minDate: +1, 
				maxDate: "+2D"
        });
    });
      $(document).ready(function(){
        $('#sls_bina').Zebra_DatePicker({
       
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
