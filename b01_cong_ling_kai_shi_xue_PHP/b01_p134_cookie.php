<?php
/**
 * User:  zxwtry
 * File:  b01_p134_cookie.php
 * Date:  2017/11/11
 * Time:  23:44
 */


/*
    浏览器允许每个域名所包含的cookie数目
    IE：50
    Firefox：50
    Chrome：未知

    cookie总大小：4k字节（包括 key value 等号）
    所有浏览器中，任何cookie大小超过限制都被忽略，不会设置
 */

/*
    浏览器：请求页面时，同时发送cookie

    创建cookie：
        setcookie()可以在PHP程序中生成cookie

    cookie是HTTP头标部分的内容，
    必须在输出任何数据之前调用setcookie()

    setcookie()语法：

    setcookie ($name, $value = "", $expire = 0, $path = "",
            $domain = "", $secure = false, $httponly = false) {}

    $name：cookie的名称
    $value：cookie的值，保存在客户端；为空字符串时，表示撤销该cookie的资料
    $expire：cookie有效的截止时间，必须是整型
    $path：cookie有效的路径
    $domain：cookie有效的域名
    $secure：https的安全传输时才有效
 */


function b01_p134_cookie_set_cookie() {
    setcookie("testcookie['v1']", "v1_ilovephp");
    setcookie("testcookie['v2']", "v2_ilovephp");
    setcookie("testcookie['v3']", "v3_ilovephp");
    if (isset($_COOKIE['testcookie'])) {
        foreach($_COOKIE['testcookie'] as $key => $val) {
            echo "key: " . $key . "<br />";
            echo "val: " . $val . "<br /><br />";
        }
    }
}


/*
    设置cookie的有效期
    expire参数：以秒来记
        一分钟之后过期：time() + 60
        2020年1月2号6点失效：mktime()
        mktime ($hour = null, $minute = null,
                $second = null, $month = null,
                $day = null, $year = null, $is_dst = null) {}
        mktime(6, 0, 0, 1, 2, 2020);

    如果未指定cookie的失效时间，或指定为0
    那么cookie将会在会话结束时失效，通常是关闭浏览器后失效
 */
function b01_p134_cookie_expire() {
    //1分钟后，cookie失效
    setcookie("ex[v1]", "v1_value", time() + 60);
    if (isset($_COOKIE['ex'])) {
        foreach ($_COOKIE['ex'] as $key => $val) {
            echo "key: " . $key . "<br />";
            echo "val: " . $val . "<br /><br />";
        }
    }
}


/*
    cookie的有效路径：

    1， 客户端的cookie只会回送给同目录或子目录的页面

        一个由http://www.zxwtry.com/index.php设置的cookie，
        会被所有到www.zxwtry.com请求回送至服务器

        一个由http://www.zxwtry.com/user/login.php设置的cookie
        不能回送至http://www.zxwtry.com/orders/info.php

    2， 如果需要客户端把cookie传回到不同的路径下，
        可以通过第四个参数path设置

        设置path为'/'：cookie在整个服务器域名内有效
        设置path为'/my_path/'：只在域名的/my_path/目录及其子目录有效

        setcookie('my_cookie', 'cookie_msg', 0, '/my_path/');

 */
function b01_p134_cookie_path() {

}


/*
    删除cookie
    setcookie('my_cookie', '');
    删除cookie中的my_cookie
 */

//b01_p134_cookie_set_cookie();
//b01_p134_cookie_expire();

?>