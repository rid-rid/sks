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

$nik = $_GET['nik'];
$perintah = "SELECT * FROM penduduk WHERE nik='$nik'";
$sql = @mysql_query($perintah, $koneksi);
$penduduk = @mysql_fetch_array($sql);

$data = array(
	'nama' => $penduduk['nama'],
	'tempat' => $penduduk['tempat'],
	'tgl' => $penduduk['tgl'],
	'jenkel' => $penduduk['jenkel'],
	'agama' => $penduduk['agama'],
	'stts' => $penduduk['stts'],
	'pekerjaan' => $penduduk['pekerjaan'],
	'alamat' => $penduduk['alamat'],
	'rt' => $penduduk['rt'],
	'rw' => $penduduk['rw'],
);
echo json_encode($data);
