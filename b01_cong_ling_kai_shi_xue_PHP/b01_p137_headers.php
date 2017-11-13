<?php
/**
 * User:  zxwtry
 * File:  b01_p137_headers.php
 * Date:  2017/11/12
 * Time:  12:21
 */

    /*
        headers（标头）：
            服务器以HTTP协议传HTML资料到浏览器
            前所送出的字符串

            在标头与HTML文件之前有一行分隔

        在PHP中送出HTML资料前，需先传完所有的headers
     */


    /*
        传统headers一定包含，并只能出现一次
            Content-Type: xxxx/yyyy
            Location: xxxx:yyyy/zzzz
            Status: nnn xxxxxx
     */

    /*
        PHP提供header函数用来将HTML文档的标头以HTTP协议发送至浏览器
        ，用于告诉浏览器该如何处理这个页面
            header(string $str_header);

        在调用header()函数之前不能有任何的输出，
        否则程序将会出错
     */


    function b01_p137_headers_location() {
        header("Location: http://www.zxwtry.com/");
        //重定向网站
        die();
    }


    /*
        想要让用户每次都得到最新的资料，
        而不是Proxy或cache中的资料
     */
    function b01_p137_headers_no_cache() {
        //告诉浏览器此页面的过期时间（国际标准时间），只要是已经过去的时间即可
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");
        header("Cache-Control: no-cache, must-revalidate");
        //告诉浏览器不使用缓存
        header("Pragma: no-cache");
    }


    /*
        限制某一页面不能被用户访问，设置页面状态404
     */
    function b01_p137_headers_404() {
        header("status: 404 Not Found");
    }

//    b01_p137_headers_location();
    b01_p137_headers_404();

?>