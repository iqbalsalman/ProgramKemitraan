<?php
 if(!$this->session->userdata('username')){
            echo '<script type="text/javascript">window.alert("Maaf anda harus Login Terlebih dahulu!")
					  window.location.href="login"</script>';
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
          
        nama:{ 
             required: true,
          },
        ta_lahir:{ 
             required: true,
          },
          tgl_l : {
            required : true,
          },

          jenis_kelamin : {
            required : true,
          },
          status_kawin : {
            required : true,
          },
          pekerjaan : {
            required : true,
          },
        nmkerja : {
          required: true,
        },
        alamat_rumah:{ 
             required: true,
        },
        provinsi:{ 
             required: true,
        },
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
         proposalk : {
          required : true,
        },
        pendidikan_f : {
          required : true,
        }
      },
        messages: {
         
     nama:{ 
             required: "Nama Lengkap (sesuai KTP) wajib diisi",
          },
        ta_lahir:{ 
             required: "Tempat wajib diisi",
          },
          tgl_l : {
            required : "Tanggal Lahir wajib diisi",
          },

          jenis_kelamin : {
            required : "Jenis kelamin wajib diisi",
          },
          status_kawin : {
            required : "Status perkawinan wajib diisi",
          },
          pekerjaan : {
            required : "Pekerjaan wajib diisi",
          },
        nmkerja : {
          required: "Nama Pekerjaan wajib diisi",
        },
        alamat_rumah:{ 
             required: "Alamat Rumah (Jln,Rt,Rw,No) wajib diisi",
        },
        provinsi:{ 
             required: "Provinsi wajib diisi",
        },
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
         proposalk : {
          required : "Proposal harus diupload",
        },
        pendidikan_f : {
          required : "Pendidikan formal wajib diisi",
            }

        }
     });
    })($);
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
     $(function(){

$.ajaxSetup({
type:"POST",
url: "<?php echo site_url('biodata/ambil_data') ?>",
cache: false,
});

$("#provinsi").change(function(){

var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kabupaten',id:value},
success: function(respond){
$("#ktkb").html(respond);
}
})
}

});


$("#ktkb").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kecamatan',id:value},
success: function(respond){
$("#kcamatan").html(respond);
}
})
}
})

