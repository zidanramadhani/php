<?php

    $hari = 'minggu';

    if($hari == 'rabu'){ 
        echo "Ini Hari Rabu, Kuliah Masuk Pukul 07.30";
    }elseif($hari == 'selasa'){
        echo "Ini adalah hari Selasa. Kuliah Libur";
    }elseif($hari == 'kamis'){
        echo "Ini adalah hari Kamis";
    }else{
        echo "Maaf Hari Tidak Terdaftar";
    }
?>