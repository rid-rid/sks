<?php
// Koneksi Database
$host = 'localhost';
$username = 'root';
$password = '';
$Dbname = 'db_tamban_jaya';
$db = new mysqli($host,$username,$password,$Dbname);

// cari dan tampilkan data ke AutoComplete
$searchTerm = $_GET['term'];
$query = $db->query("SELECT * FROM trans_pendapatan WHERE thn_pendapatan LIKE '%".$searchTerm."%' GROUP BY thn_pendapatan ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['thn_pendapatan'];
}
echo json_encode($data);
