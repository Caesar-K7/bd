<!DOCTYPE html>
<html>
<head>
<title>Form Karyawan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-3">Input Data Karyawan</h3>

<form action="simpan_karyawan.php" method="post">
    <input class="form-control mb-3" name="nik" placeholder="NIK" required>
    <input class="form-control mb-3" name="nama" placeholder="Nama" required>
    <input class="form-control mb-3" name="jabatan" placeholder="Jabatan" required>
    <textarea class="form-control mb-3" name="alamat" placeholder="Alamat" required></textarea>

    <button class="btn btn-warning w-100">Simpan Karyawan</button>
</form>

<a href="tampil_karyawan.php" class="btn btn-link mt-2">Lihat Data</a>
<a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
</div>
</body>
</html>
