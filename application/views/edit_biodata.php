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
                <h5><p> <font color="red"> Wajib*</font></p></h5>
            </div>
       <div class="box-body">
        <?=$this->session->flashdata('pesan')?>
            <!-- /.box-header -->
            <!-- form start -->
              <!-- form start -->

         <form class="form-horizontal" id="form" action="<?php echo site_url('biodata/update'); ?>" method="post" enctype="multipart/form-data" >
         <?php foreach($biodata as $u){ ?>
         <ol type="1">
         <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nama Lengkap (sesuai KTP)<font color="red">*</font></li></label>
    
        <div class="col-lg-4">
        <input type="text" name="idproposal"  class="form-control" value="<?php echo $u->idproposal ?>" >

           <input type="hidden" name="idresi" placeholder="No resi" class="form-control"  value="<?php echo $u->idresi ?>"  >
            <input type="text" name="nama" placeholder="Nama Lengkap (sesuai KTP)" class="form-control" id="nama" value="<?php echo $u->nama ?>" >
             <div style="color: red;" id="invalid-nama" class="error_msg"></div>
        </div>
        <div class="col-lg-3">
            <input type="file" name="upload_ktp" class="form-control" id="upload_ktp" value="<?php echo $u->upload_ktp ?>" >
            <div style="color: red;" id="invalid-upload_ktp" class="error_msg"></div>
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label"><li>Upload Proposal<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="file" name="proposalk" class="form-control" id="proposalk" value="<?php echo $u->proposalk ?>" >
            <div style="color: red;" id="invalid-proposalk" class="error_msg"></div>
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nama Lembaga</li></label>
        <div class="col-lg-3">
            <input type="text" name="lembaga" class="form-control" id="lembaga" value="<?php echo $u->lembaga ?>">
        </div>
        </div>
    <div class="form-group">
        <label class="col-lg-3 control-label" ><li>Tempat Tanggal lahir<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <input type="text" name="ta_lahir" placeholder="Tempat lahir" id="ta_lahir" class="form-control" value="<?php echo $u->ta_lahir ?>">
            <div style="color: red;" id="invalid-ta_lahir" class="error_msg"></div>
        </div>
    <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right"  id="tgl_l" name="tgl_l" value="<?php echo $u->tgl_l ?>">
                </div>
                <div style="color: red;" id="invalid-tgl_l" class="error_msg"></div>
        </div>
    
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Jenis Kelamin<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin" value="<?php echo $u->jenis_kelamin ?>">
                 <option value="">--pilih--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <div style="color: red;" id="invalid-jenis_kelamin" class="error_msg"></div>
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Status Perkawinan<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <select name="status_kawin" id="status_kawin" class="form-control" value="<?php echo $u->status_kawin ?>">
            <option value="">Status Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Belum kawin">Belum kawin</option>
            </select>
            <div style="color: red;" id="invalid-status_kawin" class="error_msg"></div>
        </div>
     <div class="col-lg-2">
            <input type="text" name="jml_anak" placeholder="Jumlah Anak" id="jml_anak" class="form-control" value="<?php echo $u->jml_anak?>" >
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pekerjaan<font color="red">*</font></li></label>
        <div class="col-lg-2">
    
            <select name="pekerjaan" class="form-control" id="pekerjaan" value="<?php echo $u->pekerjaan?>">
                <option value="">Pilih Pekerjaan</option>
                <option value="Peg Negeri">Peg Negeri</option>
                <option value="BUMN">BUMN</option>
                <option value="Swasta">Swasta</option>
                <option value="Wirasuasta">Wirasuasta</option>
            </select>
             <div style="color: red;" id="invalid-pekerjaan" class="error_msg"></div>
        </div>
    <div class="col-lg-3">
    <input type="text" name="nmkerja" placeholder="Nama Pekerjaan" class="form-control" value="<?php echo $u->nmkerja?>" >
     <div style="color: red;" id="invalid-nmkerja" class="error_msg"></div>
    </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Alamat Rumah (Jln,Rt,Rw,No)<font color="red">*</font></li></label>
        <div class="col-lg-6">
          <input type="text" name="alamat_rumah"  class="form-control" value="<?php echo $u->alamat_rumah?>" >
            <div style="color: red;" id="invalid-alamat_rumah" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Provinsi<font color="red">*</font></li></label>
       <div class="col-lg-6">
    <input type="text" name="provinsi" class="form-control" value="<?php echo $u->provinsi?>" >
<div style="color: red;" id="invalid-provinsi" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kota/Kabupaten<font color="red">*</font></li></label>
        <div class="col-lg-6">
            <input type="text" name="ktkb" class="form-control" value="<?php echo $u->ktkb?>"  >
<div style="color: red;" id="invalid-ktkb" class="error_msg"></div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kecamatan<font color="red">*</font></li></label>
        <div class="col-lg-6">
        <input type="text" name="kcamatan" class="form-control" value="<?php echo $u->kcamatan?>">
        <div style="color: red;" id="invalid-kcamatan" class="error_msg"></div>
    </div>
     
    </div>
  
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kelurahan/Desa<font color="red">*</font></li></label>
        <div class="col-lg-6">
 <input type="text" name="klurah" class="form-control" value="<?php echo $u->klurah?>" >
 <div style="color: red;" id="invalid-klurah" class="error_msg"></div>
        </div>

    </div>

  
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Kode Pos<font color="red">*</font></li></label>
        <div class="col-lg-2">
             <input type="text" name="kode_pos" class="form-control" value="<?php echo $u->kode_pos?>" >
            <div style="color: red;" id="invalid-kode_pos" class="error_msg"></div>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nomer Telepon Rumah<font color="red">*</font></li></label>
        <div class="col-lg-3">
             <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="tlpr" id="tlpr" pattern="[0-9]{10}" title="Nomer Telepon Rumah harus berjumalah 10 digit" value="<?php echo $u->tlpr?>">
                </div>
                <div style="color: red;" id="invalid-tlpr" class="error_msg"></div>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Nomer KK<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="No_kk" class="form-control" id="No_kk" value="<?php echo $u->No_kk?>">
             <div style="color: red;" id="invalid-No_kk" class="error_msg"></div>
        </div>
    <div class="col-lg-3">
            <input type="file" name="upload_kk" class="form-control" id="upload_kk" value="<?php echo $u->upload_kk?>">
             <div style="color: red;" id="invalid-upload_kk" class="error_msg"></div>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Berlaku sampai dengan<font color="red">*</font></li></label>
        <div class="col-lg-2">
            <div class="input-group date">
                  <div class="input-group-addon">
                  </div>
                  <input type="text" class="form-control pull-right" id="bsd" name="bsd" value="<?php echo $u->bsd?>">
                </div>
                <div style="color: red;" id="invalid-bsd" class="error_msg"></div>
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-3 control-label"><li>Status Tempat tinggal<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <select name="status_tinggal" class="form-control" id="status_tinggal" value="<?php echo $u->status_tinggal?>">
            <option value="">Status Tempat Tinggal</option>
          <option value="Kontrak">Kontrak</option>
        <option value="Sewa">Sewa</option>
         <option value="Lain-lain">Lain-lain</option>
            </select>
            <div style="color: red;" id="invalid-status_tinggal" class="error_msg"></div>
        </div>

        </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pendidikan formal terakhir<font color="red">*</font></li></label>
        <div class="col-lg-3">
            <input type="text" name="pendidikan_f" class="form-control" id="pendidikan_f" value="<?php echo $u->pendidikan_f?>">
             <div style="color: red;" id="invalid-pendidikan_f" class="error_msg"></div>
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-3 control-label"><li>Pelatihan/kursus yang pernah diikuti</li></label>
        <div class="col-lg-3">
            <input type="text" name="plt_k" class="form-control" id="plt_k" value="<?php echo $u->plt_k?>">
        </div>
        <div style="color: red;" id="invalid-plt_k" class="error_msg"></div>
    </div>
    <?php } ?>
</ol>
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
