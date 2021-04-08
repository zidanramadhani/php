<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar Cookie</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["nama"])) {
        echo "Isi dari cookie 'nama' adalah : ".$_COOKIE['nama'];
    }else{
        setcookie("nama", "Muhammad Zidan Ramadhani");
        echo "Cookie berhasil dibuat, please refresh browser";
    }
    ?>
</body>
</html>