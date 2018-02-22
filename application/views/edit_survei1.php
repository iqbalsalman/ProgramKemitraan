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
            $(document).ready(function () {
                $('#tgl_anggaran').Zebra_DatePicker({
                    dateFormat: "dd-mm-yy",
                    changeMonth: true,
                    changeYear: true,
                    minDate: +1,
                    maxDate: "+2D"
                });
            });
            $(document).ready(function () {
                $('#tgl_berlaku').Zebra_DatePicker({
                    dateFormat: "dd-mm-yy",
                    changeMonth: true,
                    changeYear: true,
                    minDate: +1,
                    maxDate: "+2D"
                });
            });
            $(document).ready(function () {
                $('#thn_binaan').Zebra_DatePicker({
                    dateFormat: "dd-mm-yy",
                    changeMonth: true,
                    changeYear: true,
                    minDate: +1,
                    maxDate: "+2D"
                });
            });
            $(document).ready(function () {
                $('#sls_bina').Zebra_DatePicker({
                    dateFormat: "dd-mm-yy",
                    changeMonth: true,
                    changeYear: true,
                    minDate: +1,
                    maxDate: "+2D"
                });
            });

            $(function () {

                $.ajaxSetup({
                    type: "POST",
                    url: "<?php echo site_url('survei1/ambil_data') ?>",
                    cache: false,
                });

                $("#provinsi_e").change(function () {

                    var value = $(this).val();
                    if (value > 0) {
                        $.ajax({
                            data: {modul: 'kabupaten', id: value},
                            success: function (respond) {
                                $("#kota_kab").html(respond);
                            }
                        })
                    }

                });


                $("#kota_kab").change(function () {
                    var value = $(this).val();
                    if (value > 0) {
                        $.ajax({
                            data: {modul: 'kecamatan', id: value},
                            success: function (respond) {
                                $("#kecamatan").html(respond);
                            }
                        })
                    }
                })

                $("#kecamatan").change(function () {
                    var value = $(this).val();
                    if (value > 0) {
                        $.ajax({
                            data: {modul: 'kelurahan', id: value},
                            success: function (respond) {
                                $("#kelurahan_e").html(respond);
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
                                <li><a href="<?php echo base_url() . "index.php/survei1/survei"; ?>"><i class="fa fa-circle-o"></i>Survei CMB</a></li>

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
                                    <h3 class="box-title"><b>Evaluasi Survei<b></h3>
                                                </div>
                                                <div class="box-body">
                                                    <?= $this->session->flashdata('pesan') ?>
                                                    <!-- /.box-header -->
                                                    <!-- form start -->
                                                    <!-- form start -->

                                                    <form class="form-horizontal" action="<?php echo site_url('survei1/insert'); ?>" method="post" enctype="multipart/form-data">
                                                        <!-- <div class="form-group">
                                                       <label class="col-lg-3 control-label">Tahun Anggaran</label>
                                                   <div class="col-lg-2">
                                                           <div class="input-group date">
                                                                 <div class="input-group-addon">
                                                                 </div>
                                                                 <input type="text" class="form-control pull-right"  id="tgl_anggaran" name="tgl_anggaran" >
                                                               </div>
                                                       </div>
                                                   </div> -->
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label" >Nama Pemilik / Ketua</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="nm_pemilik" placeholder="Nama Pemilik / Ketua " id="Tpemilik_koprasi" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label" >Nomer KTP</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="n_ktp" placeholder="Nomer KTP " id="n_ktp" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Berlaku s/d</label>
                                                            <div class="col-lg-2">
                                                                <div class="input-group date">
                                                                    <div class="input-group-addon">
                                                                    </div>
                                                                    <input type="text" class="form-control pull-right"  id="tgl_berlaku" name="tgl_berlaku" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Nama Usaha</label>
                                                            <div class="col-lg-5">
                                                                <input type="text" name="n_usaha"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Sektor Usaha</label>
                                                            <div class="col-lg-3">
                                                                <select name="sektor_usaha" class="form-control">
                                                                    <option value="Industri">Industri</option>
                                                                    <option value="Perdagangan">Perdagangan</option>
                                                                    <option value="Pertanian">Pertanian</option>
                                                                    <option value="Perkebunan">Perkebunan</option>
                                                                    <option value="Jasa">Jasa</option>
                                                                    <option value="Lainya">Lainya</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Alamat Usaha</label>
                                                            <div class="col-lg-5">
                                                                <input type="text" name="alamat_usaha"  class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Provinsi</label>
                                                            <div class="col-lg-4">
                                                                <select class='form-control' id='provinsi_e' name="provinsi_e">

                                                                    <option value=''>--pilih--</option>
                                                                    <?php
                                                                    foreach ($provinsi as $prov) {
                                                                        echo "<option value='$prov[id]'>$prov[name]</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Kota/Kabupaten</label>
                                                            <div class="col-lg-4">
                                                                <select class='form-control' id='kota_kab' name=" kota_kab">
                                                                    <option value=''>--pilih--</option>
                                                                </select>          
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Kecamatan</label>
                                                            <div class="col-lg-4">
                                                                <select class='form-control' id='kecamatan' name="kecamatan">
                                                                    <option value=''>--pilih--</option>
                                                                </select>         
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Kelurahan/Desa</label>
                                                            <div class="col-lg-4">
                                                                <select class='form-control' id='kelurahan_e' name="kelurahan_e">
                                                                    <option value=''>--pilih--</option>
                                                                </select>       
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Pembinaan oleh Bumn</label>
                                                            <div class="col-lg-2">
                                                                <select name="pembinaan" class="form-control">
                                                                    <option value="Belum">Belum</option>
                                                                    <option value="Sudah">Sudah</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">PKBL Perum Peruri</label>
                                                            <div class="col-lg-1">
                                                                <select name="tahap" class="form-control">
                                                                    <option value="I">I</option>
                                                                    <option value="II">II</option>
                                                                    <option value="III">III</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="input-group date">
                                                                    <div class="input-group-addon">
                                                                    </div>
                                                                    <input type="text" class="form-control pull-right"  id="thn_binaan" name="thn_binaan" >
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input type="text" name="no_binaan" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Bumn Lain</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="nm_bumn_lain" class="form-control" placeholder="Nama BUMN">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="input-group date">
                                                                    <div class="input-group-addon">
                                                                    </div>
                                                                    <input type="text" class="form-control pull-right"  id="sls_bina" name="sls_bina" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Kas/tunai</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="kas_t" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Bank</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="bank" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Piutang </label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="piutang" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Bahan Baku</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="bhn_baku" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Peralatan Produksi</label>
                                                            <div class="col-lg-4">
                                                                <input type="text" name="p_produksi" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Peralatan Kantor dan aktiva lain</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="p_kantor" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Bangunan</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="bangunan" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Tanah</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="tanah" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Hasil Penjualan Barang</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="h_barang" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Jumlah/bln</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="jml_bln" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Harga pokok penjualan/bln</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="h_pokokpenjualan" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Biaya operasional dll/bln</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="b_operasional" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Pemberi Hutang</label>
                                                            <div class="col-lg-4">
                                                                <input type="text" name="pb_hutang" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Sisa Hutang</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="sisa_hutang" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Angsuran per bln</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="angsuran_bln" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-3 control-label">Sisa X angsuran</label>
                                                            <div class="col-lg-3">
                                                                <input type="text" name="sisa_angsuran" class="form-control">
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
