<?php
/**
 * Created by PhpStorm.
 * User: zxwtry
 * Date: 2017/11/8
 * Time: 18:06
 */


/*
 *  就是try catch
 */
function b01_p093_exception() {
    try {
        $error = "数据库连接失败";

        throw new Exception($error);

        echo "永远不会执行";
    } catch (Exception $e) {
        echo "捕捉到异常";
        echo "<br />";
        echo "msg: " . $e->getMessage();
        echo "<br />";
    }

    echo "继续执行";
    echo "<br />";
}

/*
 *  进一次函数，在$cnt中先加一
 */
function b01_p094_profile($dump = false) {
    static $cnt = 0;

    if ($dump) {
        return $cnt;
    }

    $cnt ++;
}


function b01_p094_declare() {
    register_tick_function("b01_p094_profile");

    b01_p094_profile();

    declare(ticks=2) {
        for ($x = 1; $x < 50; ++ $x) {
//            echo similar_text(md5($x), md5($x * $x)) . "<br />";
        }
    }

    echo "<br />";
    echo "<br />";
    echo "<br />";

    print_r(b01_p094_profile(true));

}


//b01_p093_exception();
b01_p094_declare();

// echo phpinfo();
?>