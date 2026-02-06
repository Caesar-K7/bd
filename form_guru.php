

<form method="post" action="simpan_guru.php">
    <div class="form-group">
        <label>NIP</label>
        <input type="number" name="nip" class="form-control" value="<?= $nip ?>" required>
    </div>

    <div class="form-group">
        <label>Nama Guru</label>
        <input type="text" name="nama" class="form-control" value="<?= $nama ?>" required>
    </div>

    <div class="form-group">
        <label>Mapel</label>
        <input type="text" name="mapel" class="form-control" value="<?= $mapel ?>" required>
    </div>

    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="<?= $keterangan ?>" required>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-danger ml-2">Hapus</button>
</form>