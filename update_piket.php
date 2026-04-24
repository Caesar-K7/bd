<?php
include "koneksi.php";

$nis   = $_POST['Nis'];
$nama  = $_POST['Nama'];
$kelas = $_POST['Kelas'];
$hari  = $_POST['Hari'];

mysqli_query($koneksi,"UPDATE piket SET 
Nama='$nama',
Kelas='$kelas',
Hari='$hari'
WHERE Nis='$nis'");

header("location:tampil_piket.php");
?>
