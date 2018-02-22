
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
        $('#tglmasuk').Zebra_DatePicker({
       
                dateFormat : "yyyy",
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
              <li class="header">Notifikasi</li>
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
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="<?php echo base_url()."index.php/dashboard/sekertariat"; ?>">
            <i class=" fa fa-dashboard "></i> <span>Dashboard</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class=" fa  fa-book "></i> <span>Proposal Masuk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/proposal_masuk/proposal"; ?>"><i class="fa fa-circle-o"></i>Proposal masuk</a></li>

          </ul>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()."index.php/proposal_masuk/index"; ?>"><i class="fa fa-circle-o"></i>Data Proposal Masuk</a></li>

          </ul>
        </li>
        </li>
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
              
            Proposal Masuk
              
              </b>
              </h3>

            <h5><p> <font color="red"> Wajib*</font></p></h5>
            </div>
			 <div class="box-body">
			 
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->
              
             

         <form class="form-horizontal" id="form" action="<?php echo site_url('proposal_masuk/tambah'); ?>" method="post" enctype="multipart/form-data" >

              <?=$this->session->flashdata('pesan')?>
              <div class="form-group">
        <label class="col-lg-3 control-label">ID RESI<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text" readonly name="resi_p" value="<?=$kodeunik?>" class="form-control" id="resi_p"> 
        </div>
        <div style="color: red;" id="invalid-resi_p" class="error_msg"></div> 
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label" >Tanggal masuk proposal<font color="red">*</font></label>
		<div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="tglmasuk" name="tglmasuk" >
                </div>
                <div style="color: red;" id="invalid-tglmasuk" class="error_msg"></div>
        </div>
		
    </div>
       <div class="form-group">
        <label class="col-lg-3 control-label">Nik<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text" name="nik" placeholder="Nik KTP" class="form-control" id="nik" >
        </div>
         <div style="color: red;" id="invalid-nik" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Nama Lengkap<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" id="nama" >
        </div>
         <div style="color: red;" id="invalid-nama" class="error_msg"></div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Nomer Telepon dan Hanphone Pemohon<font color="red">*</font></label>
        <div class="col-lg-3">
             <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="tlhp" id="tlhp">
                </div>
                <div style="color: red;" id="invalid-tlhp" class="error_msg"></div>
        </div>
        <div class="col-lg-3">
             <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="nlpcmb" id="nlpcmb " pattern="[0-9]{10}" title="Nomer Telepon  harus berjumalah 10 digit">
                </div>
                <div style="color: red;" id="invalid-nlpcmb" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Alamat  Calon Mitra Binaan<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text" name="alamatcmb" placeholder="Alamat  Calon Mitra Binaan" class="form-control" id="alamatcmb" >
             <div style="color: red;" id="invalid-alamatcmb" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Nama Dinas<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text" name="nama_dinas" placeholder="Nama Dinas" class="form-control" id="nama_dinas" >
        </div>
        <div style="color: red;" id="invalid-nama_dinas" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Nomer Telepon<font color="red">*</font></label>
        <div class="col-lg-3">
             <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="tlphp" id="tlphp" pattern="[0-9]{10}" title="Nomer Telepon  harus berjumalah 10 digit">
                </div>
                <div style="color: red;" id="invalid-tlphp" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Alamat Lengkap Dinas Daerah<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text" name="almatdinas" placeholder="Alamat Lengkap Dinas Daerah" class="form-control" id="almatdinas" >
             <div style="color: red;" id="invalid-almatdinas" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Nomer Surat Pemohon<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text" name="nosurat_pemohon" placeholder="Nomer Surat Pemohon" class="form-control" id="nosurat_pemohon" >
             <div style="color: red;" id="invalid-nosurat_pemohon" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Perihal Surat<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text" name="perihal" placeholder="Perihal Surat" class="form-control" id="perihal" >
             <div style="color: red;" id="invalid-perihal" class="error_msg"></div>
        </div>
    </div>
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
<!-- <script src="<?php echo base_url(); ?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
 --><!-- jQuery UI 1.11.4 -->
<!-- <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>

<!-- InputMask -->
<script src="<?php echo base_url(); ?>asset/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>asset/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php echo base_url(); ?>asset/dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script> -->
<script src="<?php echo base_url(); ?>asset/jquery/jquery.validate.min.js"></script>



<script>
    $(document).ready(function() {
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });

       $("#form").validate({
      
            rules: {
          
      
        tglmasuk : {
         required: true,
        },
        nik : {
          required : true,
        },
        nama : {
          required : true,
        },
        tlhp : {
          required : true,
        },
        nama_dinas : {
          required : true,
        },
        tlphp : {
          required : true,
        },
        almatdinas : {
          required : true,
        },
        tlhp : {
          required : true,
        },
        nlpcmb : {
          required : true,
        },
        nosurat_pemohon :{
          required : true,
        },
        alamatcmb :{
          required : true,
        },
        perihal :{
          required : true,
        },
        resi_p :{
          required : true,
        }
      },

        messages: {
         
     
        tglmasuk : {
         required: "Tanggal Masuk Wajib diisi",
        },
        nik : {
          required : "Nik Wajib diisi",
        },
        nama : {
          required : "Nama Lengkap Wajib diisi",
        },
        tlhp : {
          required : "Nomer Hanphon CMB Wajib diisi",
        },
        nama_dinas : {
          required : "Nama  Dinas Wajib diisi",
        },
        tlphp : {
          required : "Nomer Telepon Dinas Wajib diisi",
        },
        almatdinas : {
          required : " Alamat Dinas Wajib diisi",
        },
         alamatcmb :{
          required : "Alamat CMB Wajib diisi",
        },
        nosurat_pemohon :{
          required : "No Surat Permohonan wajib diisi",
        },
        perihal :{
          required : "Perihal Permohonan Wajib diisi",
        },
      }
     });
    })($);
  </script>
  



  
</body>
</html>
