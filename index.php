<?php

$conn = mysqli_connect("localhost", "root", "", "uasbasisdata");


$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>

        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="edit.php?id=<?=$row["NIM"]; ?>">Edit</a> |
                <a href="hapus.php?id=<?=$row["NIM"]; ?>">Hapus</a>
            </td>
            <td><?= $row["NIM"]; ?></td>
            <td><?= $row["Nama"]; ?></td>
            <td><?= $row["Jurusan"]; ?></td>
            <td><?= $row["Email"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>