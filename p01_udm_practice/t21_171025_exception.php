<?php
    $v1 = 0;
    $v2 = 100;
    try {
        $error = "连接数据库失败";
        throw  new Exception($error);

        echo "不会执行的代码";
    } catch (Exception $e) {
        echo "捕捉到异常：" . $e->getMessage() . "<br /> \n";
    }

    echo "继续执行的代码";
?>