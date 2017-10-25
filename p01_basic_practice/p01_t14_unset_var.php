<?php
    $a = "abc";
    $a = NULL;
    $b = "def";
    unset($b);
    
    var_dump($a, $b);
?>