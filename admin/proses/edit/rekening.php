<?php
 error_reporting( ~E_NOTICE );
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
 
 if(isset($_POST['kd_rekening']) && !empty($_POST['kd_rekening']))
 {
  $kd_rekening = $_POST['kd_rekening'];
  $stmt_edit = "SELECT * FROM rekening WHERE kd_rekening='$kd_rekening'";
  $REKENING = mysql_query($stmt_edit, $koneksi) or die(mysql_error());
  $edit_row = mysql_fetch_assoc($REKENING);
  extract($edit_row);
 }
 else
 {
  header("Location: ../../input/rekening.php");
 }
 
 if(isset($_POST['EDIT']))
 {
//simpan dan buat query
$perintah = "UPDATE rekening SET nama_rekening='{$_POST['nama_rekening']}' WHERE kd_rekening='$kd_rekening'";
$queryy=@mysql_query($perintah,$koneksi);

//validasi query

 if(!$queryy){
  echo "Gagal update:".mysql_error();
 }else{
 	echo' <script language="javascript">
   		 window.location.href="../../input/rekening.php";
    </script>';
  }
 }

?>