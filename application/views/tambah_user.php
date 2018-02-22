<?php
if (!$this->session->userdata('username')) {
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
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/lib/css/default.css">
  <script type="text/javascript">
     $(document).ready(function(){
        $('#tgl_l').Zebra_DatePicker({

                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1,
        maxDate: "+2D"
        });
    });
     $(document).ready(function(){
        $('#bsd').Zebra_DatePicker({

                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1,
        maxDate: "+2D"
        });
    });
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
          <a href="<?php echo base_url() . "index.php/dashboard/home"; ?>">
            <i class=" fa fa-dashboard "></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() . "index.php/akun/index"; ?>"><i class="fa fa-circle-o"></i> Data Akun User</a></li>

          </ul>
            <ul class="treeview-menu">
            <li><a href="<?php echo base_url() . "index.php/akun/petugas"; ?>"><i class="fa fa-circle-o"></i> Data Akun Petugas</a></li>

          </ul>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() . "index.php/akun/users"; ?>"><i class="fa fa-circle-o"></i> Tambah user</a></li>

          </ul>
        </li>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-users"></i> <span>Petugas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url() . "index.php/petugas/tambah_petugas"; ?>"><i class="fa fa-circle-o"></i>Tambah Petugas</a></li>

          </ul>
           <ul class="treeview-menu">
            <li><a href="<?php echo base_url() . "index.php/petugas/index"; ?>"><i class="fa fa-circle-o"></i>Data Petugas</a></li>

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
              <h3 class="box-title">Tambah User Petugas PKBL</h3>
            </div>
			 <div class="box-body">
			  <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->

         <form class="form-horizontal" action="<?php echo site_url('akun/insert'); ?>" method="post" enctype="multipart/form-data">
         <div class="form-group">
        <label class="col-lg-3 control-label">Nama Lengkap</label>

        <div class="col-lg-3">
            <input type="text" name="username" placeholder="Nama Lengkap" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Password</label>
        <div class="col-lg-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Email</label>

        <div class="col-lg-3">
            <input type="text" name="email" placeholder="email" class="form-control"  >
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Hak Akses User</label>
        <div class="col-lg-2">
        <select name="jenis_akses" class="form-control" id="jenis_akses">
        <option value=" ">Pilih Hak Akses</option>
        <option value="sekertariat">Sekertariat</option>
        <option value="kepala_pkbl">Kepala PKBL</option>
        <option value="evaluator">Evaluator</option>
        <option value="surveyor">Surveyor</option>
         </select>
         </div>
    </div>
    <div class="form-group well">
	   <label class="col-lg-2 control-label"></label>
	   <div class="col-lg-5">
        <input type="submit" class="btn btn-success" value="Simpan">
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
