<?php
include 'Koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM warga WHERE id=$id");
header("Location: Index.php");
?>
