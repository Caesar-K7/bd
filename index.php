<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#f5f6fa;
    font-family: Arial;
}

.card-box{
    background:white;
    border-radius:12px;
    padding:30px;
    box-shadow:0 5px 15px rgba(0,0,0,.1);
    text-align:center;
}

.btn-custom{
    width:100%;
    padding:12px;
    font-size:16px;
    border-radius:8px;
}

/* Warna merah untuk Piket */
.btn-red{
    background:#dc3545;
    color:white;
}
.btn-red:hover{
    background:#bb2d3b;
    color:white;
}
</style>
</head>

<body>

<div class="container mt-5">
    <h2 class="text-center mb-5">Sistem Data Sekolah</h2>

    <div class="row g-4">

        <!-- SISWA -->
        <div class="col-md-6">
            <div class="card-box">
                <h4>Data Siswa</h4>
                <p>Input dan kelola data siswa</p>
                <a href="form_siswa.php" class="btn btn-success btn-custom">Masuk Siswa</a>
            </div>
        </div>

        <!-- GURU -->
        <div class="col-md-6">
            <div class="card-box">
                <h4>Data Guru</h4>
                <p>Input dan kelola data guru</p>
                <a href="form_guru.php" class="btn btn-primary btn-custom">Masuk Guru</a>
            </div>
        </div>

        <!-- KARYAWAN -->
        <div class="col-md-6">
            <div class="card-box">
                <h4>Data Karyawan</h4>
                <p>Input dan kelola data karyawan</p>
                <a href="form_karyawan.php" class="btn btn-warning btn-custom">Masuk Karyawan</a>
            </div>
        </div>

        <!-- KELAS -->
        <div class="col-md-6">
            <div class="card-box">
                <h4>Data Kelas</h4>
                <p>Input dan kelola data kelas</p>
                <a href="form_kelas.php" class="btn btn-info btn-custom text-white">Masuk Kelas</a>
            </div>
        </div>

        <!-- MAPEL -->
        <div class="col-md-6">
            <div class="card-box">
                <h4>Data Mapel</h4>
                <p>Input dan kelola mata pelajaran</p>
                <a href="form_mapel.php" class="btn btn-dark btn-custom">Masuk Mapel</a>
            </div>
        </div>

        <!-- PIKET -->
        <div class="col-md-6">
            <div class="card-box">
                <h4>Data Piket</h4>
                <p>Input dan kelola jadwal piket</p>
                <a href="form_piket.php" class="btn btn-red btn-custom">Masuk Piket</a>
            </div>
        </div>

        <!-- RUANGAN -->
        <div class="col-md-6">
            <div class="card-box">
                <h4>Data Ruangan</h4>
                <p>Input dan kelola data ruangan</p>
                <a href="form_ruangan.php" class="btn btn-secondary btn-custom">Masuk Ruangan</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>
