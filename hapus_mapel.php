<?php
include "koneksi.php";
$kode = $_GET['Kode_Mapel'];

mysqli_query($koneksi,"DELETE FROM mapel WHERE Kode_Mapel='$kode'");

header("location:tampil_mapel.php");
?>
