<?php
include "koneksi.php";

$kode = $_POST['Kode_Mapel'];
$nama = $_POST['Nama_Mapel'];
$jam  = $_POST['Jam_Pelajaran'];
$guru = $_POST['Guru_Pengampu'];

mysqli_query($koneksi,"INSERT INTO mapel VALUES('$kode','$nama','$jam','$guru')");

header("location:tampil_mapel.php");
?>
