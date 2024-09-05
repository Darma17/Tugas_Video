<?php 
    // operator aritmatika
    // 1 = true 2 = false

    $a = 5;
    $b = 4;

    $c = $a + $b;
    echo $c. '<br>';

    $c = $a - $b;
    echo $c. '<br>';

    $c = $a * $b;
    echo $c. '<br>';

    $c = $a / $b;
    echo $c. '<br>';
    echo round($c). '<br>'; /*untuk pembulatan ke atas*/
    echo floor($c). '<br>'; /*untuk pembulatan ke bawah*/

    $c = $a % $b;
    echo $c. '<br>';

    // Operator logika

    $c = $a < $b;
    echo $c.'<br>';/*false tidak tampil 1 true */

    $c = $a > $b;
    echo $c.'<br>';/*false tidak tampil 1 true */

    $c = $a == $b;
    echo $c.'<br>';

    $c = $a != $b;
    echo $c.'<br>';

    // Increment

    $a++;
    echo $a.'<br>';

    // decrement

    $b--;
    echo $b.'<br>';

    // operator string

    $kata = 'Sura';
    $kota = 'baya';
    $hasil = $kata.$kota;
    $hasil .= ' Kota Pahlawan';
    echo $hasil;
?>