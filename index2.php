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
<h3>Formulir Service Motor</h3>
<table border="1" class="table">
<tr>
<th>nomorpolisi</th>
<th>merkmotor</th>
<th>type</th>
<th>tanggal</th>
</tr>
<?php
include "koneksi2.php";
$sql = "SELECT * FROM bengkel";
$query = mysqli_query($koneksi2, $sql) or die("SQL Anda Salah");
$nomor = 0;
while ($data = mysqli_fetch_array($query)) {{?>
<tr>
<td><?php echo $data['nomorpolisi']; ?></td>
<td><?php echo $data['merkmotor']; ?></td>
<td><?php echo $data['type']; ?></td>
<td><?php echo $data['tanggal']; ?></td>
</tr>
<?php }} ?>
</table>
</body>
</html>