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
$kd_sub_rekening = $_POST["kd_sub_rekening"];
$nama_sub_rekening = $_POST['nama_sub_rekening'];
$nama_rekening = $_POST['nama_rekening'];
$sql = "SELECT * FROM sub_rekening WHERE kd_sub_rekening='$kd_sub_rekening'";
$query = @mysql_query($sql) or die(mysql_error());
$sql_nama = "SELECT * FROM sub_rekening WHERE nama_sub_rekening='$nama_sub_rekening'";
$query_nama = @mysql_query($sql_nama) or die(mysql_error());
if (mysql_num_rows($query) > 0) {

	echo '<script language="javascript">
		alert ("Kode Sub Rekening Sudah Terdaftar");
		window.location="../../input/sub_rekening.php";
		</script>';
	exit();
} else {
	if (mysql_num_rows($query_nama) > 0) {

		echo '<script language="javascript">
		alert ("Nama Sub Rekening Sudah Terdaftar");
		window.location="../../input/sub_rekening.php";
		</script>';
		exit();
	}
	//cek kode_rekening
	$tampil = "SELECT * FROM rekening WHERE nama_rekening='$nama_rekening'";
	$query_kode = @mysql_query($tampil, $koneksi) or die(mysql_error());
	$r = @mysql_fetch_assoc($query_kode);;
	//simpan dan buat query
	$perintah = "INSERT INTO sub_rekening (kd_sub_rekening,nama_sub_rekening,kd_rekening) VALUES ('$kd_sub_rekening','$nama_sub_rekening','$r[kd_rekening]')";
	$queryy = @mysql_query($perintah, $koneksi);

	//validasi query

	if (!$queryy) {
		echo "Gagal menyimpan:" . mysql_error();
	} else {
		echo '<script language="javascript">window.location.href="../../input/sub_rekening.php";</script>';
	}
}
