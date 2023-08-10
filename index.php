<?php

include "app/db.php";

session_start();

if (isset($_POST['login'])) {
    $name = $_POST['user'];
    $pass = $_POST['pass'];

    $login = $conn->query("SELECT * FROM tabel_admin WHERE username_adm = '$name' AND password_adm = '$pass'");
    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        echo "<script>alert('Login berhasil')
        location.replace('views/index.php')</script>";
        $_SESSION['username_adm'] = $login->fetch_assoc();
    } else {
        echo "<script>alert('Mohon masukan username dan password dengan benar')
        location.replace('')</script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Jual Telur</title>
    <link rel="shortcut icon" href="assets/img/content/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Montserrat:wght@300;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="section-pt"></div>
        <div class="row justify-content-center">
            <div class="col-lg-4 justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center fw-400">Login Jual Telur</h2>
                        <img src="assets/img/content/logo.png" alt="Jual_Telur" class="mx-auto d-block pb-2" width="220px" height="auto">
                        <form action="" method="post">
                            <input type="text" class="form-control mb-3" name="user" id="user" placeholder="username..." required>
                            <input type="password" class="form-control mb-4" name="pass" id="pass" placeholder="password..." required>
                            <div class="d-grid gap-2">
                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>