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
         <li class="treeview">
          <a href="<?php echo base_url()."index.php/dashboard/surveyor"; ?>">
            <i class=" fa fa-dashboard "></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Survei Lapangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/survei3/surveilapangan"; ?>"><i class="fa fa-circle-o"></i>Survei CMB</a></li>

          </ul>
           <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/survei3/datasurvei"; ?>"><i class="fa fa-circle-o"></i>Data Survei CMB</a></li>

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
            <li><a href="<?php echo base_url()."index.php/survei1/nilai_proposal"; ?>"><i class="fa fa-circle-o"></i>Scores Proposal</a></li>

          </ul>
           <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/survei1/nilai_evaluasi"; ?>"><i class="fa fa-circle-o"></i>Scores Evaluasi</a></li>

          </ul>
           <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/survei1/nilai_evaluasi"; ?>"><i class="fa fa-circle-o"></i>Scores Survei</a></li>

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
        <?php  foreach ($query as $u) {
          # code...
        }  ?>
         <form class="form-horizontal" action="<?php echo site_url('survei3/insert'); ?>" method="post" enctype="multipart/form-data">
         <ol type="1">
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Rekening Bank</li></label>
         <div class="col-lg-3">
            <input type="text" name="bank1" class="form-control" placeholder="Nama Bank">
            <input type="text" name="idsurvei2" placeholder="Id Survei 1" id="idsurvei2" class="form-control" value="<?php echo $qry->idsurvei2?>" >
        </div>
         <div class="col-lg-3">
            <input type="text" name="no_rek" class="form-control" placeholder="No. Rek">
        </div>
        </div>
        <div class="form-group">
        <label class="col-lg-3 control-label"><li>Tempat tinggal</li></label>
        <div class="col-lg-2">
            <select name="t_tinggal" class="form-control">
          <option value="Milik Sendiri">Milik Sendiri</option>
          <option value="Kontrak">Tertinggi</option>
            </select>
        </div>
         <div class="col-lg-3">
            <input type="text" name="lama_tinggal" class="form-control" placeholder="Selama">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Tempat Usaha</li></label>
        <div class="col-lg-2">
            <select name="t_usaha" class="form-control">
          <option value="Milik Sendiri">Milik Sendiri</option>
          <option value="Kontrak">Tertinggi</option>
            </select>
        </div>
         <div class="col-lg-3">
            <input type="text" name="lama_tinggal" class="form-control" placeholder="Selama">
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jumlah yang di mohon</li></label>
          <div class="col-lg-3">
            <input type="text" name="jml_mohon" class="form-control" placeholder="Jumlah yang di mohon">
        </div>
         <div class="col-lg-3">
            <input type="text" name="penggunaan1" class="form-control" >
        </div>
         <div class="col-lg-3">
            <input type="text" name="penggunaan2" class="form-control" >
        </div>
        </div>
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Syarat minimum pinjaman</li></label>
         <div class="col-lg-3">
            <input type="text" name="syarat_minimun" class="form-control" >
        </div>
        </div>
        <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nama ahli waris</li></label>
         <div class="col-lg-3">
            <input type="text" name="nama_waris" class="form-control" >
        </div>
        <div class="col-lg-3">
            <input type="text" name="hubungan" class="form-control" >
        </div>
        </div>
        <div class="form-group">
        <label class="col-lg-3 control-label"><li>Sertifikat tanah</li></label>
         <div class="col-lg-3">
            <input type="text" name="nama_p_tanah" class="form-control" placeholder="nama_pemilik" 
            value="<?php echo $u->nmpgang_hak?>" >
        </div>
        <div class="col-lg-3">
            <input type="text" name="no_shm" class="form-control" >
        </div>
        </div>
<div class="form-group">
        <label class="col-lg-3 control-label"><li>Kelurahan/Desa</li></label>
        <div class="col-lg-4">
            <input type="text" name="klurah" class="form-control" value="<?php echo $u->nmpgang_hak?>" >
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kecamatan</li></label>
        <div class="col-lg-4">
            <input type="text" name="kcamatan" class="form-control" value="<?php echo $u->lokasi_tanah?>" >
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kota/Kabupaten</li></label>
        <div class="col-lg-4">
            <input type="text" name="ktkb" class="form-control" value="<?php echo $u->kota_perusahaan?>" >
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Provinsi</li></label>
        <div class="col-lg-3">
            <input type="text" name="provinsi" class="form-control" value="<?php echo $u->provinsi_p?>" >
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Luas tanah</li></label>
        <div class="col-lg-3">
            <input type="text" name="l_tanah" class="form-control" value="<?php echo $u->luas_tanah?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nilai Bangunan</li></label>
        <div class="col-lg-3">
            <input type="text" name="n_bangunan" class="form-control" value="<?php echo $u->bangunan2?>">
        </div>
    </div>
   <div class="form-group well">
     <label class="col-lg-2 control-label"></label>
     <div class="col-lg-5">
        <input type="submit" class="btn btn-success" value="Selanjutnya">  
    </div>
  <div class="col-lg-5">
    <?php echo anchor('survei2/edit/'.$qry->idsurvei2,'<input type="button" class="btn btn-success" value="Sebelumnya">'); ?>
    </div>
    </div>
    </ol>
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
