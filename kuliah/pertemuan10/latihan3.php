<?php
require 'functions.php';
$karyawan = query("select * from karyawan");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Karyawan</title>
</head>

<body>

  <h3>Daftar karyawan</h3>
  <a href="tambah.php">Tambah Data Karyawan</a>
  <br><br>


  <table border="1" cellpadding="10" cellspasing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama Karyawan</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($karyawan as $k) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="image/<?= $k['gambar']; ?>" width="60"></td>
        <td><?= $k['nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $k['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>


</body>

</html>