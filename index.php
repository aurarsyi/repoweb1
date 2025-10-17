<?php
// index.php - Halaman Dinamis dengan Tema Waktu

// Judul halaman
$title = "Selamat Datang di APP1";

// Waktu saat ini
$date = date('l, d F Y H:i:s');
$hour = date('H');

// Identitas Pembuat
$name = "Aura Rizkiatul Arsyi";
$nim = "H1101231003";

// Tentukan tema warna & pesan sesuai waktu
if ($hour >= 5 && $hour < 11) {
    $bgColor = "linear-gradient(135deg, #FFFAE3, #FFF4C4)";
    $textColor = "#333";
    $greeting = "Selamat Pagi! Awali harimu dengan semangat dan senyum 😊";
} elseif ($hour >= 11 && $hour < 15) {
    $bgColor = "linear-gradient(135deg, #E3F2FD, #BBDEFB)";
    $textColor = "#222";
    $greeting = "Selamat Siang! Terus produktif dan jangan lupa istirahat sejenak ☀️";
} elseif ($hour >= 15 && $hour < 18) {
    $bgColor = "linear-gradient(135deg, #FFE0B2, #FFCC80)";
    $textColor = "#222";
    $greeting = "Selamat Sore! Waktu yang pas untuk refleksi dan bersyukur 🌇";
} else {
    $bgColor = "linear-gradient(135deg, #1E1E2F, #2C3E50)";
    $textColor = "#f1f1f1";
    $greeting = "Selamat Malam! Waktunya menenangkan diri dan beristirahat 🌙";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: <?php echo $bgColor; ?>;
            color: <?php echo $textColor; ?>;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            transition: background 1s ease;
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            max-width: 700px;
            width: 90%;
            padding: 50px;
            text-align: center;
            animation: fadeInUp 1s ease;
        }

        h1 {
            color: #007bff;
            font-size: 2em;
            margin-bottom: 15px;
        }

        p {
            font-size: 1.1em;
            margin: 10px 0;
        }

        .info {
            margin-top: 30px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            display: inline-block;
            animation: pulse 3s infinite;
        }

        .highlight {
            color: #007bff;
            font-weight: 600;
        }

        .footer {
            margin-top: 40px;
            font-size: 0.9em;
            opacity: 0.8;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(0,123,255, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(0,123,255, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0,123,255, 0); }
        }

        .quote {
            margin-top: 25px;
            font-style: italic;
            font-size: 1em;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1><?php echo $title; ?></h1>
        <p>Website ini berhasil di-deploy menggunakan <span class="highlight">GitHub Actions CI/CD</span>.</p>
        <p>Waktu saat ini: <strong><?php echo $date; ?></strong></p>

        <div class="info">
            <p><strong><?php echo $greeting; ?></strong></p>
        </div>

        <div class="quote">
            <?php
                // Pesan motivasi acak ringan
                $quotes = [
                    "Konsistensi kecil setiap hari jauh lebih berarti daripada usaha besar sesekali.",
                    "Belajar bukan soal cepat, tapi soal terus melangkah.",
                    "Kamu tidak harus hebat untuk memulai, tapi kamu harus memulai untuk menjadi hebat.",
                    "Setiap kesulitan adalah tanda bahwa kamu sedang bertumbuh.",
                    "Jangan takut gagal, takutlah jika kamu berhenti mencoba."
                ];
                echo $quotes[array_rand($quotes)];
            ?>
        </div>

        <div class="footer">
            <p>Dikembangkan oleh <span class="highlight"><?php echo $name; ?></span><br>
            NIM: <strong><?php echo $nim; ?></strong></p>
            &copy; <?php echo date('Y'); ?> APP1. All Rights Reserved.
        </div>
    </div>
</body>
</html>
