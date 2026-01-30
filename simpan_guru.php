<?php
include "koneksi.php";

$sukses = "";
$error = "";

$nip = "";
$nama = "";
$mapel = "";
$alamat = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO guru (nip, nama, mapel) VALUES ('$nip', '$nama', '$mapel', '$alamat')";
    if (mysqli_query($koneksi, $sql)) {
        $sukses = "Data berhasil disimpan!";
        // reset input
        $nip = "";
        $nama = "";
        $mapel = "";
        $alamat = "";
    } else {
        $error = "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>

<form method="post">
    <div class="form-group">
        <label>NIP</label>
        <input type="number" name="NIP" class="form-control" value="<?= $nip ?>" required>
    </div>

    <div class="form-group">
        <label>Nama Siswa</label>
        <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required>
    </div>

    <div class="form-group">
        <label>Mapel</label>
        <input type="text" name="Mapel" class="form-control" value="<?= $mapel ?>" required>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="Alamat" class="form-control" value="<?= $alamat ?>" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-danger ml-2">Hapus</button>
</form>
