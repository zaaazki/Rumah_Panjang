<?php
session_start();
require_once 'koneksi.php';

// Initialize error message
$error = $_SESSION['login_error'] ?? null;
unset($_SESSION['login_error']);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - ReadWisee</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: #65cbaf;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            position: relative;
            overflow-x: hidden;
        }
        .corner-deco {
            position: absolute;
            width: 180px;
            height: 180px;
            background: rgba(255,255,255,0.25);
            border-radius: 40px;
            z-index: 1;
        }
        .corner-deco.tl { left: -60px; top: -60px; }
        .corner-deco.tr { right: -60px; top: -60px; }
        .corner-deco.bl { left: -60px; bottom: -60px; }
        .corner-deco.br { right: -60px; bottom: -60px; }
        .back-btn {
            position: absolute;
            top: 32px;
            left: 32px;
            background: none;
            border: none;
            font-size: 32px;
            color: #fff;
            cursor: pointer;
            z-index: 10;
        }
        .main-flex {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            z-index: 2;
            position: relative;
        }
        .left-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .logo-circle {
            width: 180px;
            height: 180px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        }
        .logo-circle img {
            width: 120px;
            height: 120px;
            object-fit: contain;
        }
        .brand-name {
            color: #287376;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 0;
        }
        .header-title {
            position: absolute;
            top: 60px;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 44px;
            font-weight: 700;
            color: #fff;
            z-index: 2;
            letter-spacing: 1px;
            text-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .right-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-card {
            background: #fff;
            border-radius: 32px;
            box-shadow: 6px 6px 16px 0px rgba(0,0,0,0.10);
            padding: 48px 36px 36px 36px;
            min-width: 340px;
            max-width: 370px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-card h2 {
            font-size: 28px;
            font-weight: 700;
            color: #222;
            margin-bottom: 32px;
            text-align: center;
        }
        .form-group {
            width: 100%;
            margin-bottom: 22px;
        }
        .form-group label {
            font-size: 16px;
            color: #222;
            margin-bottom: 6px;
            display: block;
        }
        .form-control {
            width: 100%;
            padding: 14px 16px;
            border-radius: 12px;
            border: none;
            background: #f2f2f2;
            font-size: 16px;
            color: #333;
            margin-bottom: 0;
        }
        .form-control:focus {
            outline: 2px solid #65cbaf;
            background: #fff;
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin: 10px 0 18px 0;
            width: 100%;
        }
        .remember-me input {
            margin-right: 8px;
            width: 16px;
            height: 16px;
            accent-color: #65cbaf;
        }
        .remember-me label {
            color: #333;
            font-size: 15px;
        }
        .login-button {
            width: 100%;
            padding: 13px;
            background: #4b65f8;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.2s;
        }
        .login-button:hover {
            background: #3a50d0;
        }
        .register-link {
            text-align: center;
            margin-top: 18px;
            font-size: 15px;
            color: #333;
        }
        .register-link a {
            color: #4b65f8;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        .register-link a:hover {
            color: #65cbaf;
            text-decoration: underline;
        }
        .error-message {
            color: #e74c3c;
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
            padding: 10px;
            background-color: #fdecea;
            border-radius: 5px;
            border: 1px solid #f5c6cb;
            animation: shake 0.5s ease-in-out;
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        @media (max-width: 900px) {
            .main-flex { flex-direction: column; }
            .header-title { position: static; margin: 32px 0 0 0; }
        }
        @media (max-width: 600px) {
            .main-flex { flex-direction: column; }
            .header-title { font-size: 30px; margin-top: 24px; }
            .form-card { padding: 28px 8px 24px 8px; min-width: 90vw; max-width: 98vw; }
            .logo-circle { width: 120px; height: 120px; }
        }
    </style>
</head>

<body>
    <div class="corner-deco tl"></div>
    <div class="corner-deco tr"></div>
    <div class="corner-deco bl"></div>
    <div class="corner-deco br"></div>
    <button class="back-btn" onclick="window.location.href='index.php'" title="Kembali">&#8592;</button>
    <div class="header-title">Masuk</div>
    <div class="main-flex">
        <div class="left-section">
            <div class="logo-circle">
                <img src="img/kura-kura.png" alt="Logo ReadWisee" loading="eager">
            </div>
            <div class="brand-name">ReadWisee</div>
        </div>
        <div class="right-section">
            <form class="form-card" method="POST" action="proses_login.php">
                <h2>Log In</h2>
                <?php if ($error): ?>
                    <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Alamat email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                </div>
                <div class="form-group">
                    <label for="password">Kata sandi</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Kata sandi" required>
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Ingat akun saya</label>
                </div>
                <button type="submit" class="login-button">Masuk</button>
                <div class="register-link">
                    Belum punya akun? <a href="register.php">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>