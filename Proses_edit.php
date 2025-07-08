<?php
include 'Koneksi.php';

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$nomor_kk = $_POST['nomor_kk'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$iuran = $_POST['iuran'];

mysqli_query($conn, "UPDATE warga SET
    nama_lengkap='$nama_lengkap',
    nomor_kk='$nomor_kk',
    nik='$nik',
    alamat='$alamat',
    status='$status',
    iuran='$iuran'
    WHERE id=$id");

header("Location: Index.php");
?>