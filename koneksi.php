<?php
$koneksi = mysqli_connect("localhost", "root", "", "bd_caesar");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
