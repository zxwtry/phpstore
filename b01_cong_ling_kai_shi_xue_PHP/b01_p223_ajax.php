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

    7， 注意：在使用POST方式提交数据时，需要使用
        setRequestHeader()函数发送特定的header

    8， XmlHttpRequest的readyState数值和意义
        0   对象已建立，但尚未初始化（尚未调用open方法）
        1   对象已建立，但尚未调用send方法
        2   send方法已经调用，当前的状态及HTTP头未知
        3   已接收部分数据，响应及HTTP头不全，这时通过responseBody和
            responseText获取部分数据会出现错误
        4   数据接收完毕，可以通过responseBody和responseText获取完整的回应数据

        function callBack() {
            if (xmlHttp.readyState == 4) {
                var resp = xmlHttp.responseText;
                console.log(resp);
            }
        }
 */


/*
    基于Ajax的用户名验证程序
 */

if (isset($_GET["submit"])) {
    header("Content-Type: text/html; charset=UTF-8");
    if ($_POST["username"] == "php" && $_POST["password"] == "123") {
        echo "欢迎来到PHP";
    } else {
        echo "用户名或密码错误";
    }
}
?>

<script type="text/javascript">
    function getXmlHttpRequest() {
        var xmlHttp = null;
        try {
            xmlHttp = new XMLHttpRequest();
        } catch (e) {
            try {
                xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    xmlHttp = false;
                }
            }
        }
        return xmlHttp;
    }

    
    function sendRequest(url, call_back, data) {
        var data = data || "";
        xmlHttp.onreadystatechange = call_back;
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
    
    
    function callBack() {
        if (xmlHttp.readyState == 4) {
            var response = xmlHttp.responseText;
            console.log(response);
        }
    }


    var xmlHttp = getXmlHttpRequest();


    function AJAXRequest() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        sendRequest("b01_p223_ajax.php?submit=1", callBack, "username=" + username + "&password=" + password);
    }

</script>

<form method="post" action="">
    <p>
        用户名：<input type="text" name="username" id="username">
    </p>
    <p>
        密码：<input type="text" name="password" id="password">
    </p>
    <p>
        <input type="button" onclick="AJAXRequest()" value="开始验证">
    </p>
</form>
