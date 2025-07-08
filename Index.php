<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <title>Daftar Warga RT</title>
</head>
<body>
<div class="container">
    <h2>Daftar Warga RT</h2>
    <a href="tambah.php" class="btn">+ Tambah Warga</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Alamat</th>
            <th>Status</th>
            <th>Iuran (Rp)</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM warga");
        while ($row = mysqli_fetch_assoc($data)) {
            echo "<tr>
                    <td>$no</td>
                    <td>$row[nama_lengkap]</td>
                    <td>$row[nik]</td>
                    <td>$row[alamat]</td>
                    <td>$row[status]</td>
                    <td>$row[iuran]</td>
                    <td>
                        <a href='edit.php?id=$row[id]'>Edit</a> |
                        <a href='hapus.php?id=$row[id]' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
                    </td>
                </tr>";
            $no++;
        }
        ?>
    </table>
</div>
</body>
</html>
