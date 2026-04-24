<?php
include "koneksi.php";
$kode = $_GET['Kode_Kelas'];
$data = mysqli_query($koneksi,"SELECT * FROM kelas WHERE Kode_Kelas='$kode'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Kelas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-3">Edit Data Kelas</h3>

<form action="update_kelas.php" method="post">
    <input type="hidden" name="Kode_Kelas" value="<?= $d['Kode_Kelas']; ?>">

    <input class="form-control mb-3" name="Nama_Kelas" value="<?= $d['Nama_Kelas']; ?>" required>
    <input class="form-control mb-3" name="Wali_Kelas" value="<?= $d['Wali_Kelas']; ?>" required>
    <input class="form-control mb-3" name="Ruangan" value="<?= $d['Ruangan']; ?>" required>

    <button class="btn btn-warning w-100">Update Kelas</button>
</form>

<a href="tampil_kelas.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
</div>
</body>
</html>
