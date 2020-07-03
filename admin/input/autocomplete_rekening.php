<?php
// Koneksi Database
$host = 'localhost';
$username = 'root';
$password = '';
$Dbname = 'db_tamban_jaya';
$db = new mysqli($host,$username,$password,$Dbname);

// cari dan tampilkan data ke AutoComplete
$searchTerm = $_GET['term'];
$query = $db->query("SELECT * FROM rekening WHERE nama_rekening LIKE '%".$searchTerm."%' ORDER BY nama_rekening ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['nama_rekening'];
}
echo json_encode($data);
