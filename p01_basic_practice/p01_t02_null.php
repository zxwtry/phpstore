<?php
    $var0 = NULL;
    $var1 = NULL;
    $var2 = "abcd";
    unset($var2);
    $var2 = NULL;
    var_dump($var0, $var1, $var2);
?>