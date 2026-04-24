<?php
include "koneksi.php";
mysqli_query($koneksi,"DELETE FROM guru WHERE Nip='$_GET[nip]'");
header("location:tampil_guru.php");
?>
