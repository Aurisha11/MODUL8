<!DOCTYPE html>
<html>
<head>
<title>Membuat Database dan Menampilkan data dari database
dengan PHP</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
<h1>Membuat Koneksi Dengan PHP Dan MySQL</h1>
<h2>Menampilkan data dari database</h2>
<h3>www.praktikum8.ac.id</h3>
</div>
<br/>
<br/>
<h3>Formulir Klinik Sehat</h3>
<table border="1" class="table">
<tr>
<th>id dokter</th>
<th>nama dokter</th>
<th>nama pasien</th>
<th>konsultasi</th>
<th>tanggal</th>
</tr>
<?php
include "koneksi4.php";
$sql = "SELECT * FROM klinik";
$query = mysqli_query($koneksi4, $sql) or die("SQL Anda Salah");
$nomor = 0;
while ($data = mysqli_fetch_array($query)) {{?>
<tr>
<td><?php echo $data['iddokter']; ?></td>
<td><?php echo $data['namadokter']; ?></td>
<td><?php echo $data['namapasien']; ?></td>
<td><?php echo $data['konsultasi']; ?></td>
<td><?php echo $data['tanggal']; ?></td>

</tr>
<?php }} ?>
</table>
</body>
</html> 