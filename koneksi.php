<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_php";

$koneksi = mysqli_connect($server, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo '<span style="color: #4CAF50; font-size: 18px;">Koneksi Berhasil</span>';
}
?>
