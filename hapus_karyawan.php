<?php
include "koneksi.php";

$nik = $_GET['nik'];

mysqli_query($koneksi, "DELETE FROM karyawan WHERE Nik='$nik'");

header("location:tampil_karyawan.php");
?>
