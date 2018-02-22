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
        $('#thn1').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });
     $(document).ready(function(){
        $('#thn2').Zebra_DatePicker({
       
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
              <h3 class="box-title"><b>III Data Keuangan</b></h3>
              <h5><p> <font color="red"> Wajib*</font></p></h5>
            </div>
       <div class="box-body">
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->
       
                     <form class="form-horizontal" id="form" action="<?php echo site_url('keuangan/update'); ?>" method="post" enctype="multipart/form-data">
                      <?php foreach($query as $u){ ?>
                      <ol type="1">
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Neraca (2 tahun trakhir)</li></label>
    <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                   <input type="hidden" name="idkeuangan" class="form-control"  value="<?php echo $u->idkeuangan ?>"  >
                  <input type="text" class="form-control pull-right"  id="thn1" name="thn1" value="<?php echo $u->thn1 ?>" >
                </div>
        </div>  
         <div style="color: red;" id="invalid-thn1" class="error_msg"></div>
    <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="thn2" name="thn2" value="<?php echo $u->thn2 ?>">
                </div>
        </div>  
         <div style="color: red;" id="invalid-thn2" class="error_msg"></div>
    </div>
     <div class="form-group">
    <label class="col-lg-3 control-label"><b>Aktiva / Asset / Kekayaan</b></label>
    </div>
    </ol>
     <ol type="a">
    <div class="form-group">
        <label class="col-lg-3 control-label" ><li>kas<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="kas1" placeholder="Kas" id="kas1" class="form-control"  value="<?php echo $u->kas1 ?>">
        </div>
        <div style="color: red;" id="invalid-kas1" class="error_msg"></div>
    <div class="col-lg-3">
            <input type="text" name="kas2" placeholder="Kas" id="kas2" class="form-control"  value="<?php echo $u->kas2 ?>">
        </div>
        <div style="color: red;" id="invalid-kas2" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Bank<font color="red">*</font></li></label>
    <div class="col-lg-3">
            <input type="text" name="bank1"  id="bank1" class="form-control" value="<?php echo $u->bank1?>">
        </div>
        <div style="color: red;" id="invalid-bank1" class="error_msg"></div>
     <div class="col-lg-3">
            <input type="text" name="bank2"  id="bank2" class="form-control" value="<?php echo $u->bank2?>">
        </div>
        <div style="color: red;" id="invalid-bank2" class="error_msg"></div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Piuatang<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="piutang1"  id="piutang1" class="form-control" value="<?php echo $u->piutang1?>">
        </div>
        <div style="color: red;" id="invalid-piutang1" class="error_msg"></div>
    <div class="col-lg-3">
            <input type="text" name="piutang2"  id="piutang2" class="form-control" value="<?php echo $u->piutang2?>">
        </div>
        <div style="color: red;" id="invalid-piutang2" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Persedian Baranga<font color="red">*</font></li></label>
    <div class="col-lg-3">
    <input type="text" name="pes_barang1"  class="form-control" id="pes_barang1" value="<?php echo $u->pes_barang1 ?>">
    </div>
    <div style="color: red;" id="invalid-pes_barang1" class="error_msg"></div>
    <div class="col-lg-3">
    <input type="text" name="pes_barang2" class="form-control" id="pes_barang2" value="<?php echo $u->pes_barang2 ?>">
    </div>
    <div style="color: red;" id="invalid-pes_barang2" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Peralatan Produksi<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="per_produksi1"  class="form-control" id="per_produksi1" value="<?php echo $u->per_produksi1 ?>">
        </div>
        <div style="color: red;" id="invalid-per_produksi1" class="error_msg"></div>
     <div class="col-lg-3">
            <input type="text" name="per_produksi2"  class="form-control" id="per_produksi2" value="<?php echo $u->per_produksi2 ?>">
        </div>
        <div style="color: red;" id="invalid-per_produksi2" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Peratan Kantor dan aktifa lain<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="per_kantor1" class="form-control" id="per_kantor1"  value="<?php echo $u->per_kantor1 ?>" >
        </div>
        <div style="color: red;" id="invalid-per_kantor1" class="error_msg"></div>
    <div class="col-lg-3">
            <input type="text" name="per_kantor2" class="form-control" id="per_kantor2"  value="<?php echo $u->per_kantor2 ?>">
        </div>
        <div style="color: red;" id="invalid-per_kantor2" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Bangunan<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="bangunan1" class="form-control" id="bangunan1" value="<?php echo $u->bangunan1 ?>">
        </div>
        <div style="color: red;" id="invalid-bangunan1" class="error_msg"></div>
    <div class="col-lg-3">
            <input type="text" name="bangunan2" class="form-control" id="bangunan2" value="<?php echo $u->bangunan2 ?>">
        </div>
        <div style="color: red;" id="invalid-bangunan2" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Tanah<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="tanah1" class="form-control" id="tanah1" value="<?php echo $u->tanah1 ?>">
        </div>
        <div style="color: red;" id="invalid-tanah1" class="error_msg"></div>
     <div class="col-lg-3">
            <input type="text" name="tanah2" class="form-control" id="tanah2" value="<?php echo $u->tanah2 ?>">
        </div>
        <div style="color: red;" id="invalid-tanah2" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Lain-lain<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="lain1" class="form-control" id="lain1" value="<?php echo $u->lain1 ?>">
        </div>
        <div style="color: red;" id="invalid-lain1" class="error_msg"></div>
     <div class="col-lg-3">
            <input type="text" name="lain2" class="form-control" id="lain2" value="<?php echo $u->lain2 ?>">
        </div>
        <div style="color: red;" id="invalid-lain2" class="error_msg"></div>
    </div>
        <div class="form-group">
    <label class="col-lg-3 control-label"><b>Passiva / Kewajiban & Modal</b></label>
    </div>
    </ol>
    <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Hutang Bank</li></label>
        <div class="col-lg-3">
            <input type="text" name="htnb1" class="form-control" value="<?php echo $u->htnb1 ?>">
        </div>
    <div class="col-lg-3">
            <input type="text" name="htnb2" class="form-control" value="<?php echo $u->htnb2 ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Hutang Dagang</li></label>
        <div class="col-lg-3">
            <input type="text" name="hutang_dagang1" class="form-control" value="<?php echo $u->hutang_dagang1 ?>">
        </div>
    <div class="col-lg-3">
            <input type="text" name="hutang_dagang2" class="form-control" value="<?php echo $u->hutang_dagang2 ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Hutang lain-lain</li></label>
    <div class="col-lg-3">
            <input type="text" name="hlain1" class="form-control" value="<?php echo $u->hlain1 ?>">
        </div>
    <div class="col-lg-3">
            <input type="text" name="hlain2" class="form-control" value="<?php echo $u->hlain2 ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Modal</li></label>
        <div class="col-lg-3">
            <input type="text" name="modal1" class="form-control" value="<?php echo $u->modal1?>">
        </div>
    <div class="col-lg-3">
            <input type="text" name="modal2" class="form-control" value="<?php echo $u->modal2?>">
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Laba ditahan</li></label>
        <div class="col-lg-3">
            <input type="text" name="laba_ditahan1" class="form-control" value="<?php echo $u->laba_ditahan1?>">
        </div>
    <div class="col-lg-3">
            <input type="text" name="laba_ditahan2" class="form-control" value="<?php echo $u->laba_ditahan2?>">
        </div>
    </div>
    <div class="form-group">
    <label class="col-lg-3 control-label"><b>Penjelasan Hutang : </b></label>
    </div>
        </ol>
        <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nama Bank</li></label>
     <div class="col-lg-5">
            <input type="text" name="nama_bank" class="form-control"  value="<?php echo $u->nama_bank ?>">
        </div>
     </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Pokok Pinjaman</label>
        <div class="col-lg-4">
            <input type="text" name="pok_pinjaman" class="form-control"  value="<?php echo $u->pok_pinjaman ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Besar Bunga</label>
        <div class="col-lg-2">
            <input type="text" name="besar_Bunga" class="form-control" value="<?php echo $u->besar_Bunga ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Prosentasi Bunga</label>
        <div class="col-lg-2">
            <input type="text" name="prosentasi_bunga" class="form-control"  value="<?php echo $u->prosentasi_bunga ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa Pinjaman</label>
        <div class="col-lg-4">
            <input type="text" name="sisa_pinjaman" class="form-control" value="<?php echo $u->sisa_pinjaman ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa kali ansur</label>
        <div class="col-lg-2">
            <input type="text" name="sisa_kali_ansur"  class="form-control" value="<?php echo $u->sisa_kali_ansur ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah angsuran / bln</label>
       <div class="col-lg-4">
            <input type="text" name="jml_angsuran" class="form-control" value="<?php echo $u->jml_angsuran ?>">
        </div>
    </div>
    <div class="form-group">
    <label class="col-lg-3 control-label"><b><li>Hutang Dangang</li></b></label>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Nama Perusahaan</label>
        <div class="col-lg-5">
            <input type="text" name="nama_perusahaan_d" class="form-control" value="<?php echo $u->nama_perusahaan_d ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Pokok Pinjaman</label>
       <div class="col-lg-4">
            <input type="text" name="pokok_pinjaman_dagang" class="form-control" value="<?php echo $u->pokok_pinjaman_dagang ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Besar Bungan</label>
        <div class="col-lg-2">
            <input type="text" name="Besar_bunga_dagang" class="form-control" value="<?php echo $u->Besar_bunga_dagang ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Prosentase Bunga</label>
       <div class="col-lg-2">
            <input type="text" name="prosentase_bunga_dagang" class="form-control" value="<?php echo $u->prosentase_bunga_dagang ?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa Pinjaman</label>
       <div class="col-lg-4">
            <input type="text" name="sisa_pinjaman_dagang" class="form-control"  value="<?php echo $u->sisa_pinjaman_dagang?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa kali angsuran</label>
       <div class="col-lg-2">
            <input type="text" name="sisa_angsuran_dagang" class="form-control" value="<?php echo $u->sisa_angsuran_dagang?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah angsuran / bln</label>
       <div class="col-lg-4">
            <input type="text" name="jml_angsuran_dagang" class="form-control" value="<?php echo $u->jml_angsuran_dagang?>">
        </div>
    </div>
     <div class="form-group">
    <label class="col-lg-3 control-label"><b><li>Hutang Pihak ke III</li></b></label>
    </div>
    </ol>
     <ol type="1">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li> Nama BUMN</li></label>
       <div class="col-lg-5">
            <input type="text" name="nama_bumn" class="form-control" value="<?php echo $u->nama_bumn?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Pokok Pinjaman</label>
       <div class="col-lg-4">
            <input type="text" name="pokok_pinjaman_bumn" class="form-control" value="<?php echo $u->pokok_pinjaman_bumn?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"></label>
       <div class="col-lg-2">
            <input type="text" name="besar_bunga_bumn" class="form-control" value="<?php echo $u->besar_bunga_bumn?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Prosentase Bunga</label>
       <div class="col-lg-2">
            <input type="text" name="prosentase_bunga_bumn" class="form-control" value="<?php echo $u->prosentase_bunga_bumn?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Sisa Pinjaman</label>
       <div class="col-lg-4">
            <input type="text" name="sisa_pinjaman_bumn" class="form-control" value="<?php echo $u->sisa_pinjaman_bumn?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa kali angsuran<</label>
       <div class="col-lg-2">
            <input type="text" name="sisa_angsuran_bumn" class="form-control" value="<?php echo $u->sisa_angsuran_bumn?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah angsuran / bln</label>
       <div class="col-lg-4">
            <input type="text" name="jml_angsuran_bumn" class="form-control"  value="<?php echo $u->jml_angsuran_bumn?>">
        </div>
    </div>
    
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nama Badan / Perorangan</li></label>
       <div class="col-lg-5">
            <input type="text" name="nama_badan" class="form-control" value="<?php echo $u->nama_badan?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Pokok Pinjaman</label>
       <div class="col-lg-4">
            <input type="text" name="pokok_pinjaman_badan" class="form-control" value="<?php echo $u->pokok_pinjaman_badan?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Besar Bunga</label>
       <div class="col-lg-2">
            <input type="text" name="besar_bunga_badan" class="form-control" value="<?php echo $u->besar_bunga_badan?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Prosentase Bunga</label>
       <div class="col-lg-2">
            <input type="text" name="prosentase_bunga_badan" class="form-control" value="<?php echo $u->prosentase_bunga_badan?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa Pinjama</label>
       <div class="col-lg-4">
            <input type="text" name="sisa_pinjaman_badan" class="form-control" value="<?php echo $u->sisa_pinjaman_badan?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa kali angsuran</label>
       <div class="col-lg-2">
            <input type="text" name="sisa_angsuran_badan" class="form-control" value="<?php echo $u->sisa_angsuran_badan?>">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah angsuran / bln</label>
       <div class="col-lg-4">
            <input type="text" name="jml_angsuran_badan" class="form-control" value="<?php echo $u->jml_angsuran_badan?>">
        </div>
    </div>
    </ol>
    <?php } ?>
     <div class="form-group well">
     <label class="col-lg-2 control-label"></label>
     <div class="col-lg-5">
        <input type="submit" class="btn btn-success" value="Selanjutnya">  
    </div>
  <div class="col-lg-5">
    <?php echo anchor('perusahaan/edit/'.$qry->idperusahaan,'<input type="button" class="btn btn-success" value="Sebelumnya">'); ?>
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
</body>
</html>
