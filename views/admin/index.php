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

session_start();

if (!isset($_SESSION['username_adm'])) {
    echo "<script>alert('Mohon Login Terlebih Dahulu')
    location.replace('../../')</script>";
}

$tampil = $conn->query("SELECT * FROM tabel_admin");

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $img = $_POST['img'];

    $simpan_data = $conn->query("INSERT INTO tabel_admin VALUES(NULL, '$name', '$user', '$pass', '$img')");

    if ($simpan_data) {
        echo "<script>alert('Data Admin Berhasil Di Tambah')
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
                <h3 class="text-center fw-300 pt-3 pb-3">Halaman Admin</h3>
            </div>
        </div>
    </nav>
    <div class="section-pt"></div>
    <div class="container">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="user" class="form-label">Username</label>
                                    <input type="text" class="form-control input rounded-0" name="user" id="user" placeholder="username..." required>
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control input rounded-0" name="name" id="name" placeholder="nama..." required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="img" class="form-label">Foto Profile</label>
                                    <input type="text" class="form-control input rounded-0" name="img" id="img" placeholder="link..." required>
                                    <label for="pass" class="form-label">Password</label>
                                    <input type="password" class="form-control input rounded-0" name="pass" id="pass" placeholder="password..." required>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="d-grid gap-2 mt-3">
                                        <button type="submit" class="btn btn-success" name="save"><i class="bi bi-download pe-2"></i>Simpan Data</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-pt"></div>
    <div class="container">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-10">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Password</th>
                            <th>Avatar</th>
                            <th>Kustom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tampil as $lihat) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $lihat['nama_adm']; ?></td>
                                <td><?= $lihat['username_adm']; ?></td>
                                <td><?= $lihat['password_adm']; ?></td>
                                <td><img src="<?= $lihat['avatar']; ?>" alt="" width="50px" height="50px" class="rounded-3 object-fit"></td>
                                <td>
                                    <a href="hapus.php?nama=<?= $lihat['nama_adm'] ?>" class="btn btn-danger ms-2"><i class="bi bi-trash3 pe-1"></i>Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>