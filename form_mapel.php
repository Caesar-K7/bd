<<<<<<< HEAD
=======
<?php
include "CSS.php";
$id = '';
$nama = '';
$pengampu = '';
$keterangan = '';
?>

>>>>>>> cbc2517adbe53b7600495b3b0212fc9e02f23ef3
<!DOCTYPE html>
<html>
<head>
<title>Form Mapel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<<<<<<< HEAD
=======
<body>
    <h1>Input Data Mapel</h1>
    <form method="post" action="simpan_mapel.php">
    <div class="form-group">
        <label>id</label>
        <input type="number" name="id" class="form-control" value="<?= $id ?>" required>
    </div>
>>>>>>> cbc2517adbe53b7600495b3b0212fc9e02f23ef3

<body class="bg-light">
<div class="container mt-5">
<div class="card shadow p-4 col-md-6 mx-auto">

<<<<<<< HEAD
<h3 class="text-center mb-3">Input Data Mapel</h3>
=======
    <div class="form-group">
        <label>pengampu</label>
        <input type="text" name="pengampu" class="form-control" value="<?= $pengampu ?>" required>
    </div>
    <div class="form-group">
        <label>keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="<?= $keterangan ?>" required>
    </div>
>>>>>>> cbc2517adbe53b7600495b3b0212fc9e02f23ef3

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
