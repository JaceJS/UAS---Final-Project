<?php 
// memulai dan menghentikan session, lalu kembali ke file index.php
session_start();
session_destroy();

header("Location: index.php");

?>