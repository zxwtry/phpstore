<?php
/**
 * Created by PhpStorm.
 * User: zxwtry
 * Date: 2017/11/6
 * Time: 18:07
 */

/*
 *  意思就是：
 *      等于号之后，加一个&
 *      那么指向同一个内存
 */
function b01_p066_var_reference() {
    $a = 100;
    $a_ref =& $a;
    $b_ref = & $a;
    $b = $a;

    $a = 101;

    var_dump($a);
    echo "<br/>";
    var_dump($a_ref);
    echo "<br/>";
    var_dump($b_ref);
    echo "<br/>";
    var_dump($b);

    /*
        int(101)
        int(101)
        int(101)
        int(100)
     */
}

/*
 *  意思就是：
 *      通过unset，将变量销毁
 */
function b01_p066_var_destroy() {
    $a = 100;

    var_dump($a);
    echo "<br/>";

    unset($a);

    var_dump($a);       //这句话会报错
    echo "<br/>";
    /*
        int(100)
        NULL
     */
}

//b01_p066_var_reference();
//b01_p066_var_destroy();