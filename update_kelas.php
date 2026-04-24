<?php
include "koneksi.php";

$kode   = $_POST['Kode_Kelas'];
$nama   = $_POST['Nama_Kelas'];
$wali   = $_POST['Wali_Kelas'];
$ruang  = $_POST['Ruangan'];

mysqli_query($koneksi,"UPDATE kelas SET 
    Nama_Kelas='$nama',
    Wali_Kelas='$wali',
    Ruangan='$ruang'
    WHERE Kode_Kelas='$kode'");

header("location:tampil_kelas.php");
?>
