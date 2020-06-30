<?php require_once('../../Connections/koneksi.php'); ?>
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

$tampil="SELECT * FROM penduduk WHERE nik='$del'";
$queryy=@mysql_query($tampil, $koneksi) or die (mysql_error());
$r= @mysql_fetch_array($queryy);
unlink("../../img/penduduk/$r[foto]");
$del1="DELETE FROM penduduk where nik='$del'";
$del_penduduk=@mysql_query($del1,$koneksi);


$del2="DELETE FROM t_usaha where nik='$del'";
$del_usaha=@mysql_query($del2,$koneksi);

$del3="DELETE FROM skck where nik='$del'";
$del_skck=@mysql_query($del3,$koneksi);

$del4="DELETE FROM ktps where nik='$del'";
$del_ktps=@mysql_query($del4,$koneksi);

$del5="DELETE FROM penghasilan where nik='$del'";
$del_penghasilan=@mysql_query($del5,$koneksi);

$del6="DELETE FROM imunisasi where nik='$del'";
$del_imunisasi=@mysql_query($del6,$koneksi);

$del7="DELETE FROM user where nik='$del'";
$del_user=@mysql_query($del7,$koneksi);


if($del_penduduk or $del_usaha or $del_skck or $del_ktps or $del_penghasilan or $del_imunisasi or $del_user){
  echo '<script language="javascript">
                window.location="../../penduduk.php";
              </script>';
}else{
 
 echo "Gagal koneksi=".mysql_error();
}
?>