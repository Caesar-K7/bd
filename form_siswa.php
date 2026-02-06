
<?php
$nis = '';
$nama = '';
$kelas = '';
$jurusan = '';
$alamat = '';
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
    <form id method="post" action="simpan_siswa.php">
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