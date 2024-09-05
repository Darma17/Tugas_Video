<?php 

    // array dimensi
    $nama = array("joni","budi","siti",100,2.5);
    echo $nama[1];
    echo '<br>';
    for ($i=0; $i < 5; $i++) { 
        echo $i.'.';
        echo $nama[$i];
        echo '<br>';
    }
    echo '<hr>';
    foreach ($nama as $key) {
        echo $key;
        echo '<br>';
    }
    echo '<hr>';
    // array asosiatif
    $name = [
        "joni" => "Surabaya",
        "budi" => "Bandung",
        "siti" => "Sidoarjo",
    ];

    echo $name["joni"];
    echo '<br>';

    foreach ($name as $key => $value) {
        echo $key. " Tinggal di ".$value;
        echo '<br>';
    }
?>