<?php
require_once '../../koneksi.php';
$token = $konek->real_escape_string($_GET['token']);

// Ambil pertanyaan terbaru yang belum dijawab
$result = $konek->query("SELECT pertanyaan, waktu_tanya FROM pertanyaan_kelas WHERE token='$token' AND jawaban IS NULL ORDER BY id DESC LIMIT 1");

if ($result && $row = $result->fetch_assoc()) {
    echo '<div class="pertanyaan">';
    echo '<p>' . htmlspecialchars($row['pertanyaan']) . '</p>';
    echo '<small>Ditanya pada: ' . htmlspecialchars($row['waktu_tanya']) . '</small>';
    echo '</div>';
} else {
    echo "<p>Belum ada pertanyaan aktif</p>";
}
?>