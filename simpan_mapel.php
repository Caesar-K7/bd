<?php
include "koneksi.php";
include "CSS.php";

$sukses = "";
$error = "";

$id = "";
$nama = "";
$pengampu = "";
$keterangan = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $pengampu = $_POST['pengampu'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO mapel (id, nama, pengampu, keterangan,) VALUES ('$id', '$nama', '$pengampu', '$keterangan',)";
    if (mysqli_query($koneksi, $sql)) {
        $sukses = "Data berhasil disimpan!";
        // reset input
        $id = "";
        $nama = "";
        $pengampu = "";
        $keterangan = "";;
    } else {
        $error = "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}

header("Location: form_mapel.php");
exit;

?>