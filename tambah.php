<?php
require "koneksi.php";

require "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $foto = $_POST["foto"];
    $deskripsi = $_POST["deskripsi"];
    $kategori = $_POST["kategori"]; 

    $query = "INSERT INTO tb_data_makanan (nama, harga, foto, deskripsi, kategori) 
                     VALUES ('$nama', $harga, '$foto', '$deskripsi', '$kategori')";

    if (mysqli_query($koneksi, $query)) {
       
        header("Location: index.php?nama=$nama&harga=$harga&foto=$foto&deskripsi=$deskripsi&kategori=$kategori");
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .center {
            text-align: center;
        }

        form {
            width: 60%;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 3px;
            resize: vertical;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1 class="center">Tambah Makanan</h1>
    <form method="post" action="">
        <label for="nama">Nama Makanan:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="kategori">Kategori:</label>
        <input type="text" id="kategori" name="kategori" required> 

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" required>

        <label for="foto">URL Gambar:</label>
        <input type="text" id="foto" name="foto" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" rows="4" required></textarea>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
