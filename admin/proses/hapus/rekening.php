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

$del7="DELETE FROM rekening WHERE rekening.kd_rekening='$del'";
$del_rek=@mysql_query($del7,$koneksi);
if($del_rek){
  echo '<script language="javascript">
              window.location="../../input/rekening.php";
              </script>';
}else{
 
 echo "Gagal koneksi=".mysql_error();
}
?>