<?php

session_start();

if (!isset($_SESSION['username_adm'])) {
    echo "<script>alert('Mohon Login Terlebih Dahulu')
    location.replace('../')</script>";
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda - Jual Telur</title>
    <link rel="shortcut icon" href="../assets/img/content/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Montserrat:wght@300;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <img src="../assets/img/content/logo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
            <span class="fw-400">
                <h4>Jual Telur</h4>
            </span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active fw-300" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-3 fw-300" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-3 fw-300" href="admin/">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-3 fw-300" href="jenis/">Jenis Telur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-3 fw-300" href="telur/">Telur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ps-3 fw-300" href="transaksi/">Transaksi</a>
                    </li>
                </ul>
            </div>
            <div class="btn-group dropstart">
                <img type="button" src="<?= $_SESSION['username_adm']['avatar'] ?>" alt="avatar" width="60" height="60" class="img-fluid rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu mt-4">
                    <li><a class="dropdown-item" href="admin/edit.php?id=<?= $_SESSION['username_adm']['id_adm'] ?>">Kustom Akun</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="section-pt-15"></div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <h1 class="fw-400">Website Penjualan Telur</h1>
                    <p class="fw-300 text-justify">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum, neque excepturi possimus voluptatibus quidem enim asperiores ex et accusantium, placeat perferendis tenetur quisquam maxime ut.</p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-5">
                    <img src="../assets/img/content/img-01.png" alt="" width="100%" height="auto">
                </div>
            </div>
        </div>
    </div>
    <div class="section-pt-15">
        <div class="section" id="tentang">
            <div class="container">
                <div class="row justify-content-center">
                    <h2 class="fw-400 text-center">Tentang Website</h2>
                    <div class="col-lg-5 mt-5 mb-5">
                        <p class="fw-300 text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. At sed cupiditate veritatis, perferendis deleniti quos sapiente maiores ex, in enim accusantium a dignissimos possimus neque.
                        </p>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 mt-5 mb-5">
                        <p class="fw-300 text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. At sed cupiditate veritatis, perferendis deleniti quos sapiente maiores ex, in enim accusantium a dignissimos possimus neque.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>