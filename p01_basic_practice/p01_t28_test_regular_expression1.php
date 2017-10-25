<?php
/**
 * Created by PhpStorm.
 * User: zxwtry
 * Date: 2017/10/20
 * Time: 16:47
 */


    //常用的正则表达式

    //匹配手机号码

    function preg_telphone($tel_num) {
        /*
            移动：134-139 147 150-152 157-159 182 187 188
            联通：130-132 155-156 185 186
            电信：133 153 180 189
         */

        $rule = "/^183[0-9]{8}$/";

        preg_match($rule, $tel_num, $result);

        return $result;
    }

    function test_preg_telphone() {
        $tel_num = '18309289552';
        $res = preg_telphone($tel_num);
        if ($res) {
            var_dump($res);
            /*
                array(2) {
                    [0]=> string(11) "18309289552"
                    [1]=> string(3)  "183"
                }

                array(1) {
                    [0]=> string(11) "18309289552"
                }

             */
            echo "<br/>";
            echo "匹配成功";
        } else {
            echo "匹配失败";
        }
    }

    function test_preg_slash() {
        $str = '/baidu/';
        $pat = '/^\/([a-z]+)\/$/';
        preg_match($pat, $str, $res);
        var_dump($res);
        /*
            array(2) {
                [0]=> string(7) "/baidu/"
                [1]=> string(5) "baidu"
            }
         */
    }


    function test_find_pic_real2() {
        #$url = '<img class="uploadedimg" src="http://udm-test.oss.aliyuncs.com/image/2017/1017/20171017060213286.jpg">';
        $url = '<img class="uploadedimg" src="http1234">';

        #$prefix = $this->oss['oss_root_url'];
        $prefix = 'http';
        $pattern = '<img class="([0-9a-zA-Z]+)" src="' . $prefix . '([0-9a-zA-Z]+)' . '">';

        /*
            array(3) {
                [0]=> string(38) "img class="uploadedimg" src="http1234""
                [1]=> string(11) "uploadedimg"
                [2]=> string(4) "1234"
            }
         */

        preg_match($pattern, $url, $res);

        var_dump($res);
    }

    function test_find_pic_real3() {
        $url = '<img class="uploadedimg" src="http://udm-test.oss.aliyuncs.com/image/2017/1017/20171017060213286.jpg">';

        #$prefix = $this->oss['oss_root_url'];
        $prefix = 'http:\/\/udm-test.oss.aliyuncs.com';
        $pattern = '<img class="([0-9a-zA-Z]+)" src="' . $prefix . '\/([0-9a-zA-Z.\/]+)' . '">';

        /*
            array(3) {
        [0]=> string(100) "img class="uploadedimg" src="http://udm-test.oss.aliyuncs.com/image/2017/1017/20171017060213286.jpg""
        [1]=> string(11) "uploadedimg"
        [2]=> string(37) "image/2017/1017/20171017060213286.jpg" }
         */

        preg_match($pattern, $url, $res);

        var_dump($res);

        echo "<br/>";
        echo "<br/>";
        echo "<br/>";

        var_dump($res[2]);
    }


    function test_find_pic_real4() {
        $url = '<img class=\"uploadedimg\" src=\"http://udm-test.oss.aliyuncs.com/image/2017/1017/20171017060213286.jpg\">';
        //$prefix = $this->oss['oss_root_url'];
        $prefix = 'http://udm-test.oss.aliyuncs.com';
        $pattern = '<img class=([\\]?)([\'"]{1})([0-9a-zA-Z]+)([\\]?)([\'"]{1}) src=([\\]?)([\'"]{1})' . $prefix . '\/([0-9a-zA-Z.\/]+)' . '([\\]?)([\'"]{1})>';
        $pattern = '<img class=([\'"]{1})([0-9a-zA-Z]+)([\'"]{1}) src=([\'"]{1})' . $prefix . '\/([0-9a-zA-Z.\/]+)' . '([\'"]{1})>';

        preg_match($pattern, $url, $res);

        var_dump($res);


//        $str = '\\"abc"';
//        $pat = '"([a-z]+)"';
//        preg_match($pat, $str, $res);
//        var_dump($res);
    }

    function test_backslash() {
        $content = '1111111<td>2222222<\/td>3$';
        //'\\\\\/' 第1个'\'转义字符串的第2个'\'，字符串为'\'
        //第3个'\'转义第4个'\'，相当于字符串'\'
        //第5个'\'转义第4个'/'，相当于字符串'/'
        //字符合起来为'\\/' 两个'\\' 正则表达式看做'\'
        $pattern = '/<td>([0-9]{7,})<\\\\\/td>\d\\$$/';
        $result = preg_match_all($pattern, $content, $match_result);
        if($result)
            print_r($match_result);
        else
            echo("not match");
    }



    //test_preg_telphone();


    //test_find_pic_real2();

    //test_preg_slash();

    //test_find_pic_real3();

    test_find_pic_real4();

    //test_backslash();





?>

