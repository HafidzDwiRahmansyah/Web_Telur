<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Transaksi - Jual Telur</title>
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

session_start();

if (!isset($_SESSION['username_adm'])) {
    echo "<script>alert('Mohon Login Terlebih Dahulu')
    location.replace('../../')</script>";
}

$tampil = $conn->query("SELECT * FROM tabel_transaksi");
$see_detail = $conn->query("SELECT * FROM detail_transaksi");

$rls = $conn->query("SELECT * FROM tabel_telur");
?>

<body>
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <h5><a href="../" class="a-custom"><i class="bi bi-arrow-left-short pe-1"></i>Kembali</a></h5>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <h3 class="text-center fw-300 pt-3 pb-3">Halaman Transaksi</h3>
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
                                    <label for="img" class="form-label mt-3">No Transaksi</label>
                                    <input type="text" class="form-control input rounded-0" name="img" id="img" placeholder="link..." required>
                                    <label for="img" class="form-label mt-3">Nama Admin</label>
                                    <input type="text" class="form-control input rounded-0" name="img" id="img" placeholder="link..." value="<?= $_SESSION['username_adm']['nama_adm'] ?>" disabled>
                                    <label for="jenis" class="form-label">Jenis Telur</label>
                                    <select name="jenis" id="jenis" class="form-control input rounded-0" required>
                                        <?php foreach ($rls as $lihat_rel) { ?>
                                            <option value="<?= $lihat_rel['id_jenis_tel'] ?>"><?= $lihat_rel['id_jenis_tel']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="total" class="form-label">Harga</label>
                                    <input type="number" min="1" class="form-control input rounded-0" name="total" id="total" placeholder="total..." value="<?= $total + $lihat_rel['harga_tel'] ?>" disabled>
                                    <label for="tgl">Tanggal</label>
                                    <input type="text" class="form-control input rounded-0" name="tgl" id="tgl" value="<?= date('h:i:s, a') ?>">
                                    <label for="tgl">Waktu</label>
                                    <input type="text" class="form-control input rounded-0" name="tgl" id="tgl" value="<?= date('l d-m-y') ?>">
                                    <label for="harga" class="form-label mt-3">Jumlah</label>
                                    <input type="number" min="0" class="form-control input rounded-0" name="harga" id="harga" onkeypress="return angka(event)" placeholder="harga..." required>
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
    <div class="container">
        <div class="row g-0 justify-content-center">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Telur</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($see_detail as $detail) { ?>
                            <tr><?= $no++ ?></tr>
                            <tr><?= $detail['id_telur'] ?></tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>