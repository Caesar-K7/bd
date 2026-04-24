<?php
include "koneksi.php";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi,"INSERT INTO karyawan (Nik, Nama, Jabatan, Alamat)
VALUES('$nik','$nama','$jabatan','$alamat')");


header("Location: tampil_karyawan.php");
?>
