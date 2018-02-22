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
    $(document).ready(function() {
       jQuery.validator.setDefaults({
      errorPlacement: function(error, element) {
        error.appendTo('#invalid-' + element.attr('id'));
      }
    });

       $("#form").validate({
        
          rules: {
          
        nama_perusahaan:{ 
             required: true,
          },
        tpemilik_koprasi:{ 
             required: true,
          },
        alamat_perusahaan:{ 
             required: true,
          },
          bidang_usaha : {
          required : true,
          },
        provinsi_p:{ 
             required: true,
          },
        kota_perusahaan:{ 
             required: true,
          },
        kecamatan_perusahaan:{ 
             required: true,
          },
        kelurahan_perusahaan:{ 
             required: true,
          },
        kode_pos_p:{ 
             required: true,
          },
        notlp_perusahaan :{ 
             required: true,
          },
       stt_usaha:{ 
             required: true,
          },
        thn_sttusaha:{ 
             required: true,
          },
        berdiri_tahun:{ 
             required: true,
          },
        jml_karyawan:{ 
             required: true,
          },
         jenis_usaha:{ 
             required: true,
          }
      //   jenis_usaha : true,
        
      // }
    },
        messages: {
         nama_perusahaan:{ 
             required: "Nama Perusahaan/Koperasi Wajib diisi ",
          },
        tpemilik_koprasi:{ 
             required: "Nama Pemilik/Ketua Koperasi Wajib diisi",
          },
       
        bidang_usaha:{ 
             required: "Sektot Usaha Wajib diisi",
          },
        jenis_usaha:{ 
             required: "Jenis Usaha Wajib diisi",
          },
        alamat_perusahaan:{ 
             required: "Alamat Tempat Usaha  Wajib diisi",
          },
        provinsi_p:{ 
             required: "Provinsi Wajib diisi",
          },
        kota_perusahaan:{ 
             required: "Kota/Kabupaten Wajib diisi",
          },
        kecamatan_perusahaan:{ 
             required: "Kecamatan Wajib diisi",
          },
        kelurahan_perusahaan:{ 
             required: "Kelurahan/Desa Wajib diisi",
          },
        kode_pos_p:{ 
             required: "Kode Pos Wajib diisi",
          },
          notlp_perusahaan : { 
             required: "Nomer Telepon Perusahaan Wajib diisi",
          },
       stt_usaha:{ 
             required: "Status Tempat Usaha Wajib diisi",
          },
        thn_sttusaha:{ 
             required: "Tahun Status tempat usaha Wajib diisi",
          },
        berdiri_tahun:{ 
             required: "Berdiri sejak tahun Wajib diisi",
          },
        jml_karyawan:{ 
             required: "jumlah Karyawan Wajib diisi",
          }
        }
     });
    })($);
  </script>
  <script type="text/javascript">
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
        $('#thn_sttusaha').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });
   $(document).ready(function(){
        $('#berdiri_tahun').Zebra_DatePicker({
       
                dateFormat : "dd-mm-yy",
        changeMonth : true,
        changeYear : true,
        minDate: +1, 
        maxDate: "+2D"
        });
    });

        $(function(){

$.ajaxSetup({
type:"POST",
url: "<?php echo site_url('perusahaan/ambil_data') ?>",
cache: false,
});

$("#provinsi_p").change(function(){

var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kabupaten',id:value},
success: function(respond){
$("#kota_perusahaan").html(respond);
}
})
}

});


$("#kota_perusahaan").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kecamatan',id:value},
success: function(respond){
$("#kecamatan_perusahaan").html(respond);
}
})
}
})

