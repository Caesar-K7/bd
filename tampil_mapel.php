<?php
include "koneksi.php";
include "CSS.php";

$sql = "SELECT * FROM mapel ORDER BY id DESC";
$result = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Data Siswa</h4>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama Mapel</th>
                        <th>pengampu</th>
                        <th>keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0) { ?>
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['pengampu'] ?></td>
                                <td><?= $row['keterangan'] ?></td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="4" class="text-center">Belum ada data</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>
