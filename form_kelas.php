<!DOCTYPE html>
<html>
<head>
<title>Form Kelas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-3">Input Data Kelas</h3>

<form action="simpan_kelas.php" method="post">
    <input class="form-control mb-3" name="Kode_Kelas" placeholder="Kode_Kelas" required>
    <input class="form-control mb-3" name="Nama_Kelas" placeholder="Nama_Kelas" required>
    <input class="form-control mb-3" name="Wali_Kelas" placeholder="Wali_Kelas" required>
    <input class="form-control mb-3" name="Ruangan" placeholder="Ruangan" required>

    <button class="btn btn-warning w-100">Simpan Kelas</button>
</form>

<a href="tampil_kelas.php" class="btn btn-link mt-2">Lihat Data</a>
<a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
</div>
</body>
</html>
