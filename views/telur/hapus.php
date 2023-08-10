<?php

include "../../app/db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $conn->query("DELETE FROM tabel_telur WHERE id_telur = '$id'");

    if (isset($delete)) {
        echo "<script>alert('Data berhasil dihapus')
    location.replace('index.php')</script>";
    } else {
        echo "<script>alert('Mohon pilih data yang ingin dihapus')
    location.replace('index.php')</script>";
    }
}
