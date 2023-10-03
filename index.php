<?php
    require "koneksi.php";
    require "function.php";
    $data_makanan = query("SELECT * FROM tb_data_makanan");
?>

<!DOCTYPE html>
<html>
<head>


    <title>Data Makanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
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

        table {
            width: 80%;
            margin: 20px auto;
            background-color: #ffffff;
            border-collapse: collapse;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .price {
            font-weight: bold;
            color: #4CAF50;
        }
    </style>
</head>
<body>
<h1 class="center">Data Makanan</h1>
    <a href="tambah.php" style="text-decoration: none; margin: 20px auto; display: block; width: 100px; text-align: center; background-color: #4CAF50; color: #fff; padding: 10px; border-radius: 5px;">Tambah</a>
    <table>
    <tr>
        <th>Makanan</th>
        <th>Kategori</th> 
        <th>Harga</th>
        <th>Gambar</th>
        <th>Deskripsi</th> 
        <th style="text-align:center;">Aksi</th> 
    </tr>
    <?php if (isset($_GET['nama']) && isset($_GET['harga']) && isset($_GET['gambar']) && isset($_GET['deskripsi']) && isset($_GET['kategori'])): ?>
        <tr>
            <td><?php echo $_GET['nama']; ?></td>
            <td><?php echo $_GET['kategori']; ?></td>
            <td><span class="price">Rp <?php echo number_format($_GET['harga'], 0, ",", "."); ?></span></td>
            <td><img src="<?php echo $_GET['gambar']; ?>" alt="<?php echo $_GET['nama']; ?>"></td>
            <td><?php echo $_GET['deskripsi']; ?></td>
      
        </tr>
    <?php endif; ?>
    <?php foreach ($data_makanan as $makanan): ?>
    <tr>
        <td><?php echo $makanan->nama; ?></td>
        <td><?php echo $makanan->kategori; ?></td> 
        <td><span class="price">Rp <?php echo number_format($makanan->harga, 0, ",", "."); ?></span></td>
        <td><img src="<?php echo $makanan->foto; ?>" alt="<?php echo $makanan->nama; ?>"></td>
        <td><?php echo $makanan->deskripsi; ?></td>
        <td style="border-left: 1px solid #ddd; border-right: 1px solid #ddd; text-align: center; width:60px;">
         <a href="edit.php?id=<?php echo $makanan->id; ?>" style="margin-right: 15px;">
           <i class="fas fa-edit" style="color: #3498db;"></i>
         </a>
         <a href="hapus.php?id=<?php echo $makanan->id; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
           <i class="fas fa-trash" style="color: red;"></i>
         </a>
        </td>
    </tr>
<?php endforeach; ?>
</table>


</body>
</html>
