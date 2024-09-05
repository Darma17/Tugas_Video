<?php 
    $nama = ["toji","gojo","yuji",100];

    foreach ($nama as $key) {
        echo $key.'<br>';
    }
    
    $name = [
        "toji" => "Surabaya",
        "gpjp" => "Bandung",
        "yuji" => "Sidoarjo"
    ];

    foreach ($name as $key => $value) {
        echo $key. " Tinggal di ".$value.'<br';
    }
?>