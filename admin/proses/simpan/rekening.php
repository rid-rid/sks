<?php
//koneksi_database
$host="localhost";
$rekening="root";
$pass="";
$db="db_tamban_jaya";
$koneksi=@mysql_connect($host,$rekening,$pass);
if(!$koneksi){
 echo "Gagal koneksi=".mysql_error();
 exit();
}
//memilih database
$milih=@mysql_select_db($db,$koneksi);
if(!$milih){
 exit("Gagal memlih database:".mysql_error());

}
$kd_bidang = $_POST["kd_bidang"];
$nama_rekening=$_POST['nama_rekening'];
$kd_rekening=$_POST['kd_rekening'];	
	$sql = "SELECT * FROM rekening WHERE kd_rekening='$kd_rekening'";
	$query = @mysql_query($sql) or die (mysql_error());
	$sql_nama = "SELECT * FROM rekening WHERE nama_rekening='$nama_rekening'";
	$query_nama = @mysql_query($sql_nama) or die (mysql_error());
	if(mysql_num_rows($query) > 0){
		
		echo '<script language="javascript">
              alert ("Kode Rekening Sudah Terdaftar");
              window.location="../../input/rekening.php";
              </script>';
			  exit();
 
	}else {
		if(mysql_num_rows($query_nama) > 0){
		
		echo '<script language="javascript">
              alert ("Nama Rekening Sudah Terdaftar");
              window.location="../../input/rekening.php";
              </script>';
			  exit();
 
	}
	//simpan dan buat query
$perintah = "INSERT INTO rekening (kd_rekening,nama_rekening,kd_bidang) VALUES ('$kd_rekening','$nama_rekening','$kd_bidang')";
$queryy=@mysql_query($perintah,$koneksi);

//validasi query

 if(!$queryy){
  echo "Gagal menyimpan:".mysql_error();
 }else{
 	echo' <script language="javascript">
   		 window.location.href="../../input/rekening.php";
    </script>';
  }
	}

?>