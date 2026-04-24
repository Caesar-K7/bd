<!DOCTYPE html>
<html>
<head>
<title>Form Piket</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-3">Input Data Piket</h3>

<form action="simpan_piket.php" method="post">
    <input class="form-control mb-3" name="Nis" placeholder="NIS" required>
    <input class="form-control mb-3" name="Nama" placeholder="Nama Siswa" required>
    <input class="form-control mb-3" name="Kelas" placeholder="Kelas" required>
    <input class="form-control mb-3" name="Hari" placeholder="Hari Piket" required>

    <button class="btn btn-warning w-100">Simpan Piket</button>
</form>

<a href="tampil_piket.php" class="btn btn-link mt-2">Lihat Data</a>
<a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
</div>
</body>
</html>
