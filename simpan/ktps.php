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
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$tempat=$_POST['tempat'];
$tgl=$_POST['tgl'];
$jenkel=$_POST['jenkel'];
$agama=$_POST['agama'];
$stts=$_POST['stts'];
$pekerjaan=$_POST['pekerjaan'];
$alamat=$_POST['alamat'];
$rt=$_POST['rt'];
$rw=$_POST['rw'];
$keperluan=$_POST['keperluan'];
$no_surat=$_POST['no_surat'];
$input_nama= "percobaan input";
$tanggal= date("Y-m-d");
//simpan dan buat query
$perintah = "INSERT INTO ktps (nik,nama,tempat,tgl,jenkel,agama,stts,pekerjaan,alamat,rt,rw,keperluan,no_surat,input_nama,tanggal) VALUES ('$nik','$nama','$tempat','$tgl','$jenkel','$agama','$stts','$pekerjaan','$alamat','$rt','$rw','$keperluan','$no_surat','$input_nama','$tanggal')";
$queryy=@mysql_query($perintah,$koneksi);

//validasi query

 if(!$queryy){
  echo "Gagal menyimpan:".mysql_error();
 }else{
 	echo' <script language="javascript">
	alert ("Data Berhasil Disimpan")
   		 window.location.href="../ktps.php";
    </script>';
  }
?>