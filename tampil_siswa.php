<?php 
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Data Siswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">

<h3 class="text-center mb-3">Data Siswa</h3>

<table class="table table-bordered table-striped">
<tr class="table-dark text-center">
    <th>NIS</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Jurusan</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($koneksi,"SELECT * FROM siswa");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $d['Nis'] ?></td>
    <td><?= $d['Nama'] ?></td>
    <td><?= $d['Kelas'] ?></td>
    <td><?= $d['Jurusan'] ?></td>
    <td><?= $d['Alamat'] ?></td>
    <td class="text-center">
        <a href="edit_siswa.php?nis=<?= $d['Nis'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus_siswa.php?nis=<?= $d['Nis'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>

<a href="form_siswa.php" class="btn btn-success">Tambah Siswa</a>
<a href="index.php" class="btn btn-secondary">Dashboard</a>

</div>
</body>
</html>
