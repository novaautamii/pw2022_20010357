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
  mysqli_query($db, "$query") or die(mysqli_error($db));

  echo mysqli_error($db);
  return mysqli_affected_rows($db);
}


function hapus($id)
{


  $db = koneksi();

  mysqli_query($db, "delete from karyawan where id=$id") or die(mysqli_error($db));
  return mysqli_affected_rows(($db));
}

function ubah($data)
{
  $db = koneksi();
  $id = $_GET['id'];

  $nama = htmlspecialchars($data['nama']);
  $nik = htmlspecialchars($data['nik']);
  $dept = htmlspecialchars($data['dept']);
  $gambar = htmlspecialchars($data['gambar']);
  $email = htmlspecialchars($data['email']);

  $query = "UPDATE karyawan SET
                    nama = '$nama',
                    nik = '$nik',
                    dept= '$dept',
                    gambar = '$gambar',
                    email = '$email'
                    WHERE id = $id";
  mysqli_query($db, "$query") or die(mysqli_error($db));
  return mysqli_affected_rows(($db));
}
