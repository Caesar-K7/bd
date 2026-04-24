<?php
include "koneksi.php";

$kode = $_GET['Kode_Kelas'];

mysqli_query($koneksi,"DELETE FROM kelas WHERE Kode_Kelas='$kode'");

header("location:tampil_kelas.php");
?>
