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
$del=$_GET['del'];

$del7=sprintf("DELETE FROM trans_pendapatan where id_pendapatan=%d",$del);
$del_user=@mysql_query($del7,$koneksi);
if($del_user){
  echo '<script language="javascript">
              window.location="../../dana_desa.php";
              </script>';
}else{
 
 echo "Gagal koneksi=".mysql_error();
}
?>