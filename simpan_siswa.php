<?php
include "koneksi.php";
include "CSS.php";

$sukses = "";
$error = "";

$nis = "";
$nama = "";
$kelas = "";
$jurusan = "";
$alamat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO siswa (nis, nama, kelas, jurusan, alamat) VALUES ('$nis', '$nama', '$kelas', '$jurusan', '$alamat')";
    if (mysqli_query($koneksi, $sql)) {
        $sukses = "Data berhasil disimpan!";
        // reset input
        $nis = "";
        $nama = "";
        $kelas = "";
        $jurusan = "";
        $alamat = "";
    } else {
        $error = "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}

header("Location: form_siswa.php");
exit;

?>