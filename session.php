<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>belajar Cookie</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["nama"] = "Muhammad Zidan Ramadhani";
        $_SESSION["alamat"] = "Sungai Andai";

        echo "Variabel sudah disimpan pada server <br>";

        if (!isset($_SESSION['nama']) && ($_SESSION['alamat'])) {
            echo "Gagal Menyimpan session"; 
        }else{
            echo "<h1>".$_SESSION["nama"]. "<br>".$_SESSION["alamat"];
        }
    ?>
</body>
</html>