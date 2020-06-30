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
 
 if(isset($_POST['nik']) && !empty($_POST['nik']))
 {
  $nik = $_POST['nik'];
  $stmt_edit = "SELECT * FROM ktps WHERE nik='$nik'";
  $KTPS = mysql_query($stmt_edit, $koneksi) or die(mysql_error());
  $edit_row = mysql_fetch_assoc($KTPS);
  extract($edit_row);
 }
 else
 {
  header("Location: ../../ktps.php");
 }
 
 if(isset($_POST['EDIT']))
 {
//simpan dan buat query
$perintah = "UPDATE ktps SET nama='{$_POST['nama']}', keperluan='{$_POST['keperluan']}' WHERE nik='$nik'";
$queryy=@mysql_query($perintah,$koneksi);

//validasi query

 if(!$queryy){
  echo "Gagal update:".mysql_error();
 }else{
 	echo' <script language="javascript">
   		 window.location.href="../../ktps.php";
    </script>';
  }
 }

?>