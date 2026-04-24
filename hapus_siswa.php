<?php
include "koneksi.php";

$nis = $_GET['nis'];
mysqli_query($koneksi, "DELETE FROM siswa WHERE Nis='$nis'");

header("location:tampil_siswa.php");
?>
