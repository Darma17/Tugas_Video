<?php 

    for ($i=1; $i <= 12; $i=$i+2) { 
        echo $i.',';
    }
    echo '<br>';
    for ($i=12; $i >= 1; $i=$i-2) { 
        echo $i.',';
    }
    echo '<br>';
    $a = 1;
    while ($a <= 10) {
        echo $a.',';
        $a++;
    }
    echo '<br>';
    $a = 10;
    while ($a >= 1) {
        echo $a.',';
        $a--;
    }
    echo '<br>';
    $b = 1;
    do {
        echo $b.',';
        $b=$b+2;
    } while ($b <= 15);
    echo '<br>';
    $b = 15;
    do {
        echo $b.',';
        $b--;
    } while ($b >= 1);
?>