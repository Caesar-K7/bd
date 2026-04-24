<!DOCTYPE html>
<html>
<head>
<title>Form Mapel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-3">Input Data Mapel</h3>

<form action="simpan_mapel.php" method="post">
    <input class="form-control mb-3" name="Kode_Mapel" placeholder="Kode Mapel" required>
    <input class="form-control mb-3" name="Nama_Mapel" placeholder="Nama Mapel" required>
    <input class="form-control mb-3" name="Jam_Pelajaran" placeholder="Jam Pelajaran (contoh: 4 JP)" required>
    <input class="form-control mb-3" name="Guru_Pengampu" placeholder="Guru Pengampu" required>

    <button class="btn btn-warning w-100">Simpan Mapel</button>
</form>

<a href="tampil_mapel.php" class="btn btn-link mt-2">Lihat Data</a>
<a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
</div>
</body>
</html>
