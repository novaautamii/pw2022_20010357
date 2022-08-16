<?php
//koneksi ke DB & pilih Database
$db = mysqli_connect('localhost', 'root', '', 'pw_20010357');


// Querry isi tabel karyawan
$result = mysqli_query($db, "select * from karyawan");


//ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

//tampung ke variabel mahasiswa
$karyawan = $rows;
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
  <table border="1" cellpadding="10" cellspasing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NIK</th>
      <th>Nama Karyawan</th>
      <th>Email</th>
      <th>Departemen</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($karyawan as $k) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="image/<?= $k['gambar']; ?>" width="60"></td>
        <td><?= $k['nik']; ?></td>
        <td><?= $k['nama']; ?></td>
        <td><?= $k['email']; ?></td>
        <td><?= $k['dept']; ?></td>
        <td>
          <a href="">ubah</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>


</body>

</html>