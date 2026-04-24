<?php
include "koneksi.php";
$data = mysqli_query($koneksi,"SELECT * FROM kelas");
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Kelas</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-5">

<h3 class="text-center mb-3">Data Kelas</h3>

<table class="table table-bordered table-striped">
<tr class="table-dark text-center">
    <th>Kode Kelas</th>
    <th>Nama Kelas</th>
    <th>Wali Kelas</th>
    <th>Ruangan</th>
    <th>Aksi</th>
</tr>

<?php while($d = mysqli_fetch_array($data)){ ?>
<tr>
    <td><?= $d['Kode_Kelas']; ?></td>
    <td><?= $d['Nama_Kelas']; ?></td>
    <td><?= $d['Wali_Kelas']; ?></td>
    <td><?= $d['Ruangan']; ?></td>
    <td class="text-center">
        <a href="edit_kelas.php?Kode_Kelas=<?= $d['Kode_Kelas']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="hapus_kelas.php?Kode_Kelas=<?= $d['Kode_Kelas']; ?>" class="btn btn-danger btn-sm"
           onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

<a href="form_kelas.php" class="btn btn-warning">Tambah Kelas</a>
<a href="index.php" class="btn btn-secondary">Dashboard</a>

</div>
</body>
</html>
