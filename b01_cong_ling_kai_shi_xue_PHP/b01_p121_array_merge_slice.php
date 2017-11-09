<?php
/**
 * User:  zxwtry
 * File:  b01_p121_array_merge_slice.php
 * Date:  2017/11/9
 * Time:  16:43
 */


/*
 *  function array_merge (array $array1, array $array2 = null, array $_ = null)
 *  array_merge()将一个或多个数组的单元合并起来
 *  一个数组中的值附加在前一个数组的后面
 */
function b01_p121_array_merge_slice_merge() {
    $a1 = array("k1" => "a1", "k2" => "a2");
    $a2 = array("a3", "a4");
    $a3 = array("a5");
    $a4 = array("a6");
    $ret = array_merge($a1, $a2, $a3, $a4);
    echo var_export($ret, true) . "<br />";
    /*
        array ( 'k1' => 'a1', 'k2' => 'a2', 0 => 'a3', 1 => 'a4', 2 => 'a5', 3 => 'a6', )
     */
}

/*
 *  array_slice (array $array, $offset, $length = null, $preserve_keys = false)
 *  看例子吧
 */
function b01_p121_array_merge_slice_slice() {
    $a = array("k1" => "a0", "k2" => "a1", "a2", "a3", "a4", "a5");
    $ret = array_slice($a, 1);
    echo var_export($ret, true) . "<br />";
    $ret = array_slice($a, 1, 3);
    echo var_export($ret, true) . "<br />";
    $ret = array_slice($a, 1, -1);
    echo var_export($ret, true) . "<br />";
    $ret = array_slice($a, 1, 3, true);
    echo var_export($ret, true) . "<br />";
    $ret = array_slice($a, 1, 3, false);
    echo var_export($ret, true) . "<br />";
    /*
        array ( 'k2' => 'a1', 0 => 'a2', 1 => 'a3', 2 => 'a4', 3 => 'a5', )
        array ( 'k2' => 'a1', 0 => 'a2', 1 => 'a3', )
        array ( 'k2' => 'a1', 0 => 'a2', 1 => 'a3', 2 => 'a4', )
        array ( 'k2' => 'a1', 0 => 'a2', 1 => 'a3', )
        array ( 'k2' => 'a1', 0 => 'a2', 1 => 'a3', )
     */
}

//b01_p121_array_merge_slice_merge();
//b01_p121_array_merge_slice_slice();
