<?php 


    function belajar() {
        echo "Saya belajar PHP".'<br>';
    }

    belajar();

    function luas($p, $l) {
        $luas = $p * $l;

        echo $luas;
        echo '<br>';
    }
    
    function luase($p = 10, $l = 10) {
        $luas = $p * $l;

        return $luas;
    }

    function kali($satu, $dua) {
        $kali = $satu * $dua;

        echo $kali;
    }

    kali(2,"3");
    echo '<br>';

    function kalie($satu, $dua) {
        return $satu * $dua;
    }
    $hasil = kalie(5,1);
    echo $hasil;
    echo '<br>';

    luas(20,9);
    luas(20,20);

    function output() {
        return "Belajar function";
    }

    echo '<h1>'.output().'</h1>';
    echo luase() * 10;

?>