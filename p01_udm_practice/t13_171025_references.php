<?php
    $a = "abc";
    $b = & $a;
    $c = $a;
    
    var_dump($a, $b, $c);
    //string(3) "abc" string(3) "abc" string(3) "abc"
    
    $a = "def";
    
    var_dump($a, $b, $c);
    //string(3) "def" string(3) "def" string(3) "abc"
?>