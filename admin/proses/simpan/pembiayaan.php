<?php
//koneksi_database
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
$thn_anggaran = $_POST['thn_anggaran'];
$silpa = $_POST['silpa'];
//simpan dan buat query
$perintah = "INSERT INTO pembiayaan (thn_anggaran,silpa) VALUES ('$thn_anggaran','$silpa')";
$queryy = @mysql_query($perintah, $koneksi);

//validasi query

if (!$queryy) {
  echo "Gagal menyimpan:" . mysql_error();
} else {
  echo '<script language="javascript">window.location.href="../../dana_desa.php";</script>';
}
