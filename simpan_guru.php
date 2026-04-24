<?php
include "koneksi.php";

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$mapel = $_POST['mapel'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO guru VALUES ('$nip','$nama','$mapel','$alamat')");
header("location:tampil_guru.php");
?>
