<?php
include "koneksi.php";

$kode = $_POST['Kode_Mapel'];
$nama = $_POST['Nama_Mapel'];
$jam  = $_POST['Jam_Pelajaran'];
$guru = $_POST['Guru_Pengampu'];

<<<<<<< HEAD
mysqli_query($koneksi,"INSERT INTO mapel VALUES('$kode','$nama','$jam','$guru')");

header("location:tampil_mapel.php");
?>
=======
$id = "";
$nama = "";
$pengampu = "";
$keterangan = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $pengampu = $_POST['pengampu'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO mapel (id, nama, pengampu, keterangan) VALUES ('$id', '$nama', '$pengampu', '$keterangan')";
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
>>>>>>> cbc2517adbe53b7600495b3b0212fc9e02f23ef3
