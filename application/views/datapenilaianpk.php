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
          <a href="<?php echo base_url()."index.php/dashboard/kepala_pkbl"; ?>">
            <i class=" fa fa-dashboard "></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class=" fa  fa-book "></i> <span>Penjadwalan Survei</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/penjadwalan/penjadwalan"; ?>"><i class="fa fa-circle-o"></i>Penjadwalan Survei</a></li>

          </ul>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/penjadwalan/index"; ?>"><i class="fa fa-circle-o"></i>Data Penjadwalan</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Daftar Calon Mintra Binaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/penilaian/datapenilaian"; ?>"><i class="fa fa-circle-o"></i>aprovel Pinjaman</a></li>
          </ul>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/aprovel/index"; ?>"><i class="fa fa-circle-o"></i>Data dana yang disetujui</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i> <span>Penetapan Mitra Binaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/penilaian/mitrabinaan"; ?>"><i class="fa fa-circle-o"></i>Penetapan Mitra Binaan</a></li>
          </ul>
        </li>
        </ul>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
	<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Status Calon Mitra Binaan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
		       	<?=$this->session->flashdata('pesan')?>
              <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
					              <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th>Catatan</th>
						<th style='text-align:center;'>Action</th>
                      </tr>
                    </thead>
                    <tbody>
	                 <?php
						$nomer=0;
						foreach ($qry as $data) {
								$nomer++;
								?>
					            <tr>
                      <td><?php echo $nomer ?></td>
                       <td><?php echo $data->nm_pemilik?></td>
                      <td><?php echo $data->n_ktp?></td>
                      <td><?php echo $data->alamat_usaha?></td>
					            <td><?php echo $data->status?></td>
								      <td><?php echo $data->catatan?></td>
								<td>
                <center>
                  <?php echo anchor('aprovel/persetujuan/'.$data->idpenilaian,'<input type="button" class="btn btn-success" value="Evaluasi">'); ?>                            					</center>				
								</td>
					            </tr>
					        
					   <?php }?>
				    
				    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
    
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

<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>
</body>
</html>
