<?php 
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<title>Data Guru</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">

<h3 class="text-center mb-3">Data Guru</h3>

<table class="table table-bordered table-striped">
<tr class="table-dark text-center">
    <th>NIP</th>
    <th>Nama</th>
    <th>Mapel</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($koneksi,"SELECT * FROM guru");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $d['Nip'] ?></td>
    <td><?= $d['Nama'] ?></td>
    <td><?= $d['Mapel'] ?></td>
    <td><?= $d['Alamat'] ?></td>
    <td class="text-center">
        <a href="edit_guru.php?nip=<?= $d['Nip'] ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus_guru.php?nip=<?= $d['Nip'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>

<a href="form_guru.php" class="btn btn-success">Tambah Guru</a>
<a href="index.php" class="btn btn-secondary">Dashboard</a>

</div>
</body>
</html>
