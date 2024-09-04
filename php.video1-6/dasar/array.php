<?php 

    $buah = ['mangga','jeruk',500,'apel',300,2.5];

    var_dump($buah);

    echo "<br>";

    echo $buah[0];

    echo "<br>";

    foreach ($buah as $item => $value) {
        echo $item. "=>". $value;
        echo "<br>";
    }

    // Array asosiatif

    $harga = ['mangga'=>100,'apel'=>200,'jeruk'=>100];

    var_dump($harga);

    echo "<br>";

    foreach ($harga as $key => $value) {
        echo $key." Harganya ".$value;
        echo "<br>";
    }

    echo $harga['mangga'];
    echo "<br>";

    $isi = array_keys($harga);
    echo "<br>";
    echo $isi[0];
?>