<?php
/**
 * User:  zxwtry
 * File:  b01_p223_ajax.php
 * Date:  2017/12/28
 * Time:  16:51
 */


/*
    AJAX
    1， AJAX --> Asynchronous JavaScript and XML（异步JavaScript和XML）
    2， AJAX核心：XMLHttpRequest对象，远程连接对象。
    3， var xmlHttp = new XMLHttpRequest();  // 大多数浏览器
        var xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");   // ie6

        // 优化一
        var xmlHttp = null;
        if (window.xmlHttpRequest) {
            xmlHttp = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        // 优化二
        var xmlHttp = null;
        try {
            xmlHttp = new XMLHttpRequest();
        } catch (e) {
            try {
                mlHttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    xmlHttp = false;
                }
            }
        }

    4， XMLHttpRequest对象的属性：
        onreadystatechange      只写  指定readyState属性改变时，事件处理句柄
        readyState              只读  返回当前请求的状态
        responseBody            只读  返回响应正文(unsigned byte数组)
        responseStream          只读  返回响应信息(Ado Stream)
        responseText            只读  返回响应信息(字符串)
        responseXML             只读  返回响应信息(格式化为 Xml Document)
        status                  只读  返回HTTP状态码
        statusText              只读  返回响应行状态

    5， XMLHttpRequest对象的方法：
        abort                   取消当前请求
        getAllResponseHeaders   获取响应的所有HTTP头
        getResponseHeader       获取指定的HTTP头
        open                    创建一个新的HTTP请求
                                可以指定此请求的方法、URL、验证信息
        send                    发送请求到HTTP服务器并接收响应
        setRequestHeader        单独指定请求的某个HTTP头

    6， AJAX发送函数：
        function sendRequest(url, call_back, data) {
            xmlHttp.onreadystatechange = call_back;
            var data = data || "";
            if (data != "") {
                xmlHttp.open("POST", url, true);
                xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlHttp.setRequestHeader("Content-length", data.length);
                xmlHttp.setRequestHeader("Connection", "close");
            } else {
                xmlHttp.open("GET", url, true);
            }
            xmlHttp.send(data);
        }

    7，
 */


/*
    异步发送请求
    1，
 */


?>

<script type="text/javascript">
    var xmlHttp = new XMLHttpRequest();

</script>
