<?php
include 'Koneksi.php';

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$nomor_kk = $_POST['nomor_kk'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$iuran = $_POST['iuran'];

mysqli_query($conn, "INSERT INTO warga (nama_lengkap, nomor_kk, nik, alamat, status, iuran)
VALUES ('$nama_lengkap', '$nomor_kk', '$nik', '$alamat', '$status', '$iuran')");

header("Location: Index.php");
?>
