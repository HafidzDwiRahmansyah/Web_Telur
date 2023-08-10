<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Admin - Jual Telur</title>
    <link rel="shortcut icon" href="../../assets/img/content/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Montserrat:wght@300;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<?php

include "../../app/db.php";
include "../custom-alert/sweet.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$tampil = $conn->query("SELECT * FROM tabel_admin WHERE id_adm = '$id'")->fetch_assoc();

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $img = $_POST['img'];

    $edit = $conn->query("UPDATE tabel_admin SET nama_adm = '$name', username_adm = '$user', password_adm = '$pass', avatar = '$img' WHERE id_adm = '$id'");

    if ($edit) {
        echo "<script>alert('Data Berhasil Di Update')
        location.replace('')</script>";
    } else {
        echo '<script>swal("Pesan", "Terdapat Error Didalam Program", "error");</script>';
    }
}
?>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <h5><a href="../" class="a-custom"><i class="bi bi-arrow-left-short pe-1"></i>Kembali</a></h5>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <h3 class="text-center fw-300 pt-3 pb-3">Halaman Profile</h3>
            </div>
        </div>
    </nav>
    <div class="section-pt"></div>
    <div class="container">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-10">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="<?= $tampil['avatar']; ?>" alt="" width="100%" height="auto" class="object-fit">
                                </div>
                                <div class="col-lg-4 ms-3">
                                    <label for="user" class="form-label">Username</label>
                                    <input type="text" class="form-control input rounded-0" name="user" id="user" placeholder="username..." value="<?= $tampil['username_adm']; ?>" required>
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control input rounded-0" name="name" id="name" placeholder="nama..." value="<?= $tampil['nama_adm']; ?>" required>
                                </div>
                                <div class="col-lg-4">
                                    <label for="img" class="form-label">Foto Profile</label>
                                    <input type="text" class="form-control input rounded-0" name="img" id="img" placeholder="link..." value="<?= $tampil['avatar']; ?>" required>
                                    <label for="pass" class="form-label">Password</label>
                                    <input type="text" class="form-control input rounded-0" name="pass" id="pass" placeholder="password..." value="<?= $tampil['password_adm']; ?>" required>
                                    <div class="d-grid gap-2 mt-3">
                                        <button type="submit" class="btn btn-success" name="save"><i class="bi bi-pencil pe-2"></i>Ubah Profile</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>