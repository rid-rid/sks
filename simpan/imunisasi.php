<?php
//koneksi_database
$host="localhost";
$user="root";
$pass="";
$db="db_tamban_jaya";
$koneksi=@mysql_connect($host,$user,$pass);
if(!$koneksi){
 echo "Gagal koneksi=".mysql_error();
 exit();
}
//memilih database
$milih=@mysql_select_db($db,$koneksi);
if(!$milih){
 exit("Gagal memlih database:".mysql_error());

}
$nik_s=$_POST['nik_s'];
$nama_s=$_POST['nama_s'];
$nik_i=$_POST['nik_i'];
$nama_i=$_POST['nama_i'];
$no_surat=$_POST['no_surat'];
$input_nama= "percobaan input";
$tanggal= date("Y-m-d");
//simpan dan buat query
$perintah = "INSERT INTO imunisasi (nik_s,nama_s,nik_i,nama_i,no_surat,input_nama,tanggal) VALUES ('$nik_s','$nama_s','$nik_i','$nama_i','$no_surat','$input_nama','$tanggal')";
$queryy=@mysql_query($perintah,$koneksi);

//validasi query

 if(!$queryy){
  echo "Gagal menyimpan:".mysql_error();
 }else{
 	echo' <script language="javascript">
	alert ("Data Berhasil Disimpan")
   		 window.location.href="../imunisasi.php";
    </script>';
  }
?>