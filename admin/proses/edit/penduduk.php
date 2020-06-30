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
  $stmt_edit = "SELECT * FROM penduduk WHERE nik='$nik'";
  $PENDUDUK = mysql_query($stmt_edit, $koneksi) or die(mysql_error());
  $edit_row = mysql_fetch_assoc($PENDUDUK);
  extract($edit_row);
 }
 else
 {
  header("Location: ../../penduduk.php");
 }
 
 if(isset($_POST['EDIT']))
 {
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
  $desa=$_POST['desa'];
  $kec=$_POST['kec'];
   
  $imgFile = $_FILES['foto']['name'];
  $tmp_dir = $_FILES['foto']['tmp_name'];
  $imgSize = $_FILES['foto']['size'];
     
  if($imgFile)
  {
   $upload_dir = '../img/penduduk'; // upload directory 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
   $userpic = rand(1000,1000000).".".$imgExt;
   if(in_array($imgExt, $valid_extensions))
   {   
    if($imgSize < 5000000)
    {
     unlink($upload_dir.$edit_row['foto']);
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else
    {
     $errMSG = "Sorry, your file is too large it should be less then 5MB";
    }
   }
   else
   {
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   } 
  }
  else
  {
   // if no image selected the old image remain as it is.
   $userpic = $edit_row['foto']; // old image from database
  } 
      
  
  // if no error occured, continue ....
  if(!isset($errMSG))
  {
   //update penduduk
   $perintah= "UPDATE penduduk SET nama='$nama', tempat='$tempat', tgl='$tgl', jenkel='$jenkel', agama='$agama', stts='$stts', pekerjaan='$pekerjaan', alamat='$alamat', rt='$rt', rw='$rw', desa='$desa', kec='$kec', foto='$userpic' WHERE nik='$nik'";
   $update_penduduk=@mysql_query($perintah,$koneksi);
   //update penghasilan ayah
   $perintah1 = "UPDATE penghasilan SET nama_ay='{$_POST['nama']}' WHERE nik_ay='$nik'";
   $update_penghasilan_ayah = @mysql_query($perintah1,$koneksi);
   //update penghasilan anak
   $perintah2 = "UPDATE penghasilan SET nama_an='{$_POST['nama']}' WHERE nik_an='$nik'";
   $update_penghasilan_anak = @mysql_query($perintah2,$koneksi);
   //update imunikasi suami
   $perintah3 = "UPDATE imunisasi SET nama_s='{$_POST['nama']}' WHERE nik_s='$nik'";
   $update_imunikasi_suami = @mysql_query($perintah3,$koneksi);
   //update imunikasi istri
   $perintah4 = "UPDATE imunisasi SET nama_i='{$_POST['nama']}' WHERE nik_i='$nik'";
   $update_imunikasi_istri = @mysql_query($perintah4,$koneksi);
   //update skck
   $perintah5= "UPDATE skck SET nama='{$_POST['nama']}', tempat='{$_POST['tempat']}', tgl='{$_POST['tgl']}', jenkel='{$_POST['jenkel']}', agama='{$_POST['agama']}', stts='{$_POST['stts']}', pekerjaan='{$_POST['pekerjaan']}', alamat='{$_POST['alamat']}', rt='{$_POST['rt']}', rw='{$_POST['rw']}' WHERE nik='$nik'";
   $update_skck=@mysql_query($perintah5,$koneksi);
   //update usaha
   $perintah6= "UPDATE t_usaha SET nama='{$_POST['nama']}', tempat='{$_POST['tempat']}', tgl='{$_POST['tgl']}', jenkel='{$_POST['jenkel']}', agama='{$_POST['agama']}', stts='{$_POST['stts']}', pekerjaan='{$_POST['pekerjaan']}', alamat='{$_POST['alamat']}', rt='{$_POST['rt']}', rw='{$_POST['rw']}' WHERE nik='$nik'";
   $update_usaha=@mysql_query($perintah6,$koneksi);
   //update ktps
   $perintah7= "UPDATE ktps SET nama='{$_POST['nama']}', tempat='{$_POST['tempat']}', tgl='{$_POST['tgl']}', jenkel='{$_POST['jenkel']}', agama='{$_POST['agama']}', stts='{$_POST['stts']}', pekerjaan='{$_POST['pekerjaan']}', alamat='{$_POST['alamat']}', rt='{$_POST['rt']}', rw='{$_POST['rw']}' WHERE nik='$nik'";
   $update_ktps=@mysql_query($perintah7,$koneksi);
   //update user
   $perintah8 = "UPDATE user SET nama='{$_POST['nama']}' WHERE nik='$nik'";
   $update_user = @mysql_query($perintah8,$koneksi);
   if($update_penduduk and $update_penghasilan_ayah and $update_penghasilan_anak and $update_imunikasi_suami and $update_imunikasi_istri and $update_skck and $update_usaha and $update_ktps and $update_user){
    ?>
                <script>
    alert('Successfully Updated ...');
    window.location.href=' ../../penduduk.php';
    </script>
                <?php
   }
   else{
    $errMSG = "Sorry Data Could Not Updated !";
   }
  }    
 }
?>