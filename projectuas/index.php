<?php 

include 'config.php';

error_reporting(0);

// memulai session
session_start();

ini_set('memory_limit', '180M');

if (isset($_SESSION['username'])) {
    header("Location: input.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // mengecek jika email dan password tersedia pada database
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    // jika email dan password sesuai, maka akan pindah ke file input.php
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: input.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Form</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800; color: #fff;">Login</p>
            <div class="input-group">
                <input style="color: #fff;" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input style="color: #fff;" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text" style="color: #fff;">Anda belum punya akun? <a href="register.php" style="color: #19ff28;">Register</a></p>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>