<?php
error_reporting(~E_NOTICE);
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_tamban_jaya";
$koneksi = @mysql_connect($host, $user, $pass);
if (!$koneksi) {
  echo "Gagal koneksi=" . mysql_error();
  exit();
}
//memilih database
$milih = @mysql_select_db($db, $koneksi);
if (!$milih) {
  exit("Gagal memlih database:" . mysql_error());
}

if (isset($_POST['EDIT'])) {
  //simpan dan buat query
  $perintah = "UPDATE informasi SET teks='{$_POST['teks']}' WHERE id='1'";
  $queryy = @mysql_query($perintah, $koneksi);

  //validasi query

  if (!$queryy) {
    echo "Gagal Menyimpan:" . mysql_error();
  } else {
    echo '<script language="javascript">window.location.href="../../index.php";</script>';
  }
}
