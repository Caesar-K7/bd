<?php
include "koneksi.php";
$data = mysqli_query($koneksi,"SELECT * FROM piket");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Piket</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">

<h3 class="text-center mb-3">Data Piket</h3>

<table class="table table-bordered table-striped">
<tr class="table-dark text-center">
    <th>NIS</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Hari</th>
    <th>Aksi</th>
</tr>

<?php while($d=mysqli_fetch_array($data)){ ?>
<tr>
<td><?= $d['Nis'] ?></td>
<td><?= $d['Nama'] ?></td>
<td><?= $d['Kelas'] ?></td>
<td><?= $d['Hari'] ?></td>
<td class="text-center">
    <a href="edit_piket.php?Nis=<?= $d['Nis'] ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="hapus_piket.php?Nis=<?= $d['Nis'] ?>" class="btn btn-danger btn-sm"
       onclick="return confirm('Hapus data?')">Hapus</a>
</td>
</tr>
<?php } ?>

</table>

<a href="form_piket.php" class="btn btn-warning">Tambah Piket</a>
<a href="index.php" class="btn btn-secondary">Dashboard</a>

</div>
</body>
</html>
