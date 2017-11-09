<?php
/**
 * Created by PhpStorm.
 * User: zxwtry
 * Date: 2017/11/9
 * Time: 11:26
 */



$a = 1;
$b = 2;
$c = 3;
$d = 4;

/*
 *  局部作用域
 *  $a在b01_p103_scope_local之外无法使用
 */
function b01_p103_scope_local() {
    $a = 100;
}

/*
 * 没有添加
 * global $b;
 * 就无法使用$b变量
 */
function b01_p103_scope_local_global() {
//    global $b = 100;  //这样写会报错
    global $b;
    global $c, $d;
    $b = 200;
    $c = 300;
    $d = 400;
}

function b01_p103_scope_local_main() {
    b01_p103_scope_local_global();
    global $b;
    global $c, $d;
    echo '$b ->' . $b . "<br />";
    echo '$c ->' . $c . "<br />";
    echo '$d ->' . $d . "<br />";
    /*
        $b ->200
        $c ->300
        $d ->400
     */
}

function b01_p105_scope_globals_main() {
    echo '$b ->' . $GLOBALS['a'] . "<br />";
    echo '$c ->' . $GLOBALS['b'] . "<br />";
    echo '$d ->' . $GLOBALS['c'] . "<br />";
    /*
        $b ->1
        $c ->2
        $d ->3
     */
}

/*
 * static的一次使用
 */
function b01_p105_scope_static_func() {
    static $a = 0;
    echo "a->" . $a . "<br />";
    $a ++;
}

function b01_p105_scope_static_main() {
    b01_p105_scope_static_func();
    b01_p105_scope_static_func();
    b01_p105_scope_static_func();
    /*
        a->0
        a->1
        a->2
     */
}


/*
 * 函数是全局
 * 函数1中函数2
 * 函数2只能在函数1中使用
 */
function b01_p105_scope_parent() {
    echo "parent<br />";
//    b01_p105_scope_child();     //会报错
    function b01_p105_scope_child() {
        echo "child<br />";
    }
    b01_p105_scope_child();
    b01_p105_scope_child();
    /*
        parent
        child
        child
     */
}



//b01_p103_scope_local_main();
//b01_p105_scope_globals_main();
//b01_p105_scope_static_main();
//b01_p105_scope_parent();

