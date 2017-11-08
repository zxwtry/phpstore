<?php
/**
 * Created by PhpStorm.
 * User: zxwtry
 * Date: 2017/11/6
 * Time: 18:16
 */

/*
 *  常量能够定义:
 *      布尔，整型，浮点，字符串
 *  常量不能定义：
 *      资源
 *
 *  常量特性：
 *      1，只能通过define定义
 *      2，不能销毁，或，重新定义，取消定义
 *      3，不受变量定义范围约束：在任何地方定义和访问
 */
function b01_p068_contant() {
    define("ABC", 121);
    echo ABC;
    /*
        121
     */
}

/*
 *  有5个魔术变量：
 *      根据其使用位置，改变其值
 *
 *  分别是：
 *      __FILE__
 *      __LINE__
 *      __FUNCTION__
 *      __METHOD__
 *      __CLASS__
 */
function b01_p069_magic() {
    var_dump(__FILE__);
    echo "<br/>";
    var_dump(__LINE__);
    echo "<br/>";
    var_dump(__FUNCTION__);
    echo "<br/>";
    var_dump(__CLASS__);
    echo "<br/>";
    var_dump(__METHOD__);
    echo "<br/>";

    /*
        string(82) "D:\code\php\phpstore\b01_cong_ling_kai_shi_xue_PHP\b01_p068_var_constant_magic.php"
        int(42)
        string(14) "b01_p069_magic"
        string(0) ""
        string(14) "b01_p069_magic"
     */
}

//b01_p068_contant();
//echo ABC;       //同样可以访问常量ABC

//b01_p069_magic();
