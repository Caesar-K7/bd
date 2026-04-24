<?php
include "koneksi.php";

$kode = $_POST['Kode_Ruangan'];
$nama = $_POST['Nama_Ruangan'];
$gedung = $_POST['Gedung'];
$kapasitas = $_POST['Kapasitas'];

mysqli_query($koneksi,"INSERT INTO ruangan VALUES('$kode','$nama','$gedung','$kapasitas')");

header("location:tampil_ruangan.php");
?>