$("#kecamatan_perusahaan").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kelurahan',id:value},
success: function(respond){
$("#kelurahan_perusahaan").html(respond);
}
})
} 
})

})
  </script>
   <script type="text/javascript">
    $(document).ready(function() {
    // Kondisi saat Form di-load
    if ($("#status_kawin").val() == "Kawin") {
        $('#jml_anak').removeAttr('disabled');
    } else {
        $('#jml_anak').attr('disabled','disabled'); 
    }
    // Kondisi saat ComboBox (Select Option) dipilih nilainya
    $("#status_kawin").change(function() {
        if (this.value == "Belum kawin") {
            $('#jml_anak').attr('disabled','disabled'); 
            $('#jml_anak').val('');
        } else {
            $('#jml_anak').removeAttr('disabled');
            $('#jml_anak').focus();
        } 
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
              <h3 class="box-title">
              <b>
      
             II  Data Perusahaan
              
              </h3>
                <h5><p> <font color="red"> Wajib*</font></p></h5>
            </div>
       <div class="box-body">
        <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->
       
             <form class="form-horizontal"  id="form"  action="<?php echo site_url('perusahaan/insert'); ?>" method="post" enctype="multipart/form-data">
             <ol type="1">
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nama Perusahaan/Koperasi<font color="red">*</font></li></label>
    
        <div class="col-lg-5">
            <input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan/Koperasi" id="nama_perusahaan" class="form-control"  >
        </div>
        <div style="color: red;" id="invalid-nama_perusahaan" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" ><li>Nama Pemilik/Ketua Koperasi<font color="red">*</font></li></label>
        <div class="col-lg-4">
            <input type="text" name="tpemilik_koprasi" placeholder="Nama Pemilik/Ketua Koperasi" class="form-control" id="tpemilik_koprasi">
        </div>
        <div style="color: red;" id="invalid-tpemilik_koprasi" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pernah menjadi mitra binaan PKBL Perum Peruri</li></label>
    <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="p_binaan_pk" name="p_binaan_pk" >
                </div>
                <div style="color: red;" id="invalid-p_binaan_pk" class="error_msg"></div>
        </div>
     <div class="col-lg-2">
            <input type="text" name="kd_binaan" placeholder="Kode Binaan No" id="kd_binaan" class="form-control">
        </div>
        <div style="color: red;" id="invalid-kd_binaan" class="error_msg"></div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Sektot Usaha<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <select name="bidang_usaha" class="form-control" id="bidang_usaha">
                 <option value="">Sektot Usaha</option>
                <option value="Koperasi">Koperasi</option>
                <option value="Industri">Industri</option>
                <option value="Perdagangan">Perdagangan</option>
                <option value="Jasa">Jasa</option>
            </select>
             <div style="color: red;" id="invalid-bidang_usaha" class="error_msg"></div>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jenis Usaha<font color="red">*</font></li></label>
    <div class="col-lg-3">
    <input type="text" name="jenis_usaha" placeholder="Jenis Usaha" class="form-control" id="jenis_usaha">
    </div>
     <div style="color: red;" id="invalid-jenis_usaha" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Alamat Tempat Usaha (Jln,Rt,Rw,No)<font color="red">*</font></li></label>
        <div class="col-lg-6">
            <input type="text" name="alamat_perusahaan"  class="form-control" id="alamat_perusahaan">
        </div>
         <div style="color: red;" id="invalid-alamat_perusahaan" class="error_msg"></div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Provinsi<font color="red">*</font></li></label>
       <div class="col-lg-6">
    <select class='form-control' id='provinsi_p' name="provinsi_p">
   
<option value=''>--pilih--</option>
<?php 
foreach ($provinsi as $prov) {
echo "<option value='$prov[id]'>$prov[name]</option>";
}
?>
</select>
<div style="color: red;" id="invalid-provinsi_p" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kota/Kabupaten<font color="red">*</font></li></label>
        <div class="col-lg-6">
            <select class='form-control' id='kota_perusahaan' name="kota_perusahaan">
<option value=''>--pilih--</option>
</select>
<div style="color: red;" id="invalid-kota_perusahaan" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kecamatan<font color="red">*</font></li></label>
        <div class="col-lg-6">
        <select class='form-control' id='kecamatan_perusahaan' name="kecamatan_perusahaan">
        <option value=''>--pilih--</option>
        </select>
        <div style="color: red;" id="invalid-kecamatan_perusahaan" class="error_msg"></div>
    </div>
     
    </div>
  
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kelurahan/Desa<font color="red">*</font></li></label>
        <div class="col-lg-6">
<select class='form-control' id='kelurahan_perusahaan' name="kelurahan_perusahaan">
<option value=''>--pilih--</option>
</select>
 <div style="color: red;" id="invalid-kelurahan_perusahaan" class="error_msg"></div>
        </div>

    </div>

  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kode Pos<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <input type="text" name="kode_pos_p" class="form-control" id="kode_pos_p">
        </div>
         <div style="color: red;" id="invalid-kode_pos_p" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nomer Telepon Perusahaan<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="notlp_perusahaan" class="form-control" id="notlp_perusahaan">
        </div>
         <div style="color: red;" id="invalid-notlp_perusahaan" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Struktur Organisasi<font color="red">*</font></li></label>
    <div class="col-lg-3">
            <input type="file" name="upload_struk_organisasi" class="form-control" id="upload_struk_organisasi">
        </div>
         <div style="color: red;" id="invalid-upload_struk_organisasi" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Status Tempat Usaha<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <select name="stt_usaha" class="form-control" id="stt_usaha">
            <option value="">Status Tempat Usaha<font color="red">*</font></option>
          <option value="Milik Sendiri">Milik Sendiri</option>
          <option value="Kontrak">Kontrak</option>
          <option value="Sewa">Sewa</option>
            </select>
             <div style="color: red;" id="invalid-stt_usaha" class="error_msg"></div>
        </div>
     <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right" id="thn_sttusaha" name="thn_sttusaha">
                </div>
                 <div style="color: red;" id="invalid-thn_sttusaha" class="error_msg"></div>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Izin Usaha</li></label>
    <div class="col-lg-2">
            <input type="text" name="siup" id="siup" class="form-control" placeholder="SIUP Nomer">
    </div>
     <div style="color: red;" id="invalid-siup" class="error_msg"></div>
      <div class="col-lg-2">
            <input type="text" name="tdp" id="tdp" class="form-control" placeholder="TDP Nomer">
    </div>
     <div style="color: red;" id="invalid-tdp" class="error_msg"></div>
      <div class="col-lg-2">
            <input type="text" name="ho" id="ho" class="form-control" placeholder="HO Nomer">
    </div>
     <div style="color: red;" id="invalid-ho" class="error_msg"></div>
      <div class="col-lg-2">
            <input type="text" name="situ" id="situ" class="form-control" placeholder="SITU Nomer">
    </div>
     <div style="color: red;" id="invalid-situ" class="error_msg"></div>
     
    </div>
   <div class="form-group">
    <label class="col-lg-3 control-label"></label>
     <div class="col-lg-2">
            <input type="text" name="sku" id= "sku" class="form-control" placeholder="SKU Nomer">
    </div>
     <div style="color: red;" id="invalid-sku" class="error_msg"></div>
    <div class="col-lg-2">
            <input type="text" name="bdn_hukum" id="bdn_hukum" class="form-control" placeholder="BH Nomor">
    </div>
     <div style="color: red;" id="invalid-bdn_hukum" class="error_msg"></div>
   </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>NPWP<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="npwp" id="npwp" class="form-control" placeholder="NPWP">
        </div>
         <div style="color: red;" id="invalid-npwp" class="error_msg"></div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label"><li>Sertifikat Tanah<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="nmpgang_hak" id="nmpgang_hak" class="form-control" placeholder="Nama Pemegang Hak">
        </div>
         <div style="color: red;" id="invalid-nmpgang_hak" class="error_msg"></div>
        <div class="col-lg-3">
            <input type="text" name="lokasi_tanah" id="lokasi_tanah" class="form-control" placeholder="Desa/Kel">
        </div>
         <div style="color: red;" id="invalid-lokasi_tanah" class="error_msg"></div>
         <div class="col-lg-2">
            <input type="text" name="no_tanah" id="no_tanah" class="form-control" placeholder="No">
        </div>
         <div style="color: red;" id="invalid-no_tanah" class="error_msg"></div>
    </div>
    <div class="form-group">
    <label class="col-lg-3 control-label"></label>
      <div class="col-lg-2">
            <input type="text" name="luas_tanah" id="luas_tanah" class="form-control" placeholder="Luas Tanah">
        </div>
         <div style="color: red;" id="invalid-luas_tanah" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Surat Pengantar Instansi<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="file" name="srs_tansi" id="srs_tansi" class="form-control" >
        </div>
         <div style="color: red;" id="invalid-srs_tansi" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Berdiri sejak tahun<font color="red">*</font></li></label>
    <div class="col-lg-2">
        <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right" id="berdiri_tahun" name="berdiri_tahun">
          </div>
           <div style="color: red;" id="invalid-berdiri_tahun" class="error_msg"></div>
         </div>
     </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>jumlah Karyawan/Tenaga Kerja<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="jml_karyawan" id="jml_karyawan" class="form-control">
        </div>
         <div style="color: red;" id="invalid-jml_karyawan" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>jumlah Tenaga Ahli</li></label>
        <div class="col-lg-3">
            <input type="text" name="jml_teng_ahli" id="jml_teng_ahli" class="form-control">
        </div>
         <div style="color: red;" id="invalid-jml_teng_ahli" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jumlah anggota (Koperasi)</li></label>
        <div class="col-lg-3">
            <input type="text" name="jml_pengurus" id="jml_pengurus" class="form-control">
        </div>
         <div style="color: red;" id="invalid-jml_pengurus" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li><dt>Nomer Rekening koran</dt></li></label>
        <div class="col-lg-3">
            <input type="text" name="rekening_koran" id="rekening_koran" class="form-control">
        </div>
         <div style="color: red;" id="invalid-rekening_koran" class="error_msg"></div>
    </div>
    <dl>
  <div class="form-group">
        <label class="col-lg-3 control-label"><dd>- Nama Bank</dd></label>
        <div class="col-lg-3">
            <input type="text" name="nama_bank_koran" id="nama_bank_koran" placeholder="Nama Bank" class="form-control">
        </div>
         <div style="color: red;" id="nama_bank_koran" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><dd>- Alamat Bank</dd></label>
       <div class="col-lg-5">
            <input type="text" name="alamat_bank_koran" id="alamat_bank_koran" class="form-control">
        </div>
         <div style="color: red;" id="invalid-alamat_bank_koran" class="error_msg"></div>
    </div>
    </dl>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li><dt>Nomer Buku Tabungan</dt></li></label>
        <div class="col-lg-3">
            <input type="text" name="nomer_buku_tabungan" id="nomer_buku_tabungan" class="form-control">
        </div>
         <div style="color: red;" id="invalid-nomer_buku_tabungan" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><dd>- Nama Bank</dd></label>
        <div class="col-lg-4">
            <input type="text" name="nama_bank" id="nama_bank" placeholder="Nama Bank" class="form-control">
        </div>
         <div style="color: red;" id="invalid-nama_bank" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><dd>- Alamat Bank</dd></label>
       <div class="col-lg-5">
            <input type="text" name="alamat_tabungan" id="alamat_tabungan" class="form-control">
        </div>
         <div style="color: red;" id="invalid-alamat_tabungan" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Selama ini pernah mendapatkan bantuan dana dari BUMN/Instansi/perbankan</li></label>
       <div class="col-lg-5">
            <input type="text" name="bantuan_l" id="bantuan_l" class="form-control">
        </div>
         <div style="color: red;" id="invalid-bantuan_l" class="error_msg"></div>
    </div>
    </ol>
    <div class="form-group well">
     <label class="col-lg-2 control-label"></label>
     <div class="col-lg-5">
        <input type="submit" class="btn btn-success" value="Selanjutnya">  
    </div>
    <div class="col-lg-5">
    <?php echo anchor('biodata/edit/'.$qry->idresi,'<input type="button" class="btn btn-success" value="Sebelumnya">'); ?>
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
