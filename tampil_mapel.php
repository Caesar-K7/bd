<?php
include "koneksi.php";
$data = mysqli_query($koneksi,"SELECT * FROM mapel");
?>

<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
<title>Data Mapel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
=======
    <title>Data Mapel</title>
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
>>>>>>> cbc2517adbe53b7600495b3b0212fc9e02f23ef3
</head>

<<<<<<< HEAD
<body class="bg-light">
<div class="container mt-5">
=======
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h1>Data Mapel</h1>
        </div>
        <div class="card-body">
>>>>>>> cbc2517adbe53b7600495b3b0212fc9e02f23ef3

<h3 class="text-center mb-3">Data Mata Pelajaran</h3>

<table class="table table-bordered table-striped">
<tr class="table-dark text-center">
    <th>Kode</th>
    <th>Nama Mapel</th>
    <th>Jam</th>
    <th>Guru Pengampu</th>
    <th>Aksi</th>
</tr>

<?php while($d=mysqli_fetch_array($data)){ ?>
<tr>
<td><?= $d['Kode_Mapel'] ?></td>
<td><?= $d['Nama_Mapel'] ?></td>
<td><?= $d['Jam_Pelajaran'] ?></td>
<td><?= $d['Guru_Pengampu'] ?></td>
<td class="text-center">
    <a href="edit_mapel.php?Kode_Mapel=<?= $d['Kode_Mapel'] ?>" class="btn btn-warning btn-sm">Edit</a>
    <a href="hapus_mapel.php?Kode_Mapel=<?= $d['Kode_Mapel'] ?>" class="btn btn-danger btn-sm"
       onclick="return confirm('Hapus data?')">Hapus</a>
</td>
</tr>
<?php } ?>

</table>

<a href="form_mapel.php" class="btn btn-warning">Tambah Mapel</a>
<a href="index.php" class="btn btn-secondary">Dashboard</a>

</div>
</body>
</html>
