<?php 

    $name = 'user';
    $value = 'Yacht';

    setcookie($name,$value);
    
    $value = 'Brach';
    
    setcookie($name,$value);

    echo $_COOKIE[$name];

    setcookie("user","", time() - 3600);

    var_dump($_COOKIE);
?>