<!DOCTYPE html>
<html>
<head>
<title>Form Ruangan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-3">Input Data Ruangan</h3>

<form action="simpan_ruangan.php" method="post">
    <input class="form-control mb-3" name="Kode_Ruangan" placeholder="Kode Ruangan" required>
    <input class="form-control mb-3" name="Nama_Ruangan" placeholder="Nama Ruangan" required>
    <input class="form-control mb-3" name="Gedung" placeholder="Gedung" required>
    <input class="form-control mb-3" name="Kapasitas" placeholder="Kapasitas" required>

    <button class="btn btn-warning w-100">Simpan Ruangan</button>
</form>

<a href="tampil_ruangan.php" class="btn btn-link mt-2">Lihat Data</a>
<a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
</div>
</body>
</html>
