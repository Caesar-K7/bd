<?php
include "koneksi.php";
include "CSS.php";

$sql = "SELECT * FROM guru ORDER BY NIP DESC";
$result = mysqli_query($koneksi, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Guru</title>
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4>Data Guru</h4>
        </div>
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama Guru</th>
                        <th>Mapel</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0) { ?>
                        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?= $row['nip'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['mapel'] ?></td>
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
