<?php
/**
 * User:  zxwtry
 * File:  b01_p196_xml.php
 * Date:  2017/12/15
 * Time:  23:07
 */


function b01_p196_xml_simpleXML01() {
    $xml = "<root><node>Content</node></root>";
    $sxe = new SimpleXMLElement($xml);
    echo "<pre>";
    var_dump($sxe);

    /*
        object(SimpleXMLElement)#1 (1) {
          ["node"]=>
          string(7) "Content"
        }
     */
}


function b01_p196_xml_simple_load_string() {
    $xml = "<root><node>Content</node></root>";
    $sxe = simplexml_load_string($xml);
    echo "<pre>";
    var_dump($sxe);
    /*
        object(SimpleXMLElement)#1 (1) {
          ["node"]=>
          string(7) "Content"
        }
     */
}


function b01_p196_xml_foreach() {
    $xml = <<<EOD
<?xml version="1.0" encoding="UTF-8"?>
<book>
<title>XML指南</title>
<prod id="33-657" media="paper"></prod>
<chapter>
<p>XML入门简介</p>
<para>什么是HTML</para>
<para>是么是XML</para>
</chapter>
<chapter>
<p>XML入门简介2</p>
<para>什么是HTML2</para>
<para>是么是XML2</para>
</chapter>
</book>
EOD;

    $sxe = simplexml_load_string($xml);

//    echo "<pre>";
//    var_dump($sxe);
    /*
        object(SimpleXMLElement)#1 (3) {
          ["title"]=>
          string(9) "XML指南"
          ["prod"]=>
          object(SimpleXMLElement)#2 (1) {
            ["@attributes"]=>
            array(2) {
              ["id"]=>
              string(6) "33-657"
              ["media"]=>
              string(5) "paper"
            }
          }
          ["chapter"]=>
          array(2) {
            [0]=>
            object(SimpleXMLElement)#3 (2) {
              ["p"]=>
              string(15) "XML入门简介"
              ["para"]=>
              array(2) {
                [0]=>
                string(13) "什么是HTML"
                [1]=>
                string(12) "是么是XML"
              }
            }
            [1]=>
            object(SimpleXMLElement)#4 (2) {
              ["p"]=>
              string(16) "XML入门简介2"
              ["para"]=>
              array(2) {
                [0]=>
                string(14) "什么是HTML2"
                [1]=>
                string(13) "是么是XML2"
              }
            }
          }
        }
     */


//    foreach($sxe as $a) {
//        echo "<pre>";
//        var_dump($a);
//        echo "<hr />";
//    }

    /*
        object(SimpleXMLElement)#3 (0) { }
        object(SimpleXMLElement)#4 (1) {
            ["@attributes"]=> array(2) {
                ["id"]=> string(6) "33-657"
                ["media"]=> string(5) "paper" } }
        object(SimpleXMLElement)#3 (2) {
            ["p"]=> string(15) "XML入门简介"
            ["para"]=> array(2) {
                [0]=> string(13) "什么是HTML"
                [1]=> string(12) "是么是XML" } }
        object(SimpleXMLElement)#4 (2) {
            ["p"]=> string(16) "XML入门简介2"
            ["para"]=> array(2) {
                [0]=> string(14) "什么是HTML2"
                [1]=> string(13) "是么是XML2" } }
     */


//    echo $sxe->chapter[0]->para[0];
    // 输出：什么是HTML

//    echo $sxe->chapter->para[0];
    // 输出：什么是HTML

//    echo $sxe->chapter[1]->para[1];
    // 是么是XML2

    $res = $sxe->xpath("/book/chapter/para");
//    echo "<pre>";
//    var_dump($res); //这个输出有问题，问题未知

//    foreach($res as $k => $v) {
//        echo "key: " . $k . "<br/>";
//        echo "val: " . $v . "<br/>";
//    }
    /*
        key: 0
        val: 什么是HTML
        key: 1
        val: 是么是XML
        key: 2
        val: 什么是HTML2
        key: 3
        val: 是么是XML2
     */
}


function b01_p196_xml_save() {
    $xml = <<<EOD
<?xml version="1.0" encoding="UTF-8"?>
<book>
<title>XML指南</title>
<prod id="33-657" media="paper"></prod>
<chapter>
<p>XML入门简介</p>
<para>什么是HTML</para>
<para>是么是XML</para>
</chapter>
<chapter>
<p>XML入门简介2</p>
<para>什么是HTML2</para>
<para>是么是XML2</para>
</chapter>
</book>
EOD;

    $sxe = simplexml_load_string($xml);
    $sxe->title = "新的XML指南";
    $new_xml = $sxe->asXML();
    $gbk_xml = mb_convert_encoding($new_xml, "UTF-8", "GBK");
    file_put_contents("E:/b.txt", $xml);
    file_put_contents("E:/a.txt", $gbk_xml);

}


function b01_p196_xml_rss() {
    // 读取百度新闻RSS
    $xml = simplexml_load_file(
        "http://news.baidu.com/n?cmd=1&class=civilnews&tn=rss",
        "SimpleXMLElement", LIBXML_NOCDATA
    );

    foreach($xml->channel->item as $item) {
        echo "标题：" . $item->title . "<br/>";
        echo "地址：" . $item->link . "<br/>";
        echo "时间：" . date("Y-m-d H:i:s",
                strtotime($item->pubDate)) . "<br/>";
        echo "摘要：" . $item->description . "<br/>";
        echo "<hr />";
    }
}


//b01_p196_xml_simpleXML01();
//b01_p196_xml_simple_load_string();
//b01_p196_xml_foreach();
//b01_p196_xml_save();
//b01_p196_xml_rss();