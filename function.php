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
?>