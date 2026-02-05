<?php
include "koneksi.php";

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
        <label>Keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="<?= $keterangan ?>" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-danger ml-2">Hapus</button>
</form>
