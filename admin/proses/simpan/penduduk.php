<?php
//koneksi_database
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_tamban_jaya";
$koneksi = @mysql_connect($host, $user, $pass);
if (!$koneksi) {
  echo "Gagal koneksi=" . mysql_error();
  exit();
}
//memilih database
$milih = @mysql_select_db($db, $koneksi);
if (!$milih) {
  exit("Gagal memlih database:" . mysql_error());
}

//cek_duplikat_nik
$nik = $_POST["nik"];

$sql = "SELECT * FROM penduduk WHERE nik='$nik'";
$query = mysql_query($sql) or die(mysql_error());

if (mysql_num_rows($query) > 0) {

  echo '<script language="javascript">
  alert ("NIK Sudah Terdaftar");
  window.location="../../input/penduduk.php";</script>';
  exit();
}
//menyiapkan validasi gambar yang akan di upload
$file = $_FILES['photo']['name'];
$tmp_dir = $_FILES['photo']['tmp_name'];
$ukuran = $_FILES['photo']['size'];

$direktori = '../../img/penduduk/'; //path tempat simpan
$ektensi = strtolower(pathinfo($file, PATHINFO_EXTENSION)); //dapatkan info gambar
$valid_ektensi = array('jpeg', 'jpg', 'png', 'gif'); //ektensi yang dibloehin
$gambar = rand(1000, 1000000) . "." . $ektensi;

//mulai validasi
//cek ektensi gambar
if (in_array($ektensi, $valid_ektensi)) {

  //cek ukuran gambar
  if (!$ukuran < 1000000) {
    move_uploaded_file($tmp_dir, $direktori . $gambar);
    //simpan dan buat query
    $perintah = sprintf(
      "INSERT INTO penduduk VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','$gambar')",
      $_POST['nik'],
      $_POST['nama'],
      $_POST['tempat'],
      $_POST['tgl'],
      $_POST['jenkel'],
      $_POST['agama'],
      $_POST['stts'],
      $_POST['pekerjaan'],
      $_POST['alamat'],
      $_POST['rt'],
      $_POST['rw'],
      $_POST['desa'],
      $_POST['kec'],
      '$gambar'
    );
    $queryy = @mysql_query($perintah, $koneksi);

    //validasi query

    if (!$queryy) {
      echo "Gagal menyimpan:" . mysql_error();
    } else {
      echo '<script language="javascript">window.location.href="../../penduduk.php";</script>';
    }
  } else {
    echo '<script language="javascript">
              alert ("Gambar Terlalu Besar");
              window.location="../../input/penduduk.php";
              </script>';
  }
} else {
  echo '<script language="javascript">
              alert ("Bukan File Gambar");
              window.location="../../input/penduduk.php";
              </script>';
}
