<?php
session_start();
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Validasi input
        if (!isset($_POST['email'], $_POST['password'])) {
            throw new Exception("Email dan password harus diisi");
        }

        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = $_POST['password'];
        $remember = isset($_POST['remember']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Format email tidak valid");
        }

        // Proses database
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = mysqli_prepare($konek, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (!$user = mysqli_fetch_assoc($result)) {
            throw new Exception("Email atau password salah");
        }

        if (!password_verify($password, $user['password'])) {
            throw new Exception("Email atau password salah");
        }

        // Set session
        $_SESSION['user'] = [
            'id' => $user['id'],
            'email' => $user['email'],
            'status' => $user['status'],
            'nama' => $user['nama']
        ];

        // Remember me
        if ($remember) {
            $token = bin2hex(random_bytes(32));
            $expiry = time() + (86400 * 30);

            setcookie('remember_token', $token, $expiry, "/", "", true, true);

            $update = "UPDATE users SET remember_token = ?, token_expiry = ? WHERE id = ?";
            $stmt = mysqli_prepare($konek, $update);
            mysqli_stmt_bind_param($stmt, "ssi", $token, date('Y-m-d H:i:s', $expiry), $user['id']);
            mysqli_stmt_execute($stmt);
        }

        // Redirect
        header("Location: user_{$user['status']}/dashboard_{$user['status']}.php");
        exit();
    } catch (Exception $e) {
        $_SESSION['login_error'] = $e->getMessage();
        header("Location: login.php");
        exit();
    }
}