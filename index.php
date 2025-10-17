<?php
// index.php - Halaman Dinamis dengan Tema Waktu (Gradasi Biru Tua dan Cream Vibrant)

// Judul halaman
$title = "Selamat Datang di APP1";

// Waktu saat ini
$date = date('l, d F Y H:i:s');
$hour = date('H');

// Identitas Pembuat
$name = "Aura Rizkiatul Arsyi";
$nim = "H1101231003";

// Tema warna biru tua dan cream lebih vibrant sesuai waktu
if ($hour >= 5 && $hour < 11) {
    // Pagi — biru tua ke cream dengan aksen hangat
    $bgColor = "linear-gradient(135deg, #2C3E50 0%, #3E5C76 40%, #FDF6E3 100%)";
    $textColor = "#1A1A1A";
    $greeting = "Selamat Pagi! Awali harimu dengan semangat dan senyum 😊";
} elseif ($hour >= 11 && $hour < 15) {
    // Siang — biru navy ke cream segar dengan highlight cerah
    $bgColor = "linear-gradient(135deg, #34495E 0%, #5D7FA3 50%, #FFF8E7 100%)";
    $textColor = "#1A1A1A";
    $greeting = "Selamat Siang! Terus produktif dan jangan lupa istirahat sejenak ☀️";
} elseif ($hour >= 15 && $hour < 18) {
    // Sore — biru gelap ke cream hangat dengan gradasi lembut
    $bgColor = "linear-gradient(135deg, #1B263B 0%, #3A4F6B 50%, #FFEFD5 100%)";
    $textColor = "#1A1A1A";
    $greeting = "Selamat Sore! Waktu yang pas untuk refleksi dan bersyukur 🌇";
} else {
    // Malam — biru sangat tua ke cream lembut dengan aksen deep blue
    $bgColor = "linear-gradient(135deg, #0B1C2C 0%, #1A2B3D 50%, #FFF5E1 100%)";
    $textColor = "#EAECEE";
    $greeting = "Selamat Malam! Waktunya menenangkan diri dan beristirahat 🌙";
}
?>
