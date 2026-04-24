<?php
include "koneksi.php";
$kode = $_GET['Kode_Mapel'];
$data = mysqli_query($koneksi,"SELECT * FROM mapel WHERE Kode_Mapel='$kode'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Mapel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-3">Edit Data Mapel</h3>

<form action="update_mapel.php" method="post">
<input type="hidden" name="Kode_Mapel" value="<?= $d['Kode_Mapel'] ?>">

<input class="form-control mb-3" name="Nama_Mapel" value="<?= $d['Nama_Mapel'] ?>" required>
<input class="form-control mb-3" name="Jam_Pelajaran" value="<?= $d['Jam_Pelajaran'] ?>" required>
<input class="form-control mb-3" name="Guru_Pengampu" value="<?= $d['Guru_Pengampu'] ?>" required>

<button class="btn btn-warning w-100">Update</button>
</form>

<a href="tampil_mapel.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
</div>
</body>
</html>
