<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/20
 * Time: 18:39
 */


    #$str = '<img class=\"uploadedimg\" src=\"http://udm-test.oss.aliyuncs.com/image/2017/1020/20171020063709645.jpg\"></img>';

    $str = '<img class="uploadedimg" src="http://udm-test.oss.aliyuncs.com/image/2017/1020/20171020063709645.jpg"></img>';

    $val = "<img class=\"uploadedimg\" src=\"http://udm-test.oss.aliyuncs.com/image/2017/1020/20171020063709645.jpg\">";

    $v2 = "<img class=\"uploadedimg\" src=\"http://udm-test.oss.aliyuncs.com/image/2017/1022/20171022103649309.png\"></img>";

//    $xml = simplexml_load_string($val . "</img>");
//
//    var_dump($xml);

    $v3 = '<img class=\"uploadedimg\" src=\"http://udm-test.oss.aliyuncs.com/image/2017/1022/20171022103649309.png\">';

    $v3 .= '</img>';


    $xml = simplexml_load_string($v2);

//    var_dump($xml);

    echo $str[strlen($str) - 1];
