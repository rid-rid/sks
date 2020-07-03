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
$nik = $_POST["nik"];

$sql = "SELECT * FROM user WHERE nik='$nik'";
$query = mysql_query($sql) or die(mysql_error());

if (mysql_num_rows($query) > 0) {

	echo '<script language="javascript">alert ("NIK Sudah Terdaftar");
	window.location="../../input/user.php";</script>';
	exit();
}
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
//simpan dan buat query
$perintah = "INSERT INTO user (nik,nama,username,password) VALUES ('$nik','$nama','$username','$password')";
$queryy = @mysql_query($perintah, $koneksi);

//validasi query

if (!$queryy) {
	echo "Gagal menyimpan:" . mysql_error();
} else {
	echo '<script language="javascript">window.location.href="../../user.php";</script>';
}
