<?php
include "koneksi.php";

$kode = $_POST['Kode_Ruangan'];
$nama = $_POST['Nama_Ruangan'];
$gedung = $_POST['Gedung'];
$kapasitas = $_POST['Kapasitas'];

mysqli_query($koneksi,"UPDATE ruangan SET 
Nama_Ruangan='$nama',
Gedung='$gedung',
Kapasitas='$kapasitas'
WHERE Kode_Ruangan='$kode'");

header("location:tampil_ruangan.php");
?>
