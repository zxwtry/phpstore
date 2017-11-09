<?php
/**
 * Created by PhpStorm.
 * User: zxwtry
 * Date: 2017/11/9
 * Time: 10:53
 */


/*
 *  就是：
 *      一般而言，传参有：传值和传引用
 *
 *      $n： 传值
 *     &$n： 传引用
 */



function b01_p100_function_parameter_byValue($n) {
    $n ++;
    echo __FUNCTION__ . "<br />";
    echo $n . "<br />";
}


function b01_p100_function_parameter_byValue_main() {
    $n = 100;
    echo __FUNCTION__ . "<br />";
    echo $n . "<br />";

    echo "<br />";

    b01_p100_function_parameter_byValue($n);


    echo "<br />";

    echo __FUNCTION__ . "<br />";
    echo $n . "<br />";


    /*
        b01_p100_function_parameter_byValue_main
        100

        b01_p100_function_parameter_byValue
        101

        b01_p100_function_parameter_byValue_main
        100
     */
}


function b01_p100_function_parameter_byReference(&$n) {
    $n ++;
    echo __FUNCTION__ . "<br />";
    echo $n . "<br />";
}


function b01_p100_function_parameter_byReference_main() {
    $n = 100;
    echo __FUNCTION__ . "<br />";
    echo $n . "<br />";

    echo "<br />";

    b01_p100_function_parameter_byReference($n);


    echo "<br />";

    echo __FUNCTION__ . "<br />";
    echo $n . "<br />";


    /*
        b01_p100_function_parameter_byReference_main
        100

        b01_p100_function_parameter_byReference
        101

        b01_p100_function_parameter_byReference_main
        101
     */
}


//b01_p100_function_parameter_byValue_main();
//b01_p100_function_parameter_byReference_main();
