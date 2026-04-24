<?php
include "koneksi.php";

$nis     = $_POST['nis'];
$nama    = $_POST['nama'];
$kelas   = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$alamat  = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE siswa SET 
    Nama='$nama',
    Kelas='$kelas',
    Jurusan='$jurusan',
    Alamat='$alamat'
    WHERE Nis='$nis'
");

header("location:tampil_siswa.php");
?>
