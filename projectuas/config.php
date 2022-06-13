<?php 

// menghubungkan localhost dengan database pada phpmyadmin, kemudian disimpan dalam variabel conn
$server = "localhost";
$user = "id19097834_projectuas1";
$pass = "l^!sf>ftTQDfef18";
$database = "id19097834_projectuas";

$conn = mysqli_connect($server, $user, $pass, $database);

// mengetes jika localhost gagal tersambung dengan database
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

?>