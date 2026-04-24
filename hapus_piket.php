<?php
include "koneksi.php";
$nis = $_GET['Nis'];

mysqli_query($koneksi,"DELETE FROM piket WHERE Nis='$nis'");

header("location:tampil_piket.php");
?>
