<?php
session_start();

// Hanya redirect jika sudah login DAN session valid
if (isset($_SESSION["user_id"]) && !empty($_SESSION["user_id"])) {
    if ($_SESSION["user_type"] == 'admin') {
        header("Location: admin/admin_dashboard.php");
        exit();
    } elseif (isset($_SESSION["location"])) {
        if ($_SESSION["location"] == 'karang-asam') {
            header("Location: user/karang-asam/dashboard_karang_asam.php");
        } elseif ($_SESSION["location"] == 'keledang') {
            header("Location: user/keledang/dashboard_keledang.php");
        } elseif ($_SESSION["location"] == 'wahau') {
            header("Location: user/wahau/dashboard_wahau.php");
        } elseif ($_SESSION["location"] == 'long_bagun') {
            header("Location: user/loang_bagun/dashboard_long_bagun.php");
        } elseif ($_SESSION["location"] == 'long_iram') {
            header("Location: user/long_iram/dashboard_long_iram.php");
        } elseif ($_SESSION["location"] == 'bengkal') {
            header("Location: user/bengkal/dashboard_bengkal.php");
        } elseif ($_SESSION["location"] == 'bontang') {
            header("Location: user/bontang/dashboard_bontang.php");
        } elseif ($_SESSION["location"] == 'sambera') {
            header("Location: user/sambera/dashboard_sambera.php");
        } elseif ($_SESSION["location"] == 'sentawar') {
            header("Location: user/sentawar/dashboard_sentawar.php");
        } elseif ($_SESSION["location"] == 'tanjung_batu') {
            header("Location: user/tanjung-batu/dashboard_tanjung_batu.php");
        } else {
            header("Location: halaman_default.php");
        }
        exit();
    }
    // Jika tidak memenuhi kondisi di atas, tetap di index.php
}

$error = isset($_GET['error']) ? $_GET['error'] : '';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-custom {
            background-color: #009688 !important;
        }

        .error-message {
            color: #dc3545;
            font-size: 0.875em;
            margin-top: 5px;
        }
    </style>
</head>

<body class="bg-custom">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 350px;">
            <div class="card-body">
                <div class="text-center mb-3">
                    <img src="img/pln.png" alt="Logo" class="img-fluid" style="width: 120px;">
                </div>
                <h5 class="card-title text-center mb-3">Login</h5>
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>
                <form method="POST" action="proses_login.php">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Masukkan username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Masukkan password" required>
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
                <div class="text-center">
                    <small>VERSI : (ZR)</small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>