<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM warga WHERE id=$id"));
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/form.css">
    <title>Edit Warga</title>
</head>
<body>
    <h2>Edit Warga</h2>
    <form action="Proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>" required><br>
        <input type="text" name="nomor_kk" value="<?= $data['nomor_kk'] ?>" required><br>
        <input type="text" name="nik" value="<?= $data['nik'] ?>" required><br>
        <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required><br>
        <input type="text" name="status" value="<?= $data['status'] ?>" required><br>
        <input type="number" name="iuran" value="<?= $data['iuran'] ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
