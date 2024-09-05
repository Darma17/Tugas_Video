<?php 

    $hari = 1;

    switch ($hari) {
        case 1:
            echo 'Senin';
            break;
        case 2:
            echo 'Selasa';
            break;
        case 3:
            echo 'Rabu';
            break;
        case 4:
            echo 'Kamis';
            break;
        case 5:
            echo 'Jumat';
            break;
        case 6:
            echo 'Sabtu';
            break;
        case 7:
            echo 'Minggu';
            break;
        
        default:
            echo 'Masukkan antara hari ke 1-7';
            break;
    }

    $kondisi = 'tambah';

    switch ($kondisi) {
        case 'tambah':
            echo 'anda memilih tambah';
            break;
        case 'ubah':
            echo 'anda memilih ubah';
            break;
        case 'hapus':
            echo 'anda memilih hapus';
            break;
        
        default:
            echo 'Pilihan belum ada';
            break;
    }
?>