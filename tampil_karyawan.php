<?php
include "koneksi.php";
$data = mysqli_query($koneksi,"SELECT * FROM karyawan");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
<h2 class="text-center">Data Karyawan</h2>

<table class="table table-bordered table-striped mt-3">
<thead class="table-dark">
<tr>
<th>NIK</th>
<th>Nama</th>
<th>Jabatan</th>
<th>Alamat</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>
<?php while($d=mysqli_fetch_array($data)){ ?>
<tr>
<td><?= $d['Nik'] ?></td>
<td><?= $d['Nama'] ?></td>
<td><?= $d['Jabatan'] ?></td>
<td><?= $d['Alamat'] ?></td>
<td>
<a href="edit_karyawan.php?nik=<?= $d['Nik'] ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="hapus_karyawan.php?nik=<?= $d['Nik'] ?>" class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>

<a href="form_karyawan.php" class="btn btn-success">Tambah Karyawan</a>
<a href="index.php" class="btn btn-secondary">Dashboard</a>


</div>
</body>
</html>
