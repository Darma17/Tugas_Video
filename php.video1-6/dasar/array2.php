<?php 
    $apel = ['manalagi', 'washington', 'merah'];
    $buah = ['mangga' => 200, 'jeruk' => 300,'apel' => $apel];

    var_dump($buah);
    echo "<pre>";
    print_r($buah);
    echo "</pre>";

    echo $buah['apel'][2]."<br>";

    foreach ($buah as $key => $value) {
        if (!is_array($value)) {
            echo $key;
            echo "<br>";
        } else {
            echo $key;
            foreach ($value as $key => $value) {
                echo "<li>";
                echo $value;
                echo "</li>";
            }
        }
    }
?>