<?php
session_start();

// Periksa apakah pengguna sudah login dengan memeriksa session 'username'
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: login_page.php'); // Arahkan ke halaman login jika belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <a href="logout.php" class="logout-button">Keluar</a> <!-- Tambahkan tombol Keluar -->
        <h1>Manajemen Pegawai RR Beauty</h1>
    </header>
    
    <div class="dashboard-container">
        <div class="profile-section">
            <div class="profile-info">
                <img src="source/profil2.jpg" alt="Profile" class="profile-pic">
                <h2><?php echo htmlspecialchars($_SESSION['username']); ?></h2> <!-- Tampilkan nama pengguna dari session -->
                <p>Administrator</p>
            </div>
            <div class="stats">
                <div class="stat-card">
                    <h3>Average Score</h3>
                    <p>72.5</p>
                </div>
                <div class="stat-card">
                    <h3>Attendance</h3>
                    <p>80%</p>
                </div>
                <div class="stat-card">
                    <h3>Grades</h3>
                    <p>A</p>
                </div>
            </div>
        </div>

        <div class="main-section">
            <h1>Hallo! <?php echo htmlspecialchars($_SESSION['username']); ?></h1> <!-- Tampilkan username -->
            <p>Selalu Harimu Menyenangkan.</p>
            <div class="cards">
                <div class="card">
                    <h3>Data Member</h3>
                    <p>Lihat data lengkap semua Member.</p>
                    <a href="php/datam.php" class="button">Lihat</a>
                </div>
                <div class="card">
                    <h3>Data Pegawai</h3>
                    <p>Lihat Pegawai yang tersedia.</p>
                    <a href="php/dataj.php" class="button">Lihat</a>
                </div>
                <div class="card">
                    <h3>Bantuan</h3>
                    <p>Hubungi administrator untuk bantuan lebih lanjut.</p>
                    <a href="contact_page.html" class="button">Hubungi</a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; RR Beauty 2024</p>
    </footer>
</body>
</html>