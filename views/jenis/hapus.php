<?php

include "../../app/db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $delete = $conn->query("DELETE FROM tabel_jenis_tel WHERE id_jenis = '$id'");;

    if($delete){
        echo "<script>alert('Data berhasil dihapus')
        location.replace('index.php')</script>";
    }else{
        echo "<script>alert('Kesalah dalam sistem')
        location.replace('index.php')</script>";
    }
}