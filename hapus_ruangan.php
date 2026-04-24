<?php
include "koneksi.php";

$kode = $_GET['Kode_Ruangan'];

mysqli_query($koneksi,"DELETE FROM ruangan WHERE Kode_Ruangan='$kode'");

header("location:tampil_ruangan.php");
?>