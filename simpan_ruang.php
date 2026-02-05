<?php
include "koneksi.php";

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
}
?>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/components.css">
<form method="post">
    <div class="form-group">
        <label>ID</label>
        <input type="number" name="id" class="form-control" value="<?= $id ?>" required>
    </div>

    <div class="form-group">
        <label>Nama Ruang</label>
        <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required>
    </div>

    <div class="form-group">
        <label>Kapasitas</label>
        <input type="number" name="kapasitas" class="form-control" value="<?= $kapasitas ?>" required>
    </div>

    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="<?= $keterangan ?>" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-danger ml-2">Hapus</button>
</form>
