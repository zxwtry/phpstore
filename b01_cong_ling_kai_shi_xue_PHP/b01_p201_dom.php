<?php
/**
 * User:  zxwtry
 * File:  b01_p201_dom.php
 * Date:  2017/12/24
 * Time:  10:47
 */

/*
 *  使用DOM库处理XML文档，
 *  需要做的是创建一个DOM对象，
 *  然后载入相应的XML文档
 */
function b01_p201_dom_DOMDocument() {
    //两个DOM对象构造方法
    $dom1 = new DOMDocument();
    $dom2 = new DOMDocument("1.0", "iso-8859-1");
    $dom3 = new DOMDocument("1.0", "GBK");
    $dom4 = new DOMDocument("1.0", "UTF-8");
//    $dom1->load("E:/b.txt");
//    echo $dom1->saveXML();
    // 显示一个页面

    $dom4->load("E:/b.txt");
    echo $dom4->saveXML();
}


function b01_p201_dom_element() {
    $dom = new DOMDocument();
    $dom->load("E:/b.txt");
    $nodes = $dom->getElementsByTagName("para");
    foreach($nodes as $k => $v) {
        echo "key: " . $k . "<br/>";
        echo "tag: " . $v->tagName . "<br/>";
        echo "val: " . $v->nodeValue . "<br/>";
        echo "attr: " . $v->getAttribute("id") . "<br/>";
    }
    $dom->save("E:/c.txt");
    /*
        key: 0
        tag: para
        val: 什么是HTML
        attr: id_val1_html
        key: 1
        tag: para
        val: 是么是XML
        attr: id_val1_xml
        key: 2
        tag: para
        val: 什么是HTML2
        attr: id_val2
        key: 3
        tag: para
        val: 是么是XML2
        attr: id_val2
     */
}


//b01_p201_dom_DOMDocument();
//b01_p201_dom_element();
//b01_p201_dom_element();



