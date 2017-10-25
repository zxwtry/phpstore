<?php
    $a = "hello";
    $$a = "world";
    //var_dump($hello);
    //string(5) "world"
    
    var_dump($$a);
    //string(5) "world"
    
    echo "$$a";
    //$hello
?>