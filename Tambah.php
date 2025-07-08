<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/form.css">
    <title>Tambah Daftar Warga</title>
</head>
<body>
    <h2>Tambah Daftar Warga</h2>
    <form action="Proses_data.php" method="POST">
        <input type="hidden" name="id" placeholder="id" required><br>
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required><br>
        <input type="text" name="nomor_kk" placeholder="Nomor KK" required><br>
        <input type="text" name="nik" placeholder="NIK" required><br>
        <input type="text" name="alamat" placeholder="Alamat" required><br>
        <input type="text" name="status" placeholder="Status" required><br>
        <input type="number" name="iuran" placeholder="Iuran" required><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>