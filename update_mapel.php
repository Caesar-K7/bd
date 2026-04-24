<?php
include "koneksi.php";

$kode = $_POST['Kode_Mapel'];
$nama = $_POST['Nama_Mapel'];
$jam  = $_POST['Jam_Pelajaran'];
$guru = $_POST['Guru_Pengampu'];

mysqli_query($koneksi,"UPDATE mapel SET 
Nama_Mapel='$nama',
Jam_Pelajaran='$jam',
Guru_Pengampu='$guru'
WHERE Kode_Mapel='$kode'");

header("location:tampil_mapel.php");
?>
