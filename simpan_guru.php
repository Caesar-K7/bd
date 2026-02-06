<?php
include "koneksi.php";
include "CSS.php";

$sukses = "";
$error = "";

$nip = "";
$nama = "";
$mapel = "";
$keterangan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO guru (nip, nama, mapel, keterangan) VALUES ('$nip', '$nama', '$mapel', '$keterangan')";
    if (mysqli_query($koneksi, $sql)) {
        $sukses = "Data berhasil disimpan!";
        // reset input
        $nip = "";
        $nama = "";
        $mapel = "";
        $keterangan = "";
    } else {
        $error = "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
    header("Location: form_guru.php");
exit;
}
?>

