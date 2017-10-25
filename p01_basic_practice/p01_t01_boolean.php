<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/25
 * Time: 9:57
 */

$b1 = intval($no_val);

$b2 = ! $b1;

if ($b2) {
    echo '$b2 is true';
} else {
    echo '$b2 is false';
}

echo "<br />";
echo $b2;

/*
 *  输出：'$b2 is true'
 *  会有一个提示，$no_val不存在
 *  $b1 是 0
 *  $b2 是 1
 */