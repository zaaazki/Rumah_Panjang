<?php
$konek = mysqli_connect('localhost', 'root', '', 'Rumah_panjang');
if (!$konek) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>