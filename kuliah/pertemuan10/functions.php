<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_20010357');
}

function query($query)
{
  $db = koneksi();
  $result = mysqli_query($db, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}


function tambah($data)
{
  $db = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nik = htmlspecialchars($data['nik']);
  $dept = htmlspecialchars($data['dept']);
  $gambar = htmlspecialchars($data['gambar']);
  $email = htmlspecialchars($data['email']);
  $query = "insert into 
            karyawan
            values 
            ('$nik','$nama','$email','$dept','','$gambar');
            ";
  mysqli_query($db, "$query");

  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}
