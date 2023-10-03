<?php
function query($query) {
    global $koneksi;

    $result = mysqli_query($koneksi, $query);
    $rows = array();

    while ($row = mysqli_fetch_object($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function getMakananById($id) {
    global $koneksi;

    $query = "SELECT * FROM tb_data_makanan WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Error: " . mysqli_error($koneksi));
    }

    $makanan = mysqli_fetch_object($result);
    return $makanan;
}

function tambahMakanan($nama, $kategori, $harga, $foto, $deskripsi) {
    global $koneksi;

    $query = "INSERT INTO tb_data_makanan (nama, kategori, harga, foto, deskripsi) 
              VALUES ('$nama', '$kategori', $harga, '$foto', '$deskripsi')";

    if (mysqli_query($koneksi, $query)) {
        return true;
    } else {
        die("Error: " . mysqli_error($koneksi));
    }
}

function editMakanan($id, $nama, $kategori, $harga, $foto, $deskripsi) {
    global $koneksi;

    $query = "UPDATE tb_data_makanan SET 
              nama='$nama', kategori='$kategori', harga=$harga, foto='$foto', deskripsi='$deskripsi' 
              WHERE id=$id";

    if (mysqli_query($koneksi, $query)) {
        return true;
    } else {
        die("Error: " . mysqli_error($koneksi));
    }
}

function hapusMakanan($id) {
    global $koneksi;

    $query = "DELETE FROM tb_data_makanan WHERE id = $id";

    if (mysqli_query($koneksi, $query)) {
        return true;
    } else {
        die("Error: " . mysqli_error($koneksi));
    }
}

?>

