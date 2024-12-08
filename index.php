<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tax Sidoarjo - Sistem Pembayaran Pajak Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4285f4;
            --secondary-color: #34a853;
            --text-color: #333;
            --background-overlay: rgba(0,0,0,0.6);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image: url('gambar.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            line-height: 1.6;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--background-overlay);
            z-index: 1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 2;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        nav {
            display: flex;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: var(--primary-color);
        }

        .welcome-banner {
            text-align: center;
            padding: 50px 0;
        }

        .welcome-banner h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .welcome-banner p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }

        .card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 25px;
            text-align: center;
            transition: transform 0.3s ease;
            text-decoration: none;
            color: white;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .card:hover {
            transform: scale(1.05);
            background: rgba(255,255,255,0.2);
        }

        .card i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: var(--secondary-color);
        }

        .notice {
            background: rgba(255,255,255,0.1);
            padding: 15px;
            margin-top: 30px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="container">
        <header class="header">
            <div class="logo">E-Tax Sidoarjo</div>
            <nav>
                <a href="<?php echo BASE_URL; ?>index.php"><i class="fas fa-home"></i> Beranda</a>
                <a href="<?php echo BASE_URL; ?>contact.php"><i class="fas fa-envelope"></i> Kontak</a>
                <a href="<?php echo BASE_URL; ?>login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
            </nav>
        </header>

        <div class="welcome-banner">
            <h1>Selamat Datang di E-Tax Sidoarjo</h1>
            <p>Platform pembayaran pajak online resmi untuk wilayah Sidoarjo. Kelola pajak Anda dengan mudah, cepat, dan aman.</p>
        </div>

        <div class="services">
            <a href="pajak_kendaraan.php" class="card">
                <i class="fas fa-car"></i>
                <h2>Pajak Kendaraan</h2>
                <p>Admministrasi pembayaran pajak kendaraan Anda secara online dengan mudah dan cepat.</p>
                <div class="btn">Mulai Sekarang</div>
            </a>
        </div>
        <footer class="footer">
            <p>&copy; 2024 E-Tax Sidoarjo.</p>
    </footer>
    </div>
</body>
</html>
