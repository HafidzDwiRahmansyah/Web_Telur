<?php

include "../../app/db.php";

if (isset($_GET['nama'])) {
    $id = $_GET['nama'];

    $delete = $conn->query("DELETE FROM tabel_admin WHERE nama_adm = '$id'");

    if (isset($delete)) {
        echo "<script>alert('Data berhasil dihapus')
    location.replace('index.php')</script>";
    } else {
        echo "<script>alert('Mohon pilih data yang ingin dihapus')
    location.replace('index.php')</script>";
    }
}
