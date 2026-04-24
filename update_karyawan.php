<?php
include "koneksi.php";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE karyawan SET
Nama='$nama',
Jabatan='$jabatan',
Alamat='$alamat'
WHERE Nik='$nik'");

header("location:tampil_karyawan.php");
?>
