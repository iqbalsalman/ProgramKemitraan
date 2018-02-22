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
        $('#thn_pendapatan1').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });
     $(document).ready(function(){
        $('#thn_pendapatan2').Zebra_DatePicker({
       
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

       $("#from").validate({
        
          rules: {
          
         bahan_baku1:{ 
             required: true,
          },
         bahan_baku2:{ 
             required: true,
          },
        bahan_penolong2: {
          required : true,
          },
        hplain_lain1:{ 
             required: true,
          },
        hplain_lain2: {
          required : true,
          },
          bahan_penolong1 : {
            required : true,
          }
      //   bank1 :{ 
      //        required: true,
      //     },
      //   bank2:{ 
      //        required: true,
      //     },
      //   piutang1:{ 
      //        required: true,
      //     },
      //   piutang2:{ 
      //        required: true,
      //     },
      //   pes_barang1:{ 
      //        required: true,
      //     },
      //   pes_barang2 :{ 
      //        required: true,
      //     },
      //  per_produksi1:{ 
      //        required: true,
      //     },
      // per_produksi2:{ 
      //        required: true,
      //     },
      // per_kantor1   :{ 
      //        required: true,
      //     },
      // per_kantor2 :{ 
      //        required: true,
      //     },
      // bangunan1:{ 
      //        required: true,
      //     },
      // bangunan2:{ 
      //        required: true,
      //     },
      // tanah1:{ 
      //        required: true,
      //     },
      // tanah2:{ 
      //        required: true,
      //     },
      // lain1:{ 
      //        required: true,
      //     },
      // lain2:{ 
      //        required: true,
      //     }
    },
        // messages: {
        //  nama_perusahaan:{ 
        //      required: "Nama Perusahaan/Koperasi Wajib diisi ",
        //   },
        
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
              <h3 class="box-title"><b>IV Pendapatan / Omset dan Laba / Rugi</b></h3>
              <h5><p> <font color="red"> Wajib*</font></p></h5>
            </div>
			 <div class="box-body">
			  <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->
      
             <form class="form-horizontal" id="from" action="<?php echo site_url('pendapatan/insert'); ?>" method="post" enctype="multipart/form-data">
              
          <ol type="1">
          <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Pendapatan omset perjenis usaha</b></li></label>
          </div>
         <div class="form-group">
        <label class="col-lg-3 control-label">Pendapatan (2 tahun trakhir)</label>
		<div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="thn_pendapatan1" name="thn_pendapatan1" >
                </div>
        </div>  
		<div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="thn_pendapatan2" name="thn_pendapatan2" >
                </div>
        </div>  
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" >Penjualan</label>
        <div class="col-lg-3">
            <input type="text" name="penjualanr_s1" "  class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		<div class="col-lg-3">
            <input type="text" name="penjualanr_s2"  class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Penjualan</label>
		<div class="col-lg-3">
            <input type="text" name="penjualan_s1"  id="penjualan_s1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		 <div class="col-lg-3">
            <input type="text" name="penjualan_s2"  id="penjualan_s2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Hasil Penjualan / omset Harga pokok penjualan (HPP)</b></li></label>
          </div>
	 <div class="form-group">
        <label class="col-lg-3 control-label">Bahan Baku<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="bahan_baku1"  id="bahan_baku1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
         <div style="color: red;" id="invalid-bahan_baku1" class="error_msg"></div>
		<div class="col-lg-3">
            <input type="text" name="bahan_baku2"  id="bahan_baku2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
        <div style="color: red;" id="invalid-bahan_baku2" class="error_msg"></div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Bahan Penolong<font color="red">*</font></label>
		<div class="col-lg-3">
		<input type="text" name="bahan_penolong1" id="bahan_penolong1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
     <div style="color: red;" id="invalid-bahan_penolong1" class="error_msg"></div>
		</div>
		<div class="col-lg-3">
		<input type="text" name="bahan_penolong2" id="bahan_penolong2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
		</div>
     <div style="color: red;" id="invalid-bahan_penolong2" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Lain Lain<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="hplain_lain1" id="hplain_lain1"  class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
           <div style="color: red;" id="invalid-hplain_lain1" class="error_msg"></div>
		 <div class="col-lg-3">
            <input type="text" name="hplain_lain2"  id="hplain_lain2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
        <div style="color: red;" id="invalid-hplain_lain2" class="error_msg"></div>
    </div>
    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Biaya Administrasi & umum/operasional</b></li></label>
          </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Administrasi / ATK<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="adminis_atk1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		<div class="col-lg-3">
            <input type="text" name="adminis_atk2" class="form-control">
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Penjualan<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="biaya_penjualan1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		 <div class="col-lg-3">
            <input type="text" name="biaya_penjualan2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Telepon<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="telepon1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		 <div class="col-lg-3">
            <input type="text" name="telepon2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Air<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="air1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		<div class="col-lg-3">
            <input type="text" name="air2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Listrik<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="listrik1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		<div class="col-lg-3">
            <input type="text" name="listrik2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Penyusutan<font color="red">*</font></label>
		<div class="col-lg-3">
            <input type="text" name="biaya_penyusutan1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		<div class="col-lg-3">
            <input type="text" name="biaya_penyusutan2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Gaji Pengusaha<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="biaya_gaji1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		<div class="col-lg-3">
            <input type="text" name="biaya_gaji2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
	 <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Tenaga Kerja<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="Biaya_tenaga_kerja1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		<div class="col-lg-3">
            <input type="text" name="Biaya_tenaga_kerja2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Kesehatan<font color="red">*</font></label>
		 <div class="col-lg-3">
            <input type="text" name="biaya_kesehatan1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		 <div class="col-lg-3">
            <input type="text" name="biaya_kesehatan2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		 </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Transportasi<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="biaya_transportasi1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		 <div class="col-lg-3">
            <input type="text" name="biaya_transportasi2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Pendidikan & Latihan</label>
        <div class="col-lg-3">
            <input type="text" name="biaya_pendidikan1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		 <div class="col-lg-3">
            <input type="text" name="biaya_pendidikan2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Promosi / Pemasaran<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="biaya_promosi1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		 <div class="col-lg-3">
            <input type="text" name="biaya_promosi2" class="form-control">
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Rumah Tangga<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="biaya_rumah_tangga1" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		  <div class="col-lg-3">
            <input type="text" name="biaya_rumah_tangga2" class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label">Biaya Anak Sekolah<font color="red">*</font></label>
        <div class="col-lg-3">
            <input type="text" name="biaya_sekolah1"  class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
		<div class="col-lg-3">
            <input type="text" name="biaya_sekolah2"  class="form-control" onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"/>
        </div>
    </div>
    </ol>
   <div class="form-group well">
     <label class="col-lg-2 control-label"></label>
     <div class="col-lg-5">
        <input type="submit" class="btn btn-success" value="Selanjutnya">  
    </div>
  <div class="col-lg-5">
    <?php echo anchor('keuangan/edit/'.$qry->idkeuangan,'<input type="button" class="btn btn-success" value="Sebelumnya">'); ?>
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
  <script>

    function formatCurrency(num) {
    num = num.toString().replace(/\$|\,/g,'');
    if(isNaN(num))
    num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num*100+0.50000000001);
    cents = num%100;
    num = Math.floor(num/100).toString();
    if(cents<10)
    cents = "0" + cents;
    for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
    num = num.substring(0,num.length-(4*i+3))+'.'+
    num.substring(num.length-(4*i+3));
    return (((sign)?'':'-') + 'Rp' + num + ',' + cents);
}
</script>
</body>
</html>
