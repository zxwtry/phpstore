<?php
/**
 * Created by PhpStorm.
 * User: zxwtry
 * Date: 2017/11/6
 * Time: 18:33
 */


/*
 *  比较运算符：
 *      ==和!=后面再加一个等于号
 *          表示：同时判断类型相同
 *      <>是不等于
 *
 */
function b01_p074_operator_compare() {
    $a = "1";
    $b = 1;
    echo intval($a == $b);
    echo "<br/>";
    echo intval($a === $b);
    echo "<br/>";
    echo intval($a <> $b);
    echo "<br/>";
    echo intval($a != $b);
    echo "<br/>";
    echo intval($a !== $b);
    echo "<br/>";
    /*
        1
        0
        0
        0
        1
     */
}

/*
 *  逻辑运算符：
 *      !
 *      &&      and
 *      ||      or
 *      Xor
 *
 *      && ||的优先级高于 and or
 */
function b01_p075_operator_logic() {
    $a = true;
    $b = false;

    var_dump(! $a);
    echo "<br/>";
    var_dump($a && $b);
    echo "<br/>";
    var_dump($a || $b);
    echo "<br/>";
    var_dump($a Xor $b);
    echo "<br/>";
    /*
        bool(false)
        bool(false)
        bool(true)
        bool(true)
     */
}

/*
 *  位运算符：
 *      对整型数中指定的位进行置位
 *      如果左右参数都是字符串，位运算符将操作字符的ASCII的值
 *
 *      $a & $b
 *      $a | $b
 *      $a ^ $b
 *      ~$a
 *      $a << $b
 *      $a >> $b
 */
function b01_p075_operator_bit() {
    $a = 0x77;
    $b = 0x11;
    echo ($a & $b); //0x11
    echo "<br />";
    echo ($a | $b); //0x77
    echo "<br />";
    echo ($a ^ $b); //0x66
    echo "<br />";
    echo (~ $b);    //0xFFFFFFFFFFFFFFEE
    echo "<br />";
    echo ($b << 1); //0x22
    echo "<br />";
    echo ($b >> 1); //0x8
    echo "<br />";
}

/*
 *  执行运算符  ``
 */
function b01_p076_operator_exec() {
    $a = `ipconfig`;
    $b = iconv("GBK", "UTF-8", $a);
    echo $b;
}

/*
 *  错误控制运算符
 *      @
 *      将可能产生的任何错误信息都被忽略
 *
 *  如果激活了 track_errors特性，
 *  表达式所产生的任何错误信息都存放
 *  在变量$php_errormsg中。
 *
 *  $php_errormsg变量，每次出错时都会被覆盖
 */
function b01_p076_operator_error() {
    $a = 100;
    $b = 0;
    @$c = $a / $b;  //这里不会报错
    echo ($c);
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo ($a / $b); //这里会报错
}
//b01_p074_operator_compare();
//b01_p075_operator_logic();
//b01_p075_operator_bit();
//b01_p076_operator_exec();
//b01_p076_operator_error();