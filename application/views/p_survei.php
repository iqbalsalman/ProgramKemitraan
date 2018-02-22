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
  <script>
    $(document).ready(function() {
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });

       $("#form").validate({
        
            rules: {
          
        bsd : {
          required : true,
        },
        status_tinggal : {
          required : true,
        },
        pendidikan_f : {
          required : true,
        }
      },
       
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
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Survei Lapangan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/survei1/survei"; ?>"><i class="fa fa-circle-o"></i>Survei CMB</a></li>

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
              
              Penilai Evaluasi
              
              </b>
              </h3>
                <h5><p> <font color="red"> Wajib*</font></p></h5>
            </div>
			 <div class="box-body">
			  <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->

         <form class="form-horizontal" id="form" action="<?php echo site_url('penilaian/update_s'); ?>" method="post" enctype="multipart/form-data" >
          <?php foreach ($qry as $u) {  ?>
          <div class="form-group">
        <label class="col-lg-3 control-label">Perkiraan dana<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text"  class="form-control" value="<?php echo  $u->perkiraan_dana?>" >
        </div>
    </div>
          <div class="form-group">
        <label class="col-lg-3 control-label">Asset Lancar<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text"  class="form-control" value="<?php echo  $u->jml_asset?>" >
        </div>
    </div>
          <div class="form-group">
        <label class="col-lg-3 control-label">Laba Kotor<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text"  class="form-control" value="<?php echo  $u->jml_hpp?>" >
        </div>
    </div>
          <div class="form-group">
        <label class="col-lg-3 control-label">Laba Bersih<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text"  class="form-control" value="<?php echo  $u->laba_bersih_e?>" >
             <input type="hidden" name="idkegiatanusaha"  class="form-control" id="idkegiatanusaha" value="<?php echo $u->idkegitanusaha?>" >
             <input type="hidden" name="idpenilaian"  class="form-control" id="idpenilaian" value="<?php echo $u->idkegitanusaha?>" >
             <input type="hidden" name="idevaluasi"  class="form-control" id="idevaluasi" value="<?php echo $u->idevaluasi?>" >
             <input type="hidden" name="idsurvei3" class="form-control" value="<?php echo $u->idsurvei3?>">
        </div>
    </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Status<font color="red">*</font></label>
        <div class="col-lg-2">
            <select name="status" class="form-control" id="status">
                 <option value="">--pilih--</option>
                <option value="Dibantu">Dibantu</option>
                <option value="Ditunda">Ditunda</option>
            </select>
            <div style="color: red;" id="invalid-status" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Alasan<font color="red">*</font></label>
        <div class="col-lg-6">
            <input type="text" name="catatan"  class="form-control" id="catatan" >
            <div style="color: red;" id="invalid-catatan" class="error_msg"></div>
        </div>
    </div>
    <?php } ?>
    <div class="form-group well">
	   <label class="col-lg-2 control-label"></label>
	   <div class="col-lg-5">
        <input type="submit" class="btn btn-success" value="Selanjutnya">  
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
