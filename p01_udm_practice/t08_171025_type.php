<?php
    $v = "0";
    var_dump($v);
    //string(1) "0"
    $v += 2;
    var_dump($v);
    //int(2)
    $v = $v + 1.3;
    var_dump($v);
    //float(3.3)
    $v = 5 + " hello ";
    var_dump($v);
    //int(5)
    $v = 5 + " world";
    var_dump($v);
    //int(5)
    $v = 5.0 + " world";
    var_dump($v);
    //float(5)
    $v = 5 + "3 world";
    var_dump($v);
    //int(8)
    $v = 5 + "3.0 world";
    var_dump($v);
    //float(8)
    $v = 5 + "0x99 world";
    var_dump($v);
    //int(158)
    $v = 5 + "077hello";
    var_dump($v);
    //int(82)
    $v = 5 + 077;
    var_dump($v);
    //int(68)
    //先转换为十进制，然后再做运算
    //$v = 5 + 087;   //不正确的8进制，不会报错但是运行出错。
    //var_dump($v);
    //int(5)
    //087不是合法八进制数
?>