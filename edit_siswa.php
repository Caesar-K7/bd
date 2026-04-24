<?php
include "koneksi.php";
$nis = $_GET['nis'];
$data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE Nis='$nis'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
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
    <h2>Edit Data Siswa</h2>
    <form action="update_siswa.php" method="post">

        <input type="hidden" name="nis" value="<?= $d['Nis']; ?>">

        Nama
        <input type="text" name="nama" value="<?= $d['Nama']; ?>" required>

        Kelas
        <input type="text" name="kelas" value="<?= $d['Kelas']; ?>" required>

        Jurusan
        <input type="text" name="jurusan" value="<?= $d['Jurusan']; ?>" required>

        Alamat
        <textarea name="alamat" required><?= $d['Alamat']; ?></textarea>

        <button type="submit">Update</button>
        <a href="tampil_siswa.php">Lihat Data</a>

    </form>
</div>
</body>
</html>
