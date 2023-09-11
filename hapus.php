<?php
require "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buat kueri DELETE untuk menghapus data berdasarkan ID atau parameter yang sesuai
    $query = "DELETE FROM tb_data_makanan WHERE id = $id";

    if (mysqli_query($koneksi, $query)) {
        // Redirect kembali ke halaman "index.php" setelah penghapusan berhasil
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
