<?php
    //动态调用函数

    $functionName = "strtolower";
    $string = "ABCDEF";

    //通过判断使用适当的函数

    //     if ($functionName == "strtolower") {
    //         $string = strtolower($string);
    //     }


    //动态调用函数
    //     $string = $functionName($string);

    echo $string;

    echo "<br/>\n";

    $a = dirname(__FILE__) . DIRECTORY_SEPARATOR;

    echo $a;

?>