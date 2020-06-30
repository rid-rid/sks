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
 
 if(isset($_POST['id_pendapatan']) && !empty($_POST['id_pendapatan']))
 {
  $id_pendapatan = $_POST['id_pendapatan'];
  $stmt_edit = "SELECT * FROM trans_pendapatan WHERE id_pendapatan='$id_pendapatan'";
  $U = mysql_query($stmt_edit, $koneksi) or die(mysql_error());
  $edit_row = mysql_fetch_assoc($U);
  extract($edit_row);
 }
 else
 {
  header("Location: ../../dana_desa.php");
 }
 
 if(isset($_POST['EDIT']))
 {
//simpan dan buat query
$perintah = "UPDATE trans_pendapatan SET thn_pendapatan='{$_POST['thn_pendapatan']}', besar_pendapatan='{$_POST['besar_pendapatan']}', kd_pendapatan='{$_POST['kd_pendapatan']}' WHERE id_pendapatan='$id_pendapatan'";
$queryy=@mysql_query($perintah,$koneksi);

//validasi query

 if(!$queryy){
  echo "Gagal update:".mysql_error();
 }else{
 	echo' <script language="javascript">
   		 window.location.href="../../dana_desa.php";
    </script>';
  }
 }

?>