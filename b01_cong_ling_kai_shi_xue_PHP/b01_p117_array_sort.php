<?php
/**
 * User:  zxwtry
 * File:  b01_p117_array_sort.php
 * Date:  2017/11/9
 * Time:  16:06
 */


/*
 *  sort会删除key
 *  sort (array &$array, $sort_flags = null)
 *  sort_flags参数可选
 *      SORT_NUMBERIC：按数值排序。（整数，浮点数）
 *      SORT_REGULAR：按照相应的ASCII值对元素排序，（例如，B在a的前面）
 *      SORT_STRING：
 *      SORT_LOCALE_STRING：根据当前的区域（locale）设置来把单元当做字符串比较
 */
function b01_p117_array_sort_sort() {
    $a = array(6, 1, 5, 2, 4, 3);
    sort($a, SORT_NUMERIC);
    echo var_export($a, true) . "<br />";
    $a = array("ABC", "aaa", "A_A", "a");
    sort($a, SORT_REGULAR);
    echo var_export($a, true) . "<br />";
    /*
        array ( 0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, )
        array ( 0 => 'ABC', 1 => 'A_A', 2 => 'a', 3 => 'aaa', )
     */
}

/*
 *  sort会删除key
 *  rsort (array &$array, $sort_flags = null)
 *  sort_flags参数可选
 *      SORT_NUMBERIC：按数值排序。（整数，浮点数）
 *      SORT_REGULAR：按照相应的ASCII值对元素排序，（例如，B在a的前面）
 *      SORT_STRING：
 *      SORT_LOCALE_STRING：根据当前的区域（locale）设置来把单元当做字符串比较
 */
function b01_p117_array_sort_rsort() {
    $a = array("key6" => 6, 1, "key5" => 5, 2, 4, 3);
    rsort($a, SORT_NUMERIC);
    echo var_export($a, true) . "<br />";
    $a = array("ABC", "aaa", "A_A", "a");
    rsort($a, SORT_REGULAR);
    echo var_export($a, true) . "<br />";
    /*
        array ( 0 => 6, 1 => 5, 2 => 4, 3 => 3, 4 => 2, 5 => 1, )
        array ( 0 => 'aaa', 1 => 'a', 2 => 'A_A', 3 => 'ABC', )
     */
}


/*
 *  shuffle会删除key
 *  随机排序
 *  shuffle (array &$array)
 */
function b01_p117_array_sort_shuffle() {
    $a = array("key6" => 6, 1, "key5" => 5, 2, 4, 3);
    shuffle($a);
    echo var_export($a, true) . "<br />";
    shuffle($a);
    echo var_export($a, true) . "<br />";
    /*
        array ( 0 => 6, 1 => 2, 2 => 5, 3 => 4, 4 => 1, 5 => 3, )
        array ( 0 => 6, 1 => 1, 2 => 3, 3 => 4, 4 => 5, 5 => 2, )
     */
}


/*
 *  array_reverse(array $array, $preserve_keys = null)
 *  会返回一个新数组
 *  $preserve_keys = true  保留key
 *  array_reverse只能对当前数组的第一维元素进行反向
 *  如果第一维中还含有数组，那么将保持原来的顺序不变
 */
function b01_p117_array_sort_array_reverse() {
    $a = array(
        "k1" => array(
            "kk1" => "vv1",
            "kk2" => "vv2",
            "kk3" => "vv3",
        ),
        "k2" => "v2",
        "k3" => "v3"
    );
    echo var_export($a, true) . "<br />";
    $ret = array_reverse($a, false);
    echo var_export($ret, true) . "<br />";
    echo var_export($a, true) . "<br />";
    /*
        array ( 'k1' => array ( 'kk1' => 'vv1', 'kk2' => 'vv2', 'kk3' => 'vv3', ), 'k2' => 'v2', 'k3' => 'v3', )
        array ( 'k3' => 'v3', 'k2' => 'v2', 'k1' => array ( 'kk1' => 'vv1', 'kk2' => 'vv2', 'kk3' => 'vv3', ), )
        array ( 'k1' => array ( 'kk1' => 'vv1', 'kk2' => 'vv2', 'kk3' => 'vv3', ), 'k2' => 'v2', 'k3' => 'v3', )
     */
}

//b01_p117_array_sort_sort();
//b01_p117_array_sort_rsort();
//b01_p117_array_sort_shuffle();
b01_p117_array_sort_array_reverse();