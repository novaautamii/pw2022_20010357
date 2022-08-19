<?php
require 'functions.php';
//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}




//ambil id dari url

$id = $_GET['id'];
//querry karyawan berdasarkan id
$k = query("SELECT * FROM karyawan WHERE id=$id");
//cek apakah tombol Ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
        alert('Data Berhasil Diupdate!');
        document.location.href='index.php';
          </script>";
  } else {
    echo "Data Gagal di Update!";
  }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Karyawan</title>
</head>

<body>
  <h3>Form Ubah Data Karyawan</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" values="<?= $k['id']; ?>">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required value="<?= $k['nama']; ?>">
        </label>

      </li>
      <li>
        <label>
          NIK :
          <input type="text" name="nik" required value="<?= $k['nik']; ?>">
        </label>
      </li>
      <li>
        <label>
          DEPT :
          <input type="text" name="dept" required value="<?= $k['dept']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required value="<?= $k['email']; ?>">
        </label>
      </li>
      <li>
        <label>
          Foto :
          <input type="text" name="gambar" required value="<?= $k['gambar']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Update</button>
      </li>
    </ul>


  </form>
</body>

</html>