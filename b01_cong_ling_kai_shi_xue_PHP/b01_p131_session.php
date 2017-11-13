<?php
/**
 * User:  zxwtry
 * File:  b01_p131_session.php
 * Date:  2017/11/10
 * Time:  1:27
 */

    /*
        无论结果如何，session_start()都会返回一个true
        配置session.auto_start，可以省略这个函数
        向服务器注册用户的会话，同时为用户会话分配一个SID
    */

    /*
        销毁会话：
            使用unset()或session_destroy()函数
        例如：
            unset($_SESSION['season'])
            session_destroy();      //重置session
     */

    if (isset($_POST['submit'])) {
        session_start();
        $_SESSION['season'] = $_POST['season'];
    }

    echo "========= _SESSION start =============<br />";
    if (!empty($_SESSION)) {
        foreach($_SESSION as $key => $val) {
            echo "key: " . $key . "<br />";
            echo "val: " . $val . "<br /><br />";
        }
    }
    echo "========= _SESSION end   =============<br />";



?>

<html>

    <body>

        <h1>你好</h1>

        选择数据：
        <form id="form1" name="form1" method="post" action="">
            <select name="season" id="season">
                <option value="春天">春天</option>
                <option value="夏天">夏天</option>
                <option value="秋天">秋天</option>
                <option value="冬天">冬天</option>
            </select>
            <br/>
            <br/>
            <input type="submit" name="submit" id="submit" value="提交" />

        </form>

    </body>

</html>


