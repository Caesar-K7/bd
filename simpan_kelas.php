<?php
include "koneksi.php";

$kode   = $_POST['Kode_Kelas'];
$nama   = $_POST['Nama_Kelas'];
$wali   = $_POST['Wali_Kelas'];
$ruang  = $_POST['Ruangan'];

mysqli_query($koneksi,"INSERT INTO kelas VALUES('$kode','$nama','$wali','$ruang')");

header("location:tampil_kelas.php");
?>
