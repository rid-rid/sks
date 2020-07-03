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
$nama_sub_rekening = $_POST['nama_sub_rekening'];
$nama_belanja = $_POST['jenis_belanja'];
$besar_belanja = $_POST['besar_belanja'];
$thn_belanja = $_POST['thn_belanja'];
$sumber = $_POST['kd_sumber'];

//cek kode sub_rekening
$tampil = "SELECT * FROM sub_rekening WHERE nama_sub_rekening='$nama_sub_rekening'";
$query_kode = @mysql_query($tampil, $koneksi) or die(mysql_error());
$rs = @mysql_fetch_assoc($query_kode);
//cek kode belanja
$tampil01 = "SELECT * FROM belanja WHERE nama_belanja='$nama_belanja'";
$query_kode01 = @mysql_query($tampil01, $koneksi) or die(mysql_error());
$rb = @mysql_fetch_assoc($query_kode01);

//simpan dan buat query
$perintah = "INSERT INTO trans_belanja (besar_belanja,thn_belanja,kd_sumber,kd_sub_rekening,kd_belanja) VALUES ('$besar_belanja','$thn_belanja','$sumber','$rs[kd_sub_rekening]','$rb[kd_belanja]')";
$queryy = @mysql_query($perintah, $koneksi);

//validasi query

if (!$queryy) {
  echo "Gagal menyimpan:" . mysql_error();
} else {
  echo '<script language="javascript">window.location.href="../../kelola_dana.php";</script>';
}
