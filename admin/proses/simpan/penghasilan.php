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
$nik_ay = $_POST['nik_ay'];
$nama_ay = $_POST['nama_ay'];
$nik_an = $_POST['nik_an'];
$nama_an = $_POST['nama_an'];
$nominal = $_POST['nominal'];
$penulisan = $_POST['penulisan'];
$no_surat = $_POST['no_surat'];
$input_nama = "Admin Desa";
$tanggal = date("Y-m-d");
//simpan dan buat query
$perintah = "INSERT INTO penghasilan (nik_ay,nama_ay,nik_an,nama_an,nominal,penulisan,no_surat,input_nama,tanggal) VALUES ('$nik_ay','$nama_ay','$nik_an','$nama_an','$nominal','$penulisan','$no_surat','$input_nama','$tanggal')";
$queryy = @mysql_query($perintah, $koneksi);

//validasi query

if (!$queryy) {
  echo "Gagal menyimpan:" . mysql_error();
} else {
  echo '<script language="javascript">window.location.href="../../penghasilan.php";</script>';
}
