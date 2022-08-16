<?php
require 'functions.php';

$id = $_GET['id'];
$k = query("select * from karyawan where id=$id ")
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Karyawan</title>
</head>

<body>
  <h3>Detail Karyawan</h3>
  <ul>
    <li><img src="image/<?= $k['gambar']; ?>" width="60"></li>
    <li><?= $k['nik']; ?></li>
    <li><?= $k['nama']; ?></li>
    <li><?= $k['email']; ?></li>
    <li><?= $k['dept']; ?></li>
    <li><a href="">ubah</a>| <a href="">hapus</a></li>
    <li><a href="latihan3.php">kembali ke daftar karyawan</a></li>
  </ul>
</body>

</html>