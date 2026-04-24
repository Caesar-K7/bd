<!DOCTYPE html>
<html>
<head>
<title>Form Guru</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-3">Input Data Guru</h3>

<form action="simpan_guru.php" method="post">
    <input class="form-control mb-3" name="nip" placeholder="NIP" required>
    <input class="form-control mb-3" name="nama" placeholder="Nama" required>
    <input class="form-control mb-3" name="mapel" placeholder="Mata Pelajaran" required>
    <textarea class="form-control mb-3" name="alamat" placeholder="Alamat" required></textarea>

    <button class="btn btn-primary w-100">Simpan Guru</button>
</form>

<a href="tampil_guru.php" class="btn btn-link mt-2">Lihat Data</a>
<a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
</div>
</body>
</html>
