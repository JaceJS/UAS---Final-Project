<?php

// menyimpan parameter-parameter yang ada dalam variabel
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    // membuat array dengan isi format yang bisa diterima
    $allowTypes = array('jpg','png','jpeg','pdf');
    // mengecek jika tipe file yang dimasukkan sesuai atau tidak
    if(in_array($fileType, $allowTypes)){
        //mengatur lokasi penyimpanan file yang sudah diupload ke folder "uploads"
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            echo "<script>alert('File berhasil diupload.')</script>";            
        }else{
            echo "<script>alert('Ada kesalahan saat mengupload file.!')</script>";            
        }
    }else{        
        echo "<script>alert('Hanya menerima file dengan format JPG, JPEG, PNG, dan PDF.')</script>";            
    }
}else{
    echo "<script>alert('Pilih file yang akan diupload.')</script>";    
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
    <div class="container">
        <div class="back">
            <h3><a href="input.php" class="btn">Kembali ke halaman sebelumnya</a></h3>
        </div>        
    </div>
</body>
</html>