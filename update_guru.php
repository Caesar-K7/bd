<?php
include "koneksi.php";
mysqli_query($koneksi,"UPDATE guru SET 
Nama='$_POST[nama]',
Mapel='$_POST[mapel]',
Alamat='$_POST[alamat]'
WHERE Nip='$_POST[nip]'");
header("location:tampil_guru.php");
?>
