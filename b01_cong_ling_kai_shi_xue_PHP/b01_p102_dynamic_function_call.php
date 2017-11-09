<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/9
 * Time: 11:03
 */


/*
 *  动态加载函数
 *      $f($t)
 *  $f就是一个函数名字
 *  $t就是参数
 */

/*
 *  动态调用函数不能用于语言结构
 *  例如：  echo()、print()、unset()、isset()
 *         empty()、include()、require()等等
 */

function b01_p102_dynamic_function_call_func($s) {
    return strtolower($s);
}


function b01_p102_dynamic_function_call_main() {
    $s = "ABCDE";
    $f = "b01_p102_dynamic_function_call_func";
    $t = $f($s);
    echo $t;
    /*
     * abcde
     */
}

function b01_p102_dynamic_function_call_other1() {
    $s = "ABCDE";
    $f = "strtolower";
    $t = $f($s);
    echo $t;
    /*
     * abcde
     */
}

function b01_p102_dynamic_function_call_other2() {
    $s = "ABCDE";
    $f = "isset";
    $t = $f($s);
    echo $t;
    /*
     * Fatal error: Call to undefined function isset()
     * in D:\code\php\phpstore\b01_cong_ling_kai_shi_xue_PHP
     * \b01_p102_dynamic_function_call.php on line 51
     */
}
//b01_p102_dynamic_function_call_main();
//b01_p102_dynamic_function_call_other1();
//b01_p102_dynamic_function_call_other2();