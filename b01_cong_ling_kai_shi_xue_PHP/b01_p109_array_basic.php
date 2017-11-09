<?php
/**
 * User:  zxwtry
 * File:  b01_p109_array_basic.php
 * Date:  2017/11/9
 * Time:  15:25
 */

/*
 *  数组：
 *      数值数组
 *      关联数组
 *      多维数组
 */

/*
 *  创建数组
 *  新增到后面
 */
function b01_p111_array_basic_create() {
    $a = array("a1", "a2", "a3");
    $a[] = "a4";
    $a[] = array("k1" => "v1", "k2" => "v2");
    $a["key"] = "val";
    echo var_export($a, true);
    echo "<br />";
    /*
        array ( 0 => 'a1', 1 => 'a2', 2 => 'a3', 3 => 'a4',
        4 => array ( 'k1' => 'v1', 'k2' => 'v2', ), 'key' => 'val', )
     */
}

/*
 *  unset删除指定key
 */
function b01_p111_array_basic_unset() {
    $a = array("a1", "a2", "a3");
    unset($a[1]);
    echo var_export($a, true);
    echo "<br />";
    /*
        array ( 0 => 'a1', 2 => 'a3', )
     */
}

/*
 * array_push的key是数字，value就是第二个参数
 */
function b01_p111_array_basic_array_push_pop() {
    $a = array("k1" => "a1", "k2" => "a2", "a3");
    array_push($a, "a4");
    echo var_export($a, true);
    echo "<br />";
    array_push($a, "val");      //第三个参数不知道啥用
    echo var_export($a, true);
    echo "<br />";

    echo "pop的是" . array_pop($a) . "<br />";
    echo var_export($a, true);
    echo "<br />";
    /*
        array ( 'k1' => 'a1', 'k2' => 'a2', 0 => 'a3', 1 => 'a4', )
        array ( 'k1' => 'a1', 'k2' => 'a2', 0 => 'a3', 1 => 'a4', 2 => 'val', )
        pop的是val
        array ( 'k1' => 'a1', 'k2' => 'a2', 0 => 'a3', 1 => 'a4', )
     */
}


/*
 *  count计算数组长度
 */
function b01_p115_array_basic_for() {
    $a = array("a1", "a2", "a3");
    $c = count($a);
    for ($i = 0; $i < $c; $i ++) {
        echo "index:" . $i . " value:" . $a[$i] . "<br />";
    }
    /*
        index:0 value:a1
        index:1 value:a2
        index:2 value:a3
     */
}


/*
 *  foreach遍历数组
 */
function b01_p115_array_basic_foreach() {
    $a = array("a1", "a2", "a3");
    foreach($a as $one) {
        echo $one . "<br />";
    }
    foreach($a as $key => $val) {
        echo "key:" . $key . " val:" . $val . "<br />";
    }
    /*
        a1
        a2
        a3
        key:0 val:a1
        key:1 val:a2
        key:2 val:a3
     */
}


//b01_p111_array_basic_create();
//b01_p111_array_basic_unset();
//b01_p111_array_basic_array_push_pop();
//b01_p115_array_basic_for();
//b01_p115_array_basic_foreach();