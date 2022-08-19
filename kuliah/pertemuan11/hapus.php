<?php

require 'functions.php';

if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}


//mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
      alert('Data Berhasil Didelete!');
      document.location.href='index.php';
        </script>";
} else {
  echo "Data Gagal di hapus!";
}
