<!DOCTYPE html>
<html>
<head>
<title>Form Siswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<<<<<<< HEAD
=======
<body>
    <h1>Input Data Siswa</h1>
    <form method="post" action="simpan_siswa.php">
    <div class="form-group">
        <label>NIS</label>
        <input type="number" name="nis" class="form-control" value="<?= $nis ?>" required>
    </div>
>>>>>>> cbc2517adbe53b7600495b3b0212fc9e02f23ef3

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<h3 class="text-center mb-3">Input Data Siswa</h3>

<form action="simpan_siswa.php" method="post">
    <input class="form-control mb-3" name="nis" placeholder="NIS" required>
    <input class="form-control mb-3" name="nama" placeholder="Nama" required>
    <input class="form-control mb-3" name="kelas" placeholder="Kelas" required>
    <input class="form-control mb-3" name="jurusan" placeholder="Jurusan" required>
    <textarea class="form-control mb-3" name="alamat" placeholder="Alamat" required></textarea>

    <button class="btn btn-success w-100">Simpan Siswa</button>
</form>

<a href="tampil_siswa.php" class="btn btn-link text-center mt-2">Lihat Data</a>
<a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>

</div>
</div>
</body>
</html>
