<?php
require "koneksi.php";
require "function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (hapusMakanan($id)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: Data tidak dapat dihapus.";
    }
}
?>
