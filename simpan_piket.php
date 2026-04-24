<?php
include "koneksi.php";

$nis   = $_POST['Nis'];
$nama  = $_POST['Nama'];
$kelas = $_POST['Kelas'];
$hari  = $_POST['Hari'];

mysqli_query($koneksi,"INSERT INTO piket VALUES('$nis','$nama','$kelas','$hari')");

header("location:tampil_piket.php");
?>
