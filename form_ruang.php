<?php
include "CSS.php";
$id = "";
$nama = "";
$kapasitas = "";
$keterangan = "";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="simpan_ruang.php">
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
</body>
</html>


