<?php
/**
 * User:  zxwtry
 * File:  b01_p164_mktime.php
 * Date:  2017/11/19
 * Time:  17:28
 */


/*
    输出时间
 */
function b01_p164_echo_time($time) {
    echo date("Y-m-d H:i:s", $time);
    echo "<br />";
}


/*
    构造当前日期的相关日期

    mktime ($hour = null, $minute = null, $second = null,
        $month = null, $day = null, $year = null, $is_dst = null) {}

    注：$is_dst 表示是否是夏时制，为1代表是，为0代表不是（默认不是）
 */
function b01_p164_mktime_next() {
    //今天
    $now = time();
    //明天
    $tomorrow = mktime(date('H', $now), date('i', $now),
            date('s', $now), date('m', $now),
            date('d', $now) + 1, date('Y', $now));

    //下月
    $nextmonth = mktime(date('H', $now), date('i', $now),
        date('s', $now), date('m', $now) + 1,
        date('d', $now), date('Y', $now));

    //明年
    $nextyear = mktime(date('H', $now), date('i', $now),
        date('s', $now),date('m', $now),
        date('d', $now), date('Y', $now) + 1);

    b01_p164_echo_time($now);
    b01_p164_echo_time($tomorrow);
    b01_p164_echo_time($nextmonth);
    b01_p164_echo_time($nextyear);
}


/*
    验证日期有效性：
        checkdate ($month, $day, $year) {}

 */
function b01_p164_mktime_checkdate() {
    var_dump(checkdate(11, 30, 2008));
    echo "<br />";

    var_dump(checkdate(02, 29, 2010));
    echo "<br />";

    var_dump(checkdate(04, 31, 2012));
    echo "<br />";

    /*
        bool(true)
        bool(false)
        bool(false)
     */
}


//b01_p164_mktime_next();

b01_p164_mktime_checkdate();

