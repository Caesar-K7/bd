<?php
include "koneksi.php";
$nip = $_GET['nip'];
$data = mysqli_query($koneksi, "SELECT * FROM guru WHERE Nip='$nip'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Guru</title>
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
        input, textarea {
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
    <h2>Edit Data Guru</h2>
    <form action="update_guru.php" method="post">

        <input type="hidden" name="nip" value="<?= $d['Nip']; ?>">

        Nama
        <input type="text" name="nama" value="<?= $d['Nama']; ?>" required>

        Mapel
        <input type="text" name="mapel" value="<?= $d['Mapel']; ?>" required>

        Alamat
        <textarea name="alamat" required><?= $d['Alamat']; ?></textarea>

        <button type="submit">Update</button>
        <a href="tampil_guru.php">Lihat Data</a>

    </form>
</div>
</body>
</html>