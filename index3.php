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
<h3>Formulir Perpustakaan Kota Madiun</h3>
<table border="1" class="table">
<tr>
<th>idbuku</th>
<th>judul</th>
<th>nomorrak</th>
<th>tanggal</th>
</tr>
<?php
include "koneksi3.php";
$sql = "SELECT * FROM perpustakaan";
$query = mysqli_query($koneksi3, $sql) or die("SQL Anda Salah");
$nomor = 0;
while ($data = mysqli_fetch_array($query)) {{?>
<tr>
<td><?php echo $data['idbuku']; ?></td>
<td><?php echo $data['judul']; ?></td>
<td><?php echo $data['nomorrak']; ?></td>
<td><?php echo $data['tanggal']; ?></td>
</tr>
<?php }} ?>
</table>
</body>
</html> 