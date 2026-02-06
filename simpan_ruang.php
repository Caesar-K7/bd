<?php
include "koneksi.php";
include "CSS.php";

$sukses = "";
$error = "";

$id = "";
$nama = "";
$kapasitas = "";
$keterangan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kapasitas = $_POST['kapasitas'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO ruang (id, nama, kapasitas, keterangan) VALUES ('$id', '$nama', '$kapasitas', '$keterangan')";
    if (mysqli_query($koneksi, $sql)) {
        $sukses = "Data berhasil disimpan!";
        // reset input
        $id = "";
        $nama = "";
        $kapasitas = "";
        $keterangan = "";
    } else {
        $error = "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
    header("Location: form_ruang.php");
exit;
}
?>
