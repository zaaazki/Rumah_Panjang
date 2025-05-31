<?php
// proses_register.php

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "Rumah_panjang");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil dan filter data dari form
$nama = $koneksi->real_escape_string($_POST['nama']);
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$tgl_lahir = $_POST['tanggal_lahir'];
$email = $koneksi->real_escape_string($_POST['email']);
$password = $_POST['password'];
$status = $_POST['status'];

// Cek apakah email sudah terdaftar
$cek = $koneksi->query("SELECT id FROM users WHERE email = '$email'");
if ($cek->num_rows > 0) {
    header("Location: register.php?error=email_exists");
    exit();
}

// Hash password sebelum disimpan
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Simpan data ke database
$sql = "INSERT INTO users (nama, alamat, tanggal_lahir, email, password, status) 
        VALUES ('$nama', '$alamat', '$tgl_lahir', '$email', '$hashed_password', '$status')";

if ($koneksi->query($sql) === TRUE) {
    header("Location: login.php");
    exit();
} else {
    header("Location: register.php?error=database_error");
    exit();
}

$koneksi->close();
?>