<?php
include "koneksi.php";
$data = mysqli_query($koneksi,"SELECT * FROM ruangan");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Ruangan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">

<h3 class="text-center mb-3">Data Ruangan</h3>

<table class="table table-bordered table-striped">
<tr class="table-dark text-center">
    <th>Kode</th>
    <th>Nama Ruangan</th>
    <th>Gedung</th>
    <th>Kapasitas</th>
    <th>Aksi</th>
</tr>

<?php while($d=mysqli_fetch_array($data)){ ?>
<tr>
<td><?= $d['Kode_Ruangan'] ?></td>
<td><?= $d['Nama_Ruangan'] ?></td>
<td><?= $d['Gedung'] ?></td>
<td><?= $d['Kapasitas'] ?></td>
<td class="text-center">
   <a href="edit_ruangan.php?Kode_Ruangan=<?= $d['Kode_Ruangan'] ?>" 
   class="btn btn-warning btn-sm">Edit</a>

<a href="hapus_ruangan.php?Kode_Ruangan=<?= $d['Kode_Ruangan'] ?>" 
   class="btn btn-danger btn-sm"
   onclick="return confirm('Hapus data?')">Hapus</a>
</td>
</tr>
<?php } ?>

</table>

<a href="form_ruangan.php" class="btn btn-warning">Tambah Ruangan</a>
<a href="index.php" class="btn btn-secondary">Dashboard</a>

</div>
</body>
</html>
