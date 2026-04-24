<?php
include "koneksi.php";

$kode = $_GET['Kode_Ruangan']; // WAJIB sama dengan URL

$data = mysqli_query($koneksi, "SELECT * FROM ruangan WHERE Kode_Ruangan='$kode'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Ruangan</title>
    <style>
        body {
            font-family: Arial;
            background: #e0e0e0;
        }
        .box {
            width: 400px;
            background: white;
            margin: 50px auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        h2 {
            text-align: center;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid gray;
        }
        button {
            padding: 10px;
            width: 100%;
            background: orange;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: darkorange;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
        }
    </style>
</head>

<body>
<div class="box">
    <h2>Edit Data Ruangan</h2>

    <form action="update_ruangan.php" method="post">

        <input type="hidden" name="kode" value="<?= $d['Kode_Ruangan']; ?>">

        Nama Ruangan
        <input type="text" name="nama" value="<?= $d['Nama_Ruangan']; ?>" required>

        Gedung
        <input type="text" name="gedung" value="<?= $d['Gedung']; ?>" required>

        Kapasitas
        <input type="text" name="kapasitas" value="<?= $d['Kapasitas']; ?>" required>

        <button type="submit">Update</button>
        <a href="tampil_ruangan.php">Lihat Data</a>

    </form>
</div>
</body>
</html>