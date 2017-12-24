<?php
/**
 * User:  zxwtry
 * File:  b01_p153_string.php
 * Date:  2017/11/16
 * Time:  15:27
 */


/*
    strlen用于计算字符串长度
    strlen计算中文字符时，如果UTF-8编码，一个中文长度为3
 */
function b01_p153_string_strlen() {
    $s = "你好世界aabb";
    echo strlen($s);
    /*
        16
     */
}

/*
    mb_internal_encoding ($encoding = null) {}
    get/set internal character encoding

    mb_strlen ($str, $encoding = null) {}
    如果UTF-8编码，一个中文长度为1
 */
function b01_p153_string_mb() {

    echo mb_internal_encoding();
    echo "<br />";
    echo mb_strlen("你好世界aabb", "UTF-8");
    echo "<br />";
    echo mb_strlen("你好世界aabb", "GB2312");
    echo "<br />";
    echo mb_strlen("你好世界aabb");
    echo "<br />";
    /*
        UTF-8
        8
        11
        8
     */
}


/*
    substr ($string, $start, $length = null) {}
    截取字符串
    这里的start和length都是以字节记

    具体看例子
 */
function b01_p153_string_substr() {
    $s = "你好世界";
    echo substr($s, 0, 3);
    echo "<br />";
    echo substr($s, 3);
    echo "<br />";
    /*
        你
        好世界
     */
}


/*
    需要知道某个子字符串是否在指定的字符串中的位置
    strpos ($haystack, $needle, $offset = 0) {}

    $haystack: 就是大字符串
    $needle: 就是小字符串
 */
function b01_p153_string_strpos() {
    $s = "abcdabc";
    //    0123456
    $p = "da";
    $index = strpos($s, $p);
    var_dump($index);
    echo "<br />";
    $index = strpos($s, $p, 4);
    var_dump($index);
    echo "<br />";
    /*
        int(3)
        bool(false)
     */
}


/*
    替换指定的字符串
    str_replace ($search, $replace, $subject, &$count = null) {}

 */
function b01_p153_string_str_replace() {
    $search = "abc";
    $replace = "ABC";
    $subject = "abcggabcaabcUUabc";
    $count = 0;
    $ret = str_replace($search, $replace, $subject, $count);
    var_dump($ret);
    echo "<br />";
    var_dump($count);   //替换次数
    /*
        string(17) "ABCggABCaABCUUABC"
        int(4)
     */
}

/*
    作用判断：
        aaaaa
        中将 aa 替换成 AA
    总共替换几次

    可以看出 分段替换
 */
function b01_p153_string_str_replace2() {
    $search = 'aa';
    $replace = 'AA';
    $subject = 'aaaaa';
    $count = 0;
    $ret = str_replace($search, $replace, $subject, $count);
    var_dump($ret);
    echo "<br />";
    var_dump($count);   //替换次数
    /*
        string(5) "AAAAa"
        int(2)
     */
}


/*
    转换字符串为数组
    explode ($delimiter, $string, $limit = null) {}
    $delimiter: 分隔
    $string: 需要转化的字符串
    $limit: 限制返回的数组最多包含 $limit 个元素
 */
function b01_p153_string_explode() {
    $s = "aaaaaa/bbbbb/ccccccc";
    $arr = explode('/', $s, 2);
    echo "<pre />";
    var_dump($arr);
    echo "<br />";
    /*
        array(2) {
          [0]=>
          string(6) "aaaaaa"
          [1]=>
          string(13) "bbbbb/ccccccc"
        }
     */
}


/*
    转换数组为字符串
    implode ($glue = "", array $pieces) {}
 */
function b01_p153_string_implode() {
    $arr = ['aaaa', 'bbbb', 'cccc'];
    $s = implode('/', $arr);
    echo $s;
}


/*
    设置字符编码
    iconv ($in_charset, $out_charset, $str) {}
    $in_charset: $str的编码方式
    $out_charset: 返回的编码方式
    $str: 输入的字符串
 */
function b01_p153_string_iconv() {

}


//b01_p153_string_strlen();
//b01_p153_string_mb();
//b01_p153_string_substr();
//b01_p153_string_strpos();
//b01_p153_string_str_replace();
//b01_p153_string_str_replace2();
//b01_p153_string_strpos2();
//b01_p153_string_explode();

//$ua = "Mozilla/5.0 (Windows NT 6.3; WOW64; Trident/7.0; MALCJS; rv:11.0) like Gecko";
//$ua = "Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; rv:11.0) like Gecko";

//exit(strpos($ua, "Windows") > 0 && strpos($ua, "like Gecko") > 0);