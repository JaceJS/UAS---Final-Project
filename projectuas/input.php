<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <link rel="stylesheet" type="text/css" href="/web/home.css"> 
    <title>Daftar Akademi</title>
</head>
<body class="input-body">
    <header>
        <h3 id="home">Daftar Akademi</h3>
        <div class="mobile-display">
            <img class="hamburger-icon" src="./web/images/icon-hamburger.svg" alt="icon-hamburger">
            <img class="close-icon" src="./web/images/icon-close.svg" alt="icon-close">
        </div>
        <nav>
            <div class="menu"><a href = "./web/Home.html">Dashboard</a></div>
            <div class="menu"><a href = "./web/profilKelompok.html">Struktur</a></div>
            <div class="menu"><a href = "./web/profilUnsrat.html">Sistem</a></div>
            <div class="menu"><a href = "./web/other.html">Profil</a></div>
            <div class="menu"><a href="./input.php">Daftar</a></div>
        </nav>
    </header>
    <main class="form-container">
        <div class="form-berkas">
            <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>  
            <div class="container-upload">
                <!-- membuat form dengan aksi ke file upload.php dan menggunakan enctype untuk memungkinkan sebuah file atau foto dapat dikirim ke server -->
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <?php echo "<h3>Silahkan masukkan berkas pendaftaran Akademi Ninja Konoha.</h3><br>" ?>
                    <!-- membuat inputan dengan tipe file -->
                    <input type="file" name="file">
                    <input class="submit" type="submit" name="submit" value="Submit">
                </form>
            </div>
            <div class="container-logout">
                <form action="" method="POST" class="login-email">                                              
                    <div class="input-group">
                        <!-- membuat tombol logout yang mengarah file logout.php -->
                        <a href="logout.php" class="btn">Logout</a>
                    </div>
                </form>
            </div>        
        </div>
    </main>
    
    <script src="script.js"></script>
</body>
</html>