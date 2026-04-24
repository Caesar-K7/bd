<?php
include "koneksi.php";
$nis = $_GET['Nis'];
$data = mysqli_query($koneksi,"SELECT * FROM piket WHERE Nis='$nis'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Piket</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-3">Edit Data Piket</h3>

<form action="update_piket.php" method="post">
<input type="hidden" name="Nis" value="<?= $d['Nis'] ?>">

<input class="form-control mb-3" name="Nama" value="<?= $d['Nama'] ?>" required>
<input class="form-control mb-3" name="Kelas" value="<?= $d['Kelas'] ?>" required>
<input class="form-control mb-3" name="Hari" value="<?= $d['Hari'] ?>" required>

<button class="btn btn-warning w-100">Update</button>
</form>

<a href="tampil_piket.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
</div>
</body>
</html>
