<?php
require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DASAR</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>NO.</th>
                <th>Action</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="#">Edit</a>
                        |
                        <a href="#">Delete</a>
                    </td>
                    <td><img src="img/<?= $row['gambar']; ?>" alt="" width="50"></td>
                    <td><?= $row['nrp']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </thead>
    </table>
</body>

</html>