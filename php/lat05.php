<?php 

    $tanggal = 32;

    // $hasil = $tanggal < 32;

    if ($tanggal < 31) {
        if ($tanggal > 0) {
            echo 'benar';
        }else {
            echo 'salah';
        }
    }else {
        echo 'salah';
    }

    echo '<br>';

    $nilai = 90;

    if ($nilai >= 0 && $nilai <= 100) {
        echo '<h1>';
        if ($nilai >= 90 && $nilai <= 100) {
            echo 'A';
        }
        elseif ($nilai >= 80 && $nilai < 90) {
            echo 'B';
        }
        elseif ($nilai >= 70 && $nilai < 80) {
            echo 'C';
        }
        elseif ($nilai >= 60 && $nilai < 70) {
            echo 'D';
        }
        elseif ($nilai >= 50 && $nilai < 60) {
            echo 'E';
        }else {
            echo 'Belajar Lagi';
        }

    }else {
        echo 'Masukkan nilai yang benar';
    } echo '</h1>';
?>