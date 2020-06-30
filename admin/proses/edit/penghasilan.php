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
 
 if(isset($_POST['id']) && !empty($_POST['id']))
 {
  $id = $_POST['id'];
  $stmt_edit = "SELECT * FROM penghasilan WHERE id='$id'";
  $PENGHASILAN = mysql_query($stmt_edit, $koneksi) or die(mysql_error());
  $edit_row = mysql_fetch_assoc($PENGHASILAN);
  extract($edit_row);
 }
 else
 {
  header("Location: ../../penghasilan.php");
 }
 
 if(isset($_POST['EDIT']))
 {
//simpan dan buat query
$perintah = "UPDATE penghasilan SET nominal='{$_POST['nominal']}', penulisan='{$_POST['penulisan']}' WHERE id='$id'";
$queryy=@mysql_query($perintah,$koneksi);

//validasi query

 if(!$queryy){
  echo "Gagal update:".mysql_error();
 }else{
 	echo' <script language="javascript">
   		 window.location.href="../../penghasilan.php";
    </script>';
  }
 }

?>