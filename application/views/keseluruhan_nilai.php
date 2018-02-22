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
          <a href="<?php echo base_url()."index.php/dashboard/kemitraan"; ?>">
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
            <li><a href="<?php echo base_url()."index.php/biodata"; ?>"><i class="fa fa-circle-o"></i>Permohonan cmb</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class=" fa  fa-book "></i> <span>Data Penilaian</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/penilaian/detailnilais"; ?>"><i class="fa fa-circle-o"></i>Penilaian keseluruhan</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class=" fa  fa-book "></i> <span>Proposal Masuk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/proposal_masuk/index"; ?>"><i class="fa fa-circle-o"></i>Data Proposal Masuk</a></li>

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
              <h3 class="box-title">
              <b>
              
             Parameter penilaian Administrasi Proposal
              
              </b>
              </h3>
              
            </div>
			 <div class="box-body">
			  <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->
                   <tbody>
                <?php
        
            foreach ($ceklis as $cek) {

              ?>


         <form class="form-horizontal" id="form"  method="post" enctype="multipart/form-data" >
  
         <div class="form-group">
        <label class="col-lg-3 control-label">Upload KTP</label>
		
        <div class="col-lg-4">
            <center><?php if($cek->upload_ktp != '') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
        <div class="col-lg-4">
            <center><img img width=32 height=32 src="http://localhost/pk/asset/img/<?=$cek->upload_ktp?>"></center>
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Upload KK</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->upload_kk != '') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
            <center><img img width=32 height=32 src="http://localhost/pk/asset/img/<?=$cek->upload_kk?>"></center>
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">NPWP</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->npwp != '') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
        <div class="col-lg-4">
            <center><?php echo $cek->npwp?></center>
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Surat Instansi</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->srs_tansi != '') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
           <center> <a href="http://localhost/pk/asset/img/<?=$cek->srs_tansi?>"><img width=32 height=32 src="http://localhost/pk/asset/img2/pdf.png"></a></center>
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Nama Pemegang Hak Tanah</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->nmpgang_hak != '') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
            <center><?php echo $cek->nmpgang_hak?></center>
         
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Lokasi Tanah</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->lokasi_tanah != '') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
            <center><?php echo $cek->lokasi_tanah?></center>
         
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Luas Tanah</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->luas_tanah != '') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
            <center><?php echo $cek->luas_tanah ?></center>
         
         
        </div>

    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">No Tanah</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->no_tanah != '') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
            <center><?php echo $cek->no_tanah ?></center>
         
         
        </div>
    </div>
    
</form>
<?php 
              }
                ?> 
                 </div>
          <!-- /.box -->

          <!-- /.box -->
         
          <!-- /.box -->


        </div>
        <!--/.col (right) -->
      </div>

      <!-- /.row -->
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">
              <b>
              
             Parameter penilaian Evaluasi Proposal
              
              </b>
              </h3>
              
            </div>
       <div class="box-body">
        <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->
                   <tbody>
                <?php
        
            foreach ($qry as $cek) {

              ?>


         <form class="form-horizontal" id="form"  method="post" enctype="multipart/form-data" >
  
         <div class="form-group">
        <label class="col-lg-3 control-label">Nilai Asset</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->nilai_asset > '4600000') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
        <div class="col-lg-4">
            <center><?php echo $cek->nilai_asset?></center>
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Nilai Asset Pertahun</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->nilai_asset_tahun >'9000000') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
            <center><?php echo $cek->nilai_asset_tahun?></center>
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Laba Bersih</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->laba_bersih > '500000') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
        <div class="col-lg-4">
            <center><?php echo $cek->laba_bersih?></center>
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Surat Instansi</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->srs_tansi = 'Ada') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
            <center><?php echo $cek->srs_tansie?></center>
         
        </div>
    </div>

         
    </div>
    
</form>
<?php 
              }
                ?> 
                 </div>
          <!-- /.box -->

          <!-- /.box -->
         
          <!-- /.box -->


        </div>
        <!--/.col (right) -->
      </div>
      
      <!-- /.row -->
    </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">
              <b>
              
             Parameter penilaian Evaluasi Survei
              
              </b>
              </h3>
              
            </div>
       <div class="box-body">
        <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->
                   <tbody>
                <?php
        
            foreach ($query as $cek) {

              ?>


         <form class="form-horizontal" id="form"  method="post" enctype="multipart/form-data" >
  
         <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah Asset</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->jml_asset > '600000') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
        <div class="col-lg-4">
              <center><?php echo $cek->jml_asset?></center>
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Laba Bersih</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->laba_bersih_e > '600000') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
            <<center><?php echo $cek->laba_bersih_e?></center>
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Nilai Jual Bangunan</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->bangunan > '50000000') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
        <div class="col-lg-4">
            <center><?php echo $cek->bangunan?></center>
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Nilai Jual Tanah</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->tanah > '51000000') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
             <center><?php echo $cek->tanah?></center>
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah Asset tetap</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->jml_assettetap > '40000000') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
            <center><?php echo $cek->jml_assettetap?></center>
         
         
        </div>
    </div>

         <div class="form-group">
        <label class="col-lg-3 control-label">Total Asset</label>
    
        <div class="col-lg-4">
            <center><?php if($cek->total_asset > '10000000') echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/ceklis.png">'; else echo '<img width=32 height=32 src="http://localhost/pk/asset/img2/strips.png">'; ?></center>
         
        </div>
         <div class="col-lg-4">
             <center><?php echo $cek->total_asset ?></center>
         
         
         
        </div>
    </div>
    
</form>
<?php 
              }
                ?> 
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
<!-- <script src="<?php echo base_url(); ?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script> -->
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

<!-- <script 
 src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"
 type="text/javascript"></script> -->


</body>
</html>
