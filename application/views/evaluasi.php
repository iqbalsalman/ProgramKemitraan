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
<script src="<?php echo base_url(); ?>asset/jquery/jquery.maskMoney.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/lib/css/default.css">
  <script type="text/javascript">
     $(document).ready(function(){
        $('#thn_anggaran').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });
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
        $('#tgl_evaluasi').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });
       $(document).ready(function(){
        $('#thn_berdiri').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#nilai_asset1').maskMoney();
      $('#angka2').maskMoney({prefix:'US$'});
      $('#nilai_asset').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precision:0});
      $('#angka4').maskMoney();
    });
    // function toAngka(nilai_asset){return parseInt(nilai_asset.replace(/,.*|\D/g,''),10)}

     // function toAngka('#nilai_asset'){return parseInt(rp.replace(/,.*|\D/g,''),10)}
// $(document).ready(function(){
//   $('#nilai_asset').toAngka(){return parseInt(nilai_asset.replace(/,.*|\D/g,''),10)})
// });
    </script>
    <script>
    $(document).ready(function() {
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });

       $("#form").validate({
        
            rules: {
        ktkb : {
          required : true,
        },
        kcamatan : {
          required : true,
        },
        klurah : {
          required : true,
        },

        kode_pos :{ 
             required: true,
          }, 
        tlpr :{ 
             required: true,
          },
        No_kk :{ 
             required: true,     
        },
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
        messages: {
        ktkb : {
          required : "Kota/Kabupaten wajib diisi",
        },
        kcamatan : {
          required : "Kecamatan wajib diisi",
        },
        klurah : {
          required : "Kelurahan/Desa wajib diisi",
        },

        kode_pos :{ 
             required: "Kode Pos wajib diisi",
          }, 
        tlpr :{ 
             // required: "Nomer Telepon Rumah wajib diisi",
             minlength: "Please enter your valid phone number",
             maxlength: "Please enter your valid phone number",
          },
        No_kk :{ 
             required: "Nomer KK wajib diisi",     
        },
        bsd : {
          required : "Masa Berlaku wajib diisi",
        },
        status_tinggal : {
          required : "Status tempat tinggal wajib diisi",
        },
        pendidikan_f : {
          required : "Pendidikan formal wajib diisi",
            }

        }
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
            <li><a href="<?php echo base_url()."index.php/evaluasi/proposal_score"; ?>"><i class="fa fa-circle-o"></i>Parameter Nilai adminis</a></li>

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
    </section>
	<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Evaluasi Proposal</h3>
            </div>
			 <div class="box-body">
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->

         <form class="form-horizontal" id="form" action="<?php echo site_url('evaluasi/tambah'); ?>" method="post" enctype="multipart/form-data">
         <?php foreach($query as $u){ ?>
         <div class="form-group">
        <label class="col-lg-3 control-label">Tahun Anggaran</label>
          <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="thn_anggaran" name="thn_anggaran" >
                </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Kabupaten / Kota<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="hidden" name=" idevaluasi" class="form-control" value="<?php echo $u->idkegitanusaha?>">
            <input type="hidden" name="idkegitanusaha" class="form-control" value="<?php echo $u->idkegitanusaha?>">
            <input type="text" name="ktkb" class="form-control" id="ktkb"  value="<?php echo $u->kabupaten ?>" >
        </div>
          <div style="color: red;" id="invalid-ktkb" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" >Nama Usaha / Koperasi <font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text" name="nm_usaha" class="form-control"  id="nm_usaha" value="<?php echo $u->namap?>">
        </div>
          <div style="color: red" id="invalid-nm_usaha" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" >Nama Pemilik / Ketua<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="nm_pemilik" class="form-control" value="<?php echo $u->tpemilik_koprasi ?>"  id="nm_pemilik">
        </div>
        <div style="color: red;" id="invalid-nm_pemilik" class="error_msg"></div>
    </div>
	 <div class="form-group">
        <label class="col-lg-3 control-label" >Jenis Bidang Usaha<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="jenis_usaha"  class="form-control" value="<?php echo $u->bidang_usaha ?>" id="jenis_usaha">
        </div>
         <div style="color: red;" id="invalid-jenis_usaha" class="error_msg"></div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Binaan Lama</label>
    <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  name="p_binaan_pk" id="p_binaan_pk"
                  value="<?php echo $u->p_binaan_pk ?>" >
                </div>
        </div>
     <div class="col-lg-2">
            <input type="text" name="kd_binaan"  id="kd_binaan" class="form-control" value="<?php echo $u->kd_binaan ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Alamat Rumah Tempat Usaha<font color="red">*</font></label>
        <div class="col-lg-7">
            <input type="text" name="alamat_perusahaan"  class="form-control" value="<?php echo $u->alamat_perusahaan,' ', $u->kelurahan,', ',   $u->kecamatan,' ',    $u->kabupaten,' ',     $u->provinsi    ?>" id="alamat_perusahaan">
        </div>
         <div style="color: red;" id="invalid-alamat_perusahaan" class="error_msg"></div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Status tempat usaha<font color="red">*</font></label>
        <div class="col-lg-5">
            <input type="text" name="status_usaha" id="status_usaha" class="form-control" value="<?php echo $u->stt_usaha ?>" >
        </div>
        <div style="color: red;" id="invalid-status_usaha" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Nomer Telepon Perusahaan<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="notlp_perusahaan" id="notlp_perusahaan" class="form-control" value="<?php echo $u->notlp_perusahaan?>">
        </div>
        <div style="color: red;" id="invalid-notlp_perusahaan" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Berdiri<font color="red">*</font></label>
    
          <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="thn_berdiri" name="thn_berdiri" value="<?php echo $u->berdiri_tahun?>">
                </div>
                <div style="color: red;" id="invalid-thn_berdiri" class="error_msg"></div>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">jumlah Tenaga Kerja</label>
        <div class="col-lg-3">
            <input type="text" name="jml_karyawan" class="form-control" value="<?php echo $u->jml_karyawan?>">
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Jumlah Anggota Koperasi</label>
        <div class="col-lg-2">
            <input type="text" name="jml_pengurus" class="form-control"  value="<?php echo $u->jml_pengurus?>">
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Neraca / Rugi Laba<font color="red">*</font></label>
         <div class="col-lg-2">
            <select name="neraca" class="form-control" id="neraca">
          <option value="">Neraca / Rugi Laba</option>
          <option value="Ada">Ada</option>
          <option value="Tidak Ada">Tidak Ada</option>
            </select>
        </div>
        <div style="color: red;" id="invalid-neraca" class="error_msg"></div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Nilai Asset lancar<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="nilai_asset" id="nilai_asset" class="form-control" value="<?php echo $u->total_af1?>">
        </div>
        <div style="color: red;" id="invalid-nilai_asset" class="error_msg"></div>
    </div>
	 <div class="form-group">
        <label class="col-lg-3 control-label">Laba bersih/SHU per bulan<font color="red">*</font></label>
        <div class="col-lg-4">
            <input type="text" name="laba_bersih" class="form-control" value="<?php echo $u->laba_bersih2?>" id="laba_bersih">
        </div>
        <div style="color: red;" id="invalid-laba_bersih" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"></label>
        <div class="col-lg-2">
            <input type="text" name="izin_lain" class="form-control" placeholder="Lain-lain">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">NPWP<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="npwp" class="form-control" value="<?php echo $u->npwp?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Kendala usaha</label>
        <div class="col-lg-4">
            <input type="text" name="kendala_usaha" class="form-control"  value="<?php echo $u->m_manajemen,$u->keuangan?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah permohonan</label>
        <div class="col-lg-4">
            <input type="text" name="jml_permohonan" class="form-control" value="<?php echo $u->jml_bantuan_pinajaman?>">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Akan digunakan untuk</label>
        <div class="col-lg-3">
            <input type="text" name="penggunaan_modal" class="form-control" >
        </div>
    </div>
      <div class="form-group">
        <label class="col-lg-3 control-label">Surat Pengantar instansi<font color="red">*</font></label>
         <div class="col-lg-2">
            <select name="srs_tansie" class="form-control">
          <option value="Ada">Ada</option>
          <option value="Tidak Ada">Tidak Ada</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Rasio likuiditas<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="rasio_likuiditas" class="form-control" >
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Rasio aktifitas<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="rasio_aktifitas" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Legalitas<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="legalitas" class="form-control">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Pemasaran<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="pemasaran" class="form-control" value="<?php echo $u->konsumen?>">
        </div>
    </div>   
   
     <div class="form-group">
        <label class="col-lg-3 control-label">Perkiraan dana<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="perkiraan_dana" class="form-control" value="<?=$qry?>" >
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label">Tanggal Evaluasi</label>
         <div class="col-lg-2">
        <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="tgl_evaluasi" name="tgl_evaluasi" >
                </div>
                </div>
    </div>
    <div class="form-group well">
     <label class="col-lg-2 control-label"></label>
     <div class="col-lg-5">
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
    </div>
</form>
  <?php } ?>
    </div>
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
<!-- Morris.js charts -->

<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>asset/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>asset/dist/js/demo.js"></script>

</body>
</html>
