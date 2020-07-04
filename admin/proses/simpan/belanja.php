<?php
//koneksi_database
$host = "localhost";
$rekening = "root";
$pass = "";
$db = "db_tamban_jaya";
$koneksi = @mysql_connect($host, $rekening, $pass);
if (!$koneksi) {
  echo "Gagal koneksi=" . mysql_error();
  exit();
}
//memilih database
$milih = @mysql_select_db($db, $koneksi);
if (!$milih) {
  exit("Gagal memlih database:" . mysql_error());
}
$sub_rekening = $_POST['sub_rekening'];
$jenis_belanja = $_POST['jenis_belanja'];
$besar_belanja = $_POST['besar_belanja'];
$thn_belanja = $_POST['thn_belanja'];
$sumber = $_POST['kd_sumber'];

//simpan dan buat query
$perintah = "INSERT INTO trans_belanja (besar_belanja,thn_belanja,kd_sumber,kd_sub_rekening,kd_belanja) VALUES ('$besar_belanja','$thn_belanja','$sumber','$sub_rekening','$jenis_belanja')";

echo $perintah;

$queryy = @mysql_query($perintah, $koneksi);

//validasi query

if (!$queryy) {
  echo "Gagal menyimpan:" . mysql_error();
} else {
  echo '<script language="javascript">window.location.href="../../kelola_dana.php";</script>';
}
