<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
perhatikan function anchor() di atas. anchor() adalah function codeigniter yang berfungsi untuk membuat hyperlink. jadi pada parameter pertama di function anchor() letakkan link tujuan, dan pada parameter keduanya letakkan text yang akan di munculkan seperti yang terdapat pada contoh di atas. syarat untuk menggunakan function anchor ini anda harus men-load dulu helper url codeigniter seperti pada function construct() di atas. Membuat CRUD Dengan CodeIgniter Menampilkan Data Dari Database

Selanjutnya tinggal kita jalankan saya pada browser untuk melihat hasil contoh menampilkan data dari database dengan codeigniter.

