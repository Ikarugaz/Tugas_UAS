<?php
$conn = mysqli_connect("localhost", "root", "", "rt");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
