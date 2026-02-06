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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input data siswa</title>
</head>
<body>
    <h1>Input Data Siswa</h1>
    <form method="post">
    <div class="form-group">
        <label>NIS</label>
        <input type="number" name="nis" class="form-control" value="<?= $nis ?>" required>
    </div>

    <div class="form-group">
        <label>Nama Siswa</label>
        <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required>
    </div>

    <div class="form-group">
        <label>Kelas</label>
        <input type="text" name="kelas" class="form-control" value="<?= $kelas ?>" required>
    </div>
    <div class="form-group">
        <label>Jurusan</label>
        <input type="text" name="jurusan" class="form-control" value="<?= $jurusan ?>" required>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?= $alamat ?>" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-danger ml-2">Hapus</button>
</form>

</body>
</html>

