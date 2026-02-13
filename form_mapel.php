
<?php
include "CSS.php";
$id = '';
$nama = '';
$pengampu = '';
$keterangan = '';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mapel</title>
</head>
<body>
    <h1>Input Data Mapel</h1>
    <form id method="post" action="simpan_mapel.php">
    <div class="form-group">
        <label>id</label>
        <input type="number" name="id" class="form-control" value="<?= $id ?>" required>
    </div>

    <div class="form-group">
        <label>Nama Mapel</label>
        <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required>
    </div>

    <div class="form-group">
        <label>pengampu</label>
        <input type="text" name="pengampu$pengampu" class="form-control" value="<?= $pengampu ?>" required>
    </div>
    <div class="form-group">
        <label>keterangan</label>
        <input type="text" name="ketera$keterangan" class="form-control" value="<?= $keterangan ?>" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-danger ml-2">Hapus</button>
</form>

</body>
</html>