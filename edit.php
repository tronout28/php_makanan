<?php
require "koneksi.php";
require "function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $makanan = getMakananById($id);

    if (!$makanan) {
        echo "Data tidak ditemukan.";
        exit;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $kategori = $_POST["kategori"];
        $harga = $_POST["harga"];
        $foto = $_POST["foto"];
        $deskripsi = $_POST["deskripsi"];

        if (editMakanan($id, $nama, $kategori, $harga, $foto, $deskripsi)) {
            echo '<script>
                if (confirm("Data berhasil diperbarui. Apakah Anda ingin kembali ke halaman utama?")) {
                    window.location.href = "index.php";
                } else {
                    // Pengguna memilih "Cancel"
                    window.location.href = "edit.php?id=' . $id . '"; // Kembali ke halaman edit
                }
            </script>';
            exit;
        } else {
            echo "Gagal menyimpan perubahan.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Makanan</title>
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
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"] {
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
    <h1 class="center">Edit Makanan</h1>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $makanan->id; ?>">
        <label for="nama">Nama Makanan:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $makanan->nama; ?>" required>

        <label for="kategori">Kategori:</label>
        <input type="text" id="kategori" name="kategori" value="<?php echo $makanan->kategori; ?>" required>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" value="<?php echo $makanan->harga; ?>" required>

        <label for="foto">URL Gambar:</label>
        <input type="text" id="foto" name="foto" value="<?php echo $makanan->foto; ?>" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea id="deskripsi" name="deskripsi" rows="4" required><?php echo $makanan->deskripsi; ?></textarea>

        <button type="submit">Simpan Perubahan</button>
        <a href="index.php" onclick="return confirm('Apakah Anda yakin tidak ingin melanjutkan pengeditan?')" style="text-decoration: none; background-color: #ff0000; color: #fff; padding: 10px 20px; border-radius: 3px; margin-left: 10px;">Back</a>
    </form>
</body>
</html>