$("#kcamatan").change(function(){
var value=$(this).val();
if(value>0){
$.ajax({
data:{modul:'kelurahan',id:value},
success: function(respond){
$("#klurah").html(respond);
}
})
} 
})

})

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
              
              I. Biodata Calon Mitra Binaan
              
              </b>
              </h3>
            </div>
			 <div class="box-body">
			  <?=$this->session->flashdata('pesan')?>
  
          <?php foreach ($cek as $data) {
            # code...
          ?>
         <form class="form-horizontal" id="form" method="post" enctype="multipart/form-data" >
         <ol type="1">
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nama Lengkap (sesuai KTP)</li></label>
		
        <div class="col-lg-4">
          <?php echo $data->nama ?>
             <div style="color: red;" id="invalid-nama" class="error_msg"></div>
        </div>
        <div class="col-lg-3">
          <img img width=32 height=32 src="http://localhost/pk/asset/img/biodata/<?=$data->upload_kk?>">
            <div style="color: red;" id="invalid-upload_ktp" class="error_msg"></div>
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label"><li>Upload Proposal<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <a href="http://localhost/pk/asset/img/biodata/<?=$data->proposalk?>"><img width=32 height=32 src="http://localhost/pk/asset/img2/pdf.png"></a>
            <div style="color: red;" id="invalid-proposalk" class="error_msg"></div>
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nama Lembaga</li></label>
        <div class="col-lg-3">
               <?php echo $data->lembaga ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" ><li>Tempat Tanggal lahir<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <?php echo $data->ta_lahir ?>
        </div>
		<div class="col-lg-2">
            
                  <?php echo $data->tgl_l ?>
        </div>
		
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jenis Kelamin<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <?php echo $data->jenis_kelamin ?>
            <div style="color: red;" id="invalid-jenis_kelamin" class="error_msg"></div>
        </div>
    </div>
	 <div class="form-group">
        <label class="col-lg-3 control-label"><li>Status Perkawinan<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <?php echo $data->status_kawin ?>
            <div style="color: red;" id="invalid-status_kawin" class="error_msg"></div>
        </div>
		 <div class="col-lg-2">
             <?php echo $data->jml_anak ?>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label"><li>Pekerjaan<font color="red">*</font></li></label>
        <div class="col-lg-2">
      <?php echo $data->pekerjaan ?>
             <div style="color: red;" id="invalid-pekerjaan" class="error_msg"></div>
        </div>
		<div class="col-lg-3">
	<?php echo $data->nmkerja?>
     <div style="color: red;" id="invalid-nmkerja" class="error_msg"></div>
		</div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Alamat Rumah (Jln,Rt,Rw,No)<font color="red">*</font></li></label>
        <div class="col-lg-6">
           <?php echo $data->alamat_rumah?>
            <div style="color: red;" id="invalid-alamat_rumah" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Provinsi<font color="red">*</font></li></label>
        <div class="col-lg-6">
           <?php echo $data->Provinsi?>
            <div style="color: red;" id="invalid-alamat_rumah" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kota/Kabupaten<font color="red">*</font></li></label>
        <div class="col-lg-6">
            <?php echo $data->Kabupaten?>
<div style="color: red;" id="invalid-ktkb" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kecamatan<font color="red">*</font></li></label>
        <div class="col-lg-6">
        <?php echo $data->Kecamatan?>
        <div style="color: red;" id="invalid-kcamatan" class="error_msg"></div>
    </div>
     
    </div>
  
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kelurahan/Desa<font color="red">*</font></li></label>
        <div class="col-lg-6">
<?php echo $data->Kelurahan?>
 <div style="color: red;" id="invalid-klurah" class="error_msg"></div>
        </div>

    </div>

	
	<div class="form-group">
        <label class="col-lg-3 control-label"><li>Kode Pos<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <?php echo $data->kode_pos?>
            
            <div style="color: red;" id="invalid-kode_pos" class="error_msg"></div>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label"><li>Nomer Telepon Rumah<font color="red">*</font></li></label>
        <div class="col-lg-3">
              <?php echo $data->tlpr?>
                <div style="color: red;" id="invalid-tlpr" class="error_msg"></div>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label"><li>Nomer KK<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <?php echo $data->No_kk?>
             <div style="color: red;" id="invalid-No_kk" class="error_msg"></div>
        </div>
		<div class="col-lg-3">
            <img img width=32 height=32 src="http://localhost/pk/asset/img/biodata/<?=$data->upload_kk?>">
             <div style="color: red;" id="invalid-upload_kk" class="error_msg"></div>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label"><li>Berlaku sampai dengan<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <?php echo $data->bsd?>
                <div style="color: red;" id="invalid-bsd" class="error_msg"></div>
        </div>
    </div>
	 <div class="form-group">
        <label class="col-lg-3 control-label"><li>Status Tempat tinggal<font color="red">*</font></li></label>
        <div class="col-lg-3">
           <?php echo $data->status_tinggal?>
            <div style="color: red;" id="invalid-status_tinggal" class="error_msg"></div>
        </div>

        </div>
	<div class="form-group">
        <label class="col-lg-3 control-label"><li>Pendidikan formal terakhir<font color="red">*</font></li></label>
        <div class="col-lg-3">
             <?php echo $data->pendidikan_f?>
             <div style="color: red;" id="invalid-pendidikan_f" class="error_msg"></div>
        </div>
    </div>
	<div class="form-group">
        <label class="col-lg-3 control-label"><li>Pelatihan/kursus yang pernah diikuti</li></label>
        <div class="col-lg-3">
        <?php echo $data->plt_k?>
        </div>
        <div style="color: red;" id="invalid-plt_k" class="error_msg"></div>
    </div>
</ol>
</form>
<?php } ?>
                 </div>
          <!-- /.box -->

          <!-- /.box -->
         
          <!-- /.box -->

        </div>
        <!--/.col (right) -->
      </div>
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">
              <b>
      
             II  Data Perusahaan
              
              </h3>
            </div>
       <div class="box-body">
        <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->
              <?php foreach ($qry as $data ){ ?>
                
             
             <form class="form-horizontal"  id="form"  action="<?php echo site_url('perusahaan/insert'); ?>" method="post" enctype="multipart/form-data">
             <ol type="1">
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nama Perusahaan/Koperasi<font color="red">*</font></li></label>
    
        <div class="col-lg-5">
            <?php echo $data->nama_perusahaan?>
        </div>
        <div style="color: red;" id="invalid-nama_perusahaan" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" ><li>Nama Pemilik/Ketua Koperasi<font color="red">*</font></li></label>
        <div class="col-lg-4">
             <?php echo $data->tpemilik_koprasi?>
        </div>
        <div style="color: red;" id="invalid-tpemilik_koprasi" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pernah menjadi mitra binaan PKBL Perum Peruri</li></label>
    <div class="col-lg-2">
            <div class="input-group date">
                  <?php echo $data->p_binaan_pk?>
                <div style="color: red;" id="invalid-p_binaan_pk" class="error_msg"></div>
        </div>
     <div class="col-lg-2">
             <?php echo $data->kd_binaan?>
        </div>
        <div style="color: red;" id="invalid-kd_binaan" class="error_msg"></div>
    </div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Sektot Usaha<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <?php echo $data->bidang_usaha?>
             <div style="color: red;" id="invalid-bidang_usaha" class="error_msg"></div>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jenis Usaha<font color="red">*</font></li></label>
    <div class="col-lg-3">
    <?php echo $data->jenis_usaha?>
    </div>
     <div style="color: red;" id="invalid-jenis_usaha" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Alamat Tempat Usaha (Jln,Rt,Rw,No)<font color="red">*</font></li></label>
        <div class="col-lg-6">
            <?php echo $data->alamat_perusahaan?>
        </div>
         <div style="color: red;" id="invalid-alamat_perusahaan" class="error_msg"></div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Provinsi<font color="red">*</font></li></label>
       <div class="col-lg-6">
  <?php echo $data->provinsi?>
<div style="color: red;" id="invalid-provinsi_p" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kota/Kabupaten<font color="red">*</font></li></label>
        <div class="col-lg-6">
            <?php echo $data->kabupaten?>
<div style="color: red;" id="invalid-kota_perusahaan" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kecamatan<font color="red">*</font></li></label>
        <div class="col-lg-6">
        <?php echo $data->kecamatan?>
        <div style="color: red;" id="invalid-kecamatan_perusahaan" class="error_msg"></div>
    </div>
     
    </div>
  
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kelurahan/Desa<font color="red">*</font></li></label>
        <div class="col-lg-6">
 <?php echo $data->kelurahan?>
 <div style="color: red;" id="invalid-kelurahan_perusahaan" class="error_msg"></div>
        </div>

    </div>

  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kode Pos<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <?php echo $data->kode_pos_p?>
        </div>
         <div style="color: red;" id="invalid-kode_pos_p" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nomer Telepon Perusahaan<font color="red">*</font></li></label>
        <div class="col-lg-3">
             <?php echo $data->notlp_perusahaan?>
        </div>
         <div style="color: red;" id="invalid-notlp_perusahaan" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Struktur Organisasi<font color="red">*</font></li></label>
    <div class="col-lg-3">
            <?php echo $data->upload_struk_organisasi?>
        </div>
         <div style="color: red;" id="invalid-upload_struk_organisasi" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Status Tempat Usaha<font color="red">*</font></li></label>
        <div class="col-lg-2">
             <?php echo $data->stt_usaha?>
             <div style="color: red;" id="invalid-stt_usaha" class="error_msg"></div>
        </div>
        <div class="col-lg-2">
            <?php echo $data->thn_sttusaha?>
             <div style="color: red;" id="invalid-stt_usaha" class="error_msg"></div>
        </div>
    
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Izin Usaha</li></label>
    <div class="col-lg-2">
            <?php echo $data->siup?>
    </div>
     <div style="color: red;" id="invalid-siup" class="error_msg"></div>
      <div class="col-lg-2">
            <?php echo $data->tdp?>
    </div>
     <div style="color: red;" id="invalid-tdp" class="error_msg"></div>
      <div class="col-lg-2">
            <?php echo $data->ho?>
    </div>
     <div style="color: red;" id="invalid-ho" class="error_msg"></div>
      <div class="col-lg-2">
             <?php echo $data->situ?>
    </div>
     <div style="color: red;" id="invalid-situ" class="error_msg"></div>
     
    </div>
   <div class="form-group">
    <label class="col-lg-3 control-label"></label>
     <div class="col-lg-2">
            <?php echo $data->sku?>
    </div>
     <div style="color: red;" id="invalid-sku" class="error_msg"></div>
    <div class="col-lg-2">
            <?php echo $data->bdn_hukum?>
    </div>
     <div style="color: red;" id="invalid-bdn_hukum" class="error_msg"></div>
   </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>NPWP<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <?php echo $data->npwp?>
        </div>
         <div style="color: red;" id="invalid-npwp" class="error_msg"></div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label"><li>Sertifikat Tanah<font color="red">*</font></li></label>
        <div class="col-lg-3">
             <?php echo $data->nmpgang_hak?>
        </div>
         <div style="color: red;" id="invalid-nmpgang_hak" class="error_msg"></div>
        <div class="col-lg-3">
            <?php echo $data->lokasi_tanah?>
        </div>
         <div style="color: red;" id="invalid-lokasi_tanah" class="error_msg"></div>
         <div class="col-lg-2">
            <?php echo $data->no_tanah?>
        </div>
         <div style="color: red;" id="invalid-no_tanah" class="error_msg"></div>
    </div>
    <div class="form-group">
    <label class="col-lg-3 control-label"></label>
      <div class="col-lg-2">
             <?php echo $data->luas_tanah?>
        </div>
         <div style="color: red;" id="invalid-luas_tanah" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Surat Pengantar Instansi<font color="red">*</font></li></label>
        <div class="col-lg-3">
             <a href="http://localhost/pk/asset/img/perusahaan/<?=$data->srs_tansi?>"><img width=32 height=32 src="http://localhost/pk/asset/img2/pdf.png"></a>
        </div>
         <div style="color: red;" id="invalid-srs_tansi" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Berdiri sejak tahun<font color="red">*</font></li></label>
    <div class="col-lg-2">
       <?php echo $data->berdiri_tahun?>
           <div style="color: red;" id="invalid-berdiri_tahun" class="error_msg"></div>
         </div>
     </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>jumlah Karyawan/Tenaga Kerja<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <?php echo $data->jml_karyawan?>
        </div>
         <div style="color: red;" id="invalid-jml_karyawan" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>jumlah Tenaga Ahli</li></label>
        <div class="col-lg-3">
           <?php echo $data->jml_teng_ahli?>
        </div>
         <div style="color: red;" id="invalid-jml_teng_ahli" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jumlah anggota (Koperasi)</li></label>
        <div class="col-lg-3">
           <?php echo $data->jml_pengurus?>
        </div>
         <div style="color: red;" id="invalid-jml_pengurus" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li><dt>Nomer Rekening koran</dt></li></label>
        <div class="col-lg-3">
             <?php echo $data->rekening_koran?>
        </div>
         <div style="color: red;" id="invalid-rekening_koran" class="error_msg"></div>
    </div>
    <dl>
  <div class="form-group">
        <label class="col-lg-3 control-label"><dd>- Nama Ban</dd></label>
        <div class="col-lg-3">
            <?php echo $data->nama_bank_koran?>
        </div>
         <div style="color: red;" id="nama_bank_koran" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><dd>- Alamat Bank</dd></label>
       <div class="col-lg-5">
            <?php echo $data->alamat_bank_koran?>
        </div>
         <div style="color: red;" id="invalid-alamat_bank_koran" class="error_msg"></div>
    </div>
    </dl>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li><dt>Nomer Buku Tabungan</dt></li></label>
        <div class="col-lg-3">
              <?php echo $data->nomer_buku_tabungan?>
              </div>
         <div style="color: red;" id="invalid-nomer_buku_tabungan" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><dd>- Nama Bank</dd></label>
        <div class="col-lg-4">
             <?php echo $data->nama_bank?>
        </div>
         <div style="color: red;" id="invalid-nama_bank" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><dd>- Alamat Bank</dd></label>
       <div class="col-lg-5">
             <?php echo $data->alamat_tabungan?>
        </div>
         <div style="color: red;" id="invalid-alamat_tabungan" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Selama ini pernah mendapatkan bantuan dana dari BUMN/Instansi/perbankan</li></label>
       <div class="col-lg-5">
            <?php echo $data->bantuan_l?>
        </div>
         <div style="color: red;" id="invalid-bantuan_l" class="error_msg"></div>
    </div>
    </ol>
</form>
 <?php } ?>

     
          </div>
          <!-- /.box -->

          <!-- /.box -->
         
          <!-- /.box -->

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
              <h3 class="box-title"><b>III Data Keuangan</b></h3>
              <h5><p> <font color="red"> Wajib*</font></p></h5>
            </div>
       <div class="box-body">
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->
               <?php  foreach ($query as $data) {
                # code...
              ?>
       
       
                     <form class="form-horizontal" id="form" action="<?php echo site_url('keuangan/insert'); ?>" method="post" enctype="multipart/form-data">
                      <ol type="1">
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Neraca (2 tahun trakhir)</li></label>
     <div class="col-lg-3">
            <?php echo $data->thn1?>
        </div>
         <div style="color: red;" id="invalid-thn1" class="error_msg"></div>
   
         <div style="color: red;" id="invalid-thn2" class="error_msg"></div>
          <div class="col-lg-3">
            <?php echo $data->thn2?>
        </div>
    </div>
     <div class="form-group">
    <label class="col-lg-3 control-label"><b>Aktiva / Asset / Kekayaan</b></label>
    </div>
    </ol>
     <ol type="a">
    <div class="form-group">
        <label class="col-lg-3 control-label" ><li>kas<font color="red">*</font></li></label>
        <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->kas1,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-kas1" class="error_msg"></div>
    <div class="col-lg-3">
            <?php echo "Rp " . number_format($data->kas2,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-kas2" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Bank<font color="red">*</font></li></label>
    <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->bank1,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-bank1" class="error_msg"></div>
     <div class="col-lg-3">
            <?php echo "Rp " . number_format($data->bank2,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-bank2" class="error_msg"></div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Piuatang<font color="red">*</font></li></label>
        <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->piutang1,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-piutang1" class="error_msg"></div>
    <div class="col-lg-3">
           <?php echo "Rp " . number_format($data->piutang2,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-piutang2" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Persedian Baranga<font color="red">*</font></li></label>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->pes_barang1,2,',','.')?>
    </div>
    <div style="color: red;" id="invalid-pes_barang1" class="error_msg"></div>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->pes_barang2,2,',','.')?>
    </div>
    <div style="color: red;" id="invalid-pes_barang2" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Peralatan Produksi<font color="red">*</font></li></label>
        <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->per_produksi1,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-per_produksi1" class="error_msg"></div>
     <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->per_produksi2,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-per_produksi2" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Peratan Kantor dan aktifa lain<font color="red">*</font></li></label>
        <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->per_kantor1,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-per_kantor1" class="error_msg"></div>
    <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->per_kantor1,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-per_kantor2" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Bangunan<font color="red">*</font></li></label>
        <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->bangunan1,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-bangunan1" class="error_msg"></div>
    <div class="col-lg-3">
       <?php echo "Rp " . number_format($data->bangunan2,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-bangunan2" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Tanah<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <?php echo "Rp " . number_format($data->tanah1,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-tanah1" class="error_msg"></div>
     <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->tanah2,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-tanah2" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Lain-lain<font color="red">*</font></li></label>
        <div class="col-lg-3">
           <?php echo "Rp " . number_format($data->lain1,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-lain1" class="error_msg"></div>
     <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->lain1,2,',','.')?>
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
           <?php echo "Rp " . number_format($data->htnb1,2,',','.')?>
        </div>
    <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->htnb2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Hutang Dagang</li></label>
        <div class="col-lg-3">
       
        <?php echo "Rp " . number_format($data->hutang_dagang1,2,',','.')?>    
        </div>
    <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->hutang_dagang1,2,',','.')?> 
            
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Hutang lain-lain</li></label>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->hlain1,2,',','.')?> 
        </div>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->hlain2,2,',','.')?> 
            
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Modal</li></label>
        <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->modal1,2,',','.')?> 
          
        </div>
    <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->modal2,2,',','.')?> 
           
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Laba ditahan</li></label>
        <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->laba_ditahan1,2,',','.')?> 
        </div>
    <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->laba_ditahan2,2,',','.')?> 
           
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
      <?php echo $data->nama_bank?> 
        </div>
     </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Pokok Pinjaman</label>
        <div class="col-lg-4">
         <?php echo "Rp " . number_format($data->pok_pinjaman,2,',','.')?> 
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Besar Bunga</label>
        <div class="col-lg-2">
         <?php echo "Rp " . number_format($data->besar_Bunga,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Prosentasi Bunga</label>
        <div class="col-lg-2">
        <?php echo "Rp " . number_format($data->prosentasi_bunga,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa Pinjaman</label>
        <div class="col-lg-4">
        <?php echo $data->sisa_pinjaman?>   
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa kali ansur</label>
        <div class="col-lg-2">
         <?php echo "Rp " . number_format($data->sisa_kali_ansur,2,',','.')?>

        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah angsuran / bln</label>
       <div class="col-lg-4">
         <?php echo "Rp " . number_format($data->jml_angsuran,2,',','.')?>
        </div>
    </div>
    <div class="form-group">
    <label class="col-lg-3 control-label"><b><li>Hutang Dangang</li></b></label>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Nama Perusahaan</label>
        <div class="col-lg-5">
        <?php echo $data->nama_perusahaan_d?>
            
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Pokok Pinjaman</label>
       <div class="col-lg-4">
         <?php echo "Rp " . number_format($data->pokok_pinjaman_dagang,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Besar Bungan</label>
        <div class="col-lg-2">
           <?php echo "Rp " . number_format($data->Besar_bunga_dagang,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Prosentase Bunga</label>
       <div class="col-lg-2">
       <?php echo "Rp " . number_format($data->prosentase_bunga_dagang,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa Pinjaman</label>
       <div class="col-lg-4">
        <?php echo "Rp " . number_format($data->sisa_pinjaman_dagang,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa kali angsuran</label>
       <div class="col-lg-2">
      <?php echo "Rp " . number_format($data->sisa_angsuran_dagang,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah angsuran / bln</label>
       <div class="col-lg-4">
        <?php echo "Rp " . number_format($data->jml_angsuran_dagang,2,',','.')?>     
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
        <?php echo $data->nama_bumn?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Pokok Pinjaman</label>
       <div class="col-lg-4">
          <?php echo "Rp " . number_format($data->pokok_pinjaman_bumn,2,',','.')?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"></label>
       <div class="col-lg-2">
       <?php echo "Rp " . number_format($data->besar_bunga_bumn,2,',','.')?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Prosentase Bunga</label>
       <div class="col-lg-2">
       <?php echo "Rp " . number_format($data->prosentase_bunga_bumn,2,',','.')?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Sisa Pinjaman</label>
       <div class="col-lg-4">
        <?php echo "Rp " . number_format($data->sisa_pinjaman_bumn,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa kali angsuran</label>
       <div class="col-lg-2">
    <?php echo "Rp " . number_format($data->sisa_angsuran_bumn,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah angsuran / bln</label>
       <div class="col-lg-4">
       <?php echo "Rp " . number_format($data->jml_angsuran_bumn,2,',','.')?>
        </div>
    </div>
    
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nama Badan / Perorangan</li></label>
       <div class="col-lg-5">
       <?php echo $data->nama_badan?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Pokok Pinjaman</label>
       <div class="col-lg-4">
       <?php echo "Rp " . number_format($data->pokok_pinjaman_badan,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Besar Bunga</label>
       <div class="col-lg-2">
        <?php echo "Rp " . number_format($data->besar_bunga_badan,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Prosentase Bunga</label>
       <div class="col-lg-2">
        <?php echo "Rp " . number_format($data->prosentase_bunga_badan,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa Pinjama</label>
       <div class="col-lg-4">
        <?php echo "Rp " . number_format($data->sisa_pinjaman_badan,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Sisa kali angsuran</label>
       <div class="col-lg-2">
       <?php echo "Rp " . number_format($data->sisa_pinjaman_badan,2,',','.')?> 
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Jumlah angsuran / bln</label>
       <div class="col-lg-4">
       <?php echo "Rp " . number_format($data->jml_angsuran_badan,2,',','.')?> 
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
    
         <div class="col-lg-3">
        <?php echo $data->thn_pendapatan1?> 
    
        </div> 
    <div class="col-lg-3">
       <?php echo $data->thn_pendapatan2?> 
    
        </div> 
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" >Penjualan</label>
        <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->penjualanr_s1,2,',','.')?> 
        </div>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->penjualanr_s2,2,',','.')?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Penjualan</label>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->penjualan_s1,2,',','.')?>
        </div>
     <div class="col-lg-3">
      <?php echo "Rp " . number_format($data->penjualan_s2,2,',','.')?>
        </div>
    </div>
    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Hasil Penjualan / omset Harga pokok penjualan (HPP)</b></li></label>
          </div>
   <div class="form-group">
        <label class="col-lg-3 control-label">Bahan Baku<font color="red">*</font></label>
        <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->bahan_baku1,2,',','.')?>
        </div>
         <div style="color: red;" id="invalid-bahan_baku1" class="error_msg"></div>
    <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->bahan_baku2,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-bahan_baku2" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Bahan Penolong<font color="red">*</font></label>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->bahan_penolong1,2,',','.')?>
     <div style="color: red;" id="invalid-bahan_penolong1" class="error_msg"></div>
    </div>
    <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->bahan_penolong2,2,',','.')?>
    </div>
     <div style="color: red;" id="invalid-bahan_penolong2" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label">Lain Lain<font color="red">*</font></label>
        <div class="col-lg-3">
       <?php echo "Rp " . number_format($data->hplain_lain1,2,',','.')?>
        </div>
           <div style="color: red;" id="invalid-hplain_lain1" class="error_msg"></div>
     <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->hplain_lain2,2,',','.')?>
        </div>
        <div style="color: red;" id="invalid-hplain_lain2" class="error_msg"></div>
    </div>
    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Biaya Administrasi & umum/operasional</b></li></label>
          </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Administrasi / ATK<font color="red">*</font></label>
        <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->adminis_atk1,2,',','.')?>
        </div>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->adminis_atk2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Penjualan<font color="red">*</font></label>
        <div class="col-lg-3">
          <?php echo "Rp " . number_format($data->biaya_penjualan1,2,',','.')?>
        </div>
     <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->biaya_penjualan2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Telepon<font color="red">*</font></label>
        <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->telepon1,2,',','.')?>
        </div>
     <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->telepon2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Air<font color="red">*</font></label>
        <div class="col-lg-3">
          <?php echo "Rp " . number_format($data->air1,2,',','.')?>
        </div>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->air2,2,',','.')?>
            
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Listrik<font color="red">*</font></label>
        <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->listrik1,2,',','.')?>
        </div>
    <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->listrik2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Penyusutan<font color="red">*</font></label>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->biaya_penyusutan1,2,',','.')?>
        </div>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->biaya_penyusutan2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Gaji Pengusaha<font color="red">*</font></label>
        <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->biaya_gaji1,2,',','.')?>
        </div>
    <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->biaya_gaji2,2,',','.')?>
           
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Tenaga Kerja<font color="red">*</font></label>
        <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->Biaya_tenaga_kerja1,2,',','.')?>
        </div>
    <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->Biaya_tenaga_kerja2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Kesehatan<font color="red">*</font></label>
     <div class="col-lg-3">
      <?php echo "Rp " . number_format($data->biaya_kesehatan1,2,',','.')?>
        </div>
     <div class="col-lg-3">
             <?php echo "Rp " . number_format($data->biaya_kesehatan2,2,',','.')?>
        </div>
     </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Transportasi<font color="red">*</font></label>
        <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->biaya_transportasi1,2,',','.')?>
        </div>
     <div class="col-lg-3">
     <?php echo "Rp " . number_format($data->biaya_transportasi2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Pendidikan & Latihan</label>
        <div class="col-lg-3">
       <?php echo "Rp " . number_format($data->biaya_pendidikan1,2,',','.')?>
        </div>
     <div class="col-lg-3">
       <?php echo "Rp " . number_format($data->biaya_pendidikan1,2,',','.')?>
        </div>
        </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Promosi / Pemasaran<font color="red">*</font></label>
        <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->biaya_promosi1,2,',','.')?>
        </div>
     <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->biaya_promosi2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Rumah Tangga<font color="red">*</font></label>
        <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->biaya_rumah_tangga1,2,',','.')?>
        </div>
      <div class="col-lg-3">
       <?php echo "Rp " . number_format($data->biaya_rumah_tangga2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label">Biaya Anak Sekolah<font color="red">*</font></label>
        <div class="col-lg-3">
       <?php echo "Rp " . number_format($data->biaya_sekolah1,2,',','.')?>
        </div>
    <div class="col-lg-3">
       <?php echo "Rp " . number_format($data->biaya_sekolah2,2,',','.')?>
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
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><b> V Kegitan Usaha </b></h3>
               <h5><p> <font color="red"> Wajib*</font></p></h5>
            </div>
       <div class="box-body">
        <?=$this->session->flashdata('pesan')?>
          
          
        <form class="form-horizontal"  id="form"  method="post" enctype="multipart/form-data">
         <ol type="1">
         <div class="form-group">
          <label class="col-lg-3 control-label"><li><b><dt>Produksi</b></dt></li></label>
          </div>
           <ol type="a">
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jenis Produksi</li></label>
        <div class="col-lg-4">
        <?php echo $data->jenis_produksi?>
           
        </div>
    </div>
   
    <div class="form-group">
        <label class="col-lg-3 control-label" ><li>Kapasitas/jumlah Produksi</li></label>
        <div class="col-lg-4">
        <?php echo $data->kapasitas?>

        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Bahan Baku yang digunakan </li></label>
     <div class="col-lg-3">
         
         <?php echo $data->bahan_baku_produksi?>
            
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Alat Produksi yang dipakaia </li></label>
        <div class="col-lg-3">
           <?php echo $data->alat_produksi?>
           
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Penggunaan Teknologi<font color="red">*</font> </li></label>
     <div class="col-lg-3">
       <?php echo $data->pengunaan_teknologi?>
        </div>
        <div style="color: red;" id="invalid-pengunaan_teknologi" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Desaint<font color="red">*</font> </li></label>
     <div class="col-lg-2">
     <?php echo $data->desaint?>
        </div>
        <div style="color: red;" id="invalid-desaint" class="error_msg"></div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kualita<font color="red">*</font> </li></label>
     <div class="col-lg-2">
     <?php echo $data->kualitas?>
        </div>
        <div style="color: red;" id="invalid-kualitas" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Bahan baku / penolong<font color="red">*</font></li></label>
     <div class="col-lg-3">
     <?php echo $data->bahan_baku_penolong?>
        </div>
      <div style="color: red;" id="invalid-bahan_baku_penolong" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Sumber Bahan Baku<font color="red">*</font></li></label>
     <div class="col-lg-3">
     <?php echo $data->smb_bahan_baku?>
          
        </div>
        <div style="color: red;" id="invalid-smb_bahan_baku" class="error_msg"></div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kebutuhan bahan baku/bln </li></label>
        <div class="col-lg-3">
          <?php echo $data->kebutuhan_bahan_baku?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Omset / bln </li></label>
        <div class="col-lg-3">
        <?php echo "Rp " . number_format($data->omset,2,',','.')?>
        </div>
    </div>
    </ol>
     <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Non Produksi</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jenis Usaha</li></label>
        <div class="col-lg-3">
        <?php echo $data->usaha_non_produksi?>
        
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>omset / bln</li></label>
        <div class="col-lg-2">
        <?php echo "Rp " . number_format($data->omset_non_produksi,2,',','.')?>
        </div>
    </div>
    </ol>
     <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Tenaga kerja (saat ini)</b></li></label>
          </div>
           <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jumlah tenaga kerja</li></label>
        <div class="col-lg-2">
             <?php echo $data->jml_tenaga_kerja?>
           
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pendidikan</li></label>
     <div class="col-lg-3">
     <?php echo $data->pendidikan?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jumlah tenaga ahli bidang perbengkelan</li></label>
       <div class="col-lg-3">
       <?php echo $data->jml_tng_ahli?>
          
        </div> 
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pendidikan / kursus/ pelatihan yang diikuti oleh karyawan</li></label>
         <div class="col-lg-3">
          <?php echo $data->kursus?>
         
        </div> 
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jam kerja karyawan / hari</li></label>
        <div class="col-lg-2">
        <?php echo $data->jama_kerja?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Upah rata-rata/hari (diluar lembur)</li> </label>
    <div class="col-lg-3">
   <?php echo "Rp " . number_format($data->upah_rata,2,',','.')?>
        </div>
     </div>

  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Upah lembur / hari</li></label>
        <div class="col-lg-3">
           <?php echo "Rp " . number_format($data->upah_lembur,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Terdaftar pada jam sostek<font color="red">*</font></li></label>
        <div class="col-lg-3">
          <?php echo $data->terdaftar_jamsostek?>
        </div>
        <div style="color: red;" id="invalid-terdaftar_jamsostek" class="error_msg"></div>
    </div>
    </ol>

    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Pemasaran (saat ini)</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Konsumen<font color="red">*</font></li></label>
        <div class="col-lg-3">
         <?php echo $data->konsumen?>
        </div>
        <div style="color: red;" id="invalid-konsumen" class="error_msg"></div>
    </div>
    <div class="form-group">
    <label class="col-lg-3 control-label"><li>Daerah Pemasaran Ke<li></label>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Lokal (setempat)</li></label>
        <div class="col-lg-3">
         <?php echo $data->lokal_s?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Region (antar Kota/Kab)</li></label>
        <div class="col-lg-3">
         <?php echo $data->regions?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nasional (antar Provinsi)</li></label>
        <div class="col-lg-3">
        <?php echo $data->nasional_p?>
           
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Ekspor (internasional)</li></label>
       <div class="col-lg-3">
        <?php echo $data->ekspor_i?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Distribusi<font color="red">*</font></li></label>
    <div class="col-lg-3">
    <?php echo $data->distribusi?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Sistim Pembayaran</li></label>
    <div class="col-lg-3">
    <?php echo $data->sistem_pembayaran?>
        </div>
    </div>
    </ol>
    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Perkembangan usaha 2 tahun terakhir</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Perkembangan Usaha 2 Tahun terakhir</li></label>
       <div class="col-lg-2">
              <?php echo $data->tahun_usaha1?>
        </div>  
    <div class="col-lg-2">
            <?php echo $data->tahun_usaha2?>
        </div>  
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Tenaga Kerja</li></label>
       <div class="col-lg-2">
       <?php echo $data->tenaga_kerja1?>
        </div>
    <div class="col-lg-2">
     <?php echo $data->tenaga_kerja2?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Produksi / bulan </li></label>
       <div class="col-lg-3">
       <?php echo "Rp " . number_format($data->produksi1,2,',','.')?>
        </div>
    <div class="col-lg-3">
    <?php echo "Rp " . number_format($data->produksi2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Omset rata-rata / bulan</li></label>
       <div class="col-lg-3">
       <?php echo "Rp " . number_format($data->omset_rata1,2,',','.')?>
           
        </div>
    <div class="col-lg-3">
      <?php echo "Rp " . number_format($data->omset_rata2,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Tabungan / bulan</li></label>
       <div class="col-lg-3">
       <?php echo "Rp " . number_format($data->tabungan1,2,',','.')?>
            
        </div>
    <div class="col-lg-3">
         <?php echo "Rp " . number_format($data->tabungan2,2,',','.')?>
        </div>
    </div>
    </ol>
    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Masalah yang dihadapi</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Manajemen</li></label>
       <div class="col-lg-4">
        <?php echo $data->m_manajemen?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Produksi</li></label>
       <div class="col-lg-4">
               <?php echo $data->m_produksi?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pemasaran Produk</li></label>
       <div class="col-lg-4">
        <?php echo $data->pemasaran_produk?>
           
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Penjualan</li></label>
       <div class="col-lg-4">
        <?php echo $data->penjuplan?>
         
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Keuangan</li></label>
       <div class="col-lg-4">
         <?php echo $data->keuangan?>
            
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Lain-lain</li></label>
       <div class="col-lg-4">
         <?php echo $data->m_lain?>
        </div>
    </div>
    </ol>
    <div class="form-group">
          <label class="col-lg-3 control-label"><h4 class="box-title"><b>VI. Bantuan Pinjaman</b></h4></label>
          </div>
           <ol type="1">
             <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Kebutuhan</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jumlah bantuan pinjaman yang dimohon</li></label>
       <div class="col-lg-4">
       <?php echo "Rp " . number_format($data->jml_bantuan_pinajaman,2,',','.')?>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Modal Kerja</li></label>
       <div class="col-lg-4">
        <?php echo "Rp " . number_format($data->modal_kerja,2,',','.')?>
           
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Investasi</li></label>
       <div class="col-lg-4">
            
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Dana yang tersedia</li></label>
       <div class="col-lg-4">
        <?php echo "Rp " . number_format($data->dana_tersedia,2,',','.')?>
           
        </div>
    </div>
    </ol>
      <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Prospek usaha bila telah mendapatkan bantuan</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Prospek usaha</li></label>
       <div class="col-lg-4">
        <?php echo $data->prospek_dana?>
            
        </div>
    </div>
    </ol>
    <div class="form-group">
          <label class="col-lg-3 control-label"><li><b>Kesanggupan membayar pinjaman</b></li></label>
          </div>
          <ol type="a">
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kesanggupan Mengangsur</li></label>
       <div class="col-lg-4">
        <?php echo "Rp " . number_format($data->kasanggupan_angsuran,2,',','.')?>
        </div>
    </div>
    </ol>
    </ol>
</form>
				 <?php }?>
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
