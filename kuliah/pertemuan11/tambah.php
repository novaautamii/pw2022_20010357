<?php
require "functions.php";
//cek apakah tombol Add sudah ditekan

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
        alert('Data Berhasil Ditambahkan!');
        document.location.href='index.php';
          </script>";
  } else {
    echo "Data Gagal di tambahkan!";
  }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data Karyawan</title>
</head>

<body>

  <h3>Form Tambah Data Karyawan</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>

      </li>
      <li>
        <label>
          NIK :
          <input type="text" name="nik" required>
        </label>
      </li>
      <li>
        <label>
          DEPT :
          <input type="text" name="dept" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="text" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Foto :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Add Data</button>
      </li>
    </ul>


  </form>
</body>

</html>