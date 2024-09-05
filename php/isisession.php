<?php 

    session_start();

    echo $_SESSION['nama'];
    echo '<br>';
    echo $_SESSION['alamat'];
    echo '<hr>';
    foreach ($_SESSION as $key => $value) {
        echo $key.' : '.$value.'<br>';
    }
?>