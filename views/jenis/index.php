<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Telur - Jual Telur</title>
    <link href="../../assets/img/content/logo.png" rel="shortcut icon">
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

$tampil = $conn->query("SELECT * FROM tabel_jenis_tel");

if (isset($_POST['save'])) {
    $hrg = $_POST['harga'];

    $simpan_data = $conn->query("INSERT INTO tabel_jenis_tel VALUES(NULL,'$hrg')");

    if ($simpan_data) {
        echo "<script><script>alert('Data Jenis Telur Berhasil Di Tambah')
        location.replace('')</script></script>";
    } else {
        echo '<script>swal("Pesan", "Terdapat Error Didalam Program", "error")</script>';
    }
}
?>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <h5><a href="../" class="a-custom"><i class="bi bi-arrow-left-short pe-1"></i>Kembali</a></h5>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <h3 class="text-center fw-300 pt-3 pb-3">Halaman Jenis Telur</h3>
            </div>
        </div>
    </nav>

    <div class="section-pt"></div>
    <div class="container">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="harga" class="form-label mt-3">Jenis Telur</label>
                                    <input type="text" class="form-control input rounded-0" name="harga" id="harga" placeholder="jenis..." required>
                                </div>
                                <div class="d-grid gap-2 mt-4">
                                    <button type="submit" class="btn btn-success" name="save"><i class="bi bi-download pe-2"></i>Simpan Data</button>
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
            <div class="col-lg-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Telur</th>
                            <th>Kustom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tampil as $lihat) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $lihat['nama']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $lihat['id_jenis'] ?>" class="btn btn-warning text-white"><i class="bi bi-pencil pe-1"></i>Edit</a>
                                    <a href="hapus.php?id=<?= $lihat['id_jenis'] ?>" class="btn btn-danger ms-2"><i class="bi bi-trash3 pe-1"></i>Hapus</a>
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