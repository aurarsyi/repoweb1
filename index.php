<?php
// index.php - Halaman Utama yang Ditingkatkan

// Judul halaman
$title = "Selamat Datang di APP1";

// Waktu saat ini
$date = date('l, d F Y H:i:s');

// Identitas Pembuat
$name = "Aura Rizkiatul Arsyi";
$nim = "H1101231003";
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
            background: linear-gradient(135deg, #e3f2fd, #f8f9fa);
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            color: #333;
            overflow: hidden;
        }

        .card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
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
            color: #555;
        }

        .info {
            margin-top: 30px;
            padding: 15px;
            background: #f0f8ff;
            border-left: 5px solid #007bff;
            border-radius: 10px;
            display: inline-block;
            animation: pulse 2s infinite;
        }

        .footer {
            margin-top: 50px;
            font-size: 0.9em;
            color: #777;
        }

        .highlight {
            color: #007bff;
            font-weight: 600;
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

        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 10px 25px;
            background-color: #007bff;
            color: white;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="card">
        <h1><?php echo $title; ?></h1>
        <p>Website ini berhasil di-deploy menggunakan <span class="highlight">GitHub Actions CI/CD</span>.</p>
        <p>Waktu saat ini: <strong><?php echo $date; ?></strong></p>

        <div class="info">
            <p>Dikembangkan oleh:</p>
            <p><span class="highlight"><?php echo $name; ?></span></p>
            <p>NIM: <strong><?php echo $nim; ?></strong></p>
        </div>

        <a href="#" class="btn">Jelajahi Lebih Lanjut</a>

        <div class="footer">
            &copy; <?php echo date('Y'); ?> APP1. All Rights Reserved.
        </div>
    </div>
</body>
</html>